<?php
// $Id: EbatNs_Client.php,v 1.6 2008-09-29 13:36:26 michael Exp $
// $Log: EbatNs_Client.php,v $
// Revision 1.6  2008-09-29 13:36:26  michael
// added $this->_incrementApiUsage($method) to callShoppingApiStyle()
//
// Revision 1.5  2008/06/09 11:16:09  michael
// *** empty log message ***
//
// Revision 1.4  2008/06/06 05:44:19  michael
// *** empty log message ***
//
// Revision 1.3  2008/06/06 05:39:14  michael
// *** empty log message ***
//
// Revision 1.2  2008/06/05 08:21:06  michael
// Initial PHP5
//

require_once 'EbatNs_ResponseError.php';
require_once 'EbatNs_ResponseParser.php';

require_once 'EbatNs_DataConverter.php';

class EbatNs_Client
{ 
	// endpoint for call
	var $_ep;
	var $_session;
	var $_currentResult;
	var $_parser = null; 
	// callback-methods/functions for data-handling
	var $_hasCallbacks = false;
	var $_callbacks = null; 
	// EbatNs_DataConverter object
	var $_dataConverter = null;
	
	var $_logger = null;
	var $_parserOptions = null;
	
	var $_paginationElementCounter = 0;
	var $_paginationMaxElements = -1;
	
	var $_transportOptions = array();
	var $_loggingOptions   = array();
	var $_callUsage = array();
	
	//
	// timepoint-tracing
	//
	protected $_timePoints = null;
	protected $_timePointsSEQ = null;

	function getVersion()
	{
		return EBAY_WSDL_VERSION;
	}	

	function __construct($session, $converter = 'EbatNs_DataConverterIso' )
	{
		$this->_session = $session;
		if ($converter)
			$this->_dataConverter = new $converter();
		$this->_parser = null;
		
		$timeout = $session->getRequestTimeout();
		if (!$timeout)
			$timeout = 300;
		$httpCompress = $session->getUseHttpCompression();	
		
		$this->setTransportOptions(
				array(
					'HTTP_TIMEOUT'  => $timeout, 
					'HTTP_COMPRESS' => $httpCompress));
	} 
	
	function resetPaginationCounter($maxElements = -1)
	{
		$this->_paginationElementCounter = 0;
		if ($maxElements > 0)
			$this->_paginationMaxElements = $maxElements;
		else
			$this->_paginationMaxElements = -1;
	}
	
	function incrementPaginationCounter()
	{
		$this->_paginationElementCounter++;
		
		if ($this->_paginationMaxElements > 0 && ($this->_paginationElementCounter > $this->_paginationMaxElements))
			return false;
		else
			return true;
	}
	
	function getPaginationCounter()
	{
		return $this->_paginationElementCounter;
	}
	
	function setParserOption($name, $value = true)
	{
		$this->_parserOptions[$name] = $value;
	}
	
	function log( $msg, $subject = null )
	{
		if ( $this->_logger )
			$this->_logger->log( $msg, $subject );
	} 
	
	function logXml( $xmlMsg, $subject = null )
	{
		if ( $this->_logger )
			$this->_logger->logXml( $xmlMsg, $subject );
	} 
	
	function attachLogger($logger)
	{
		$this->_logger = $logger;
	}
	
	// HTTP_TIMEOUT: default 300 s
	// HTTP_COMPRESS: default true
	function setTransportOptions($options)
	{
		$this->_transportOptions = array_merge($this->_transportOptions, $options);
	}
	
	// LOG_TIMEPOINTS: true/false
	// LOG_API_USAGE: true/false
	function setLoggingOptions($options)
	{
		$this->_loggingOptions = array_merge($this->_loggingOptions, $options);
	}
	
	
	protected function _getMicroseconds()
	{
		list( $ms, $s ) = explode( ' ', microtime() );
		return floor( $ms * 1000 ) + 1000 * $s;
	} 
	
	protected function _getElapsed( $start )
	{
		return $this->_getMicroseconds() - $start;
	} 
	
	protected function _startTp( $key )
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;
		
		if ( isset( $this->_timePoints[$key] ) )
			$tp = $this->_timePoints[$key];
		
		$tp['start_tp'] = time();
		
		$tp['start'] = $this->_getMicroseconds();
		$this->_timePoints[$key] = $tp;
	} 
	
	protected function _stopTp( $key )
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;
		
		if ( isset( $this->_timePoints[$key]['start'] ) )
		{
			$tp = $this->_timePoints[$key];
			$tp['duration'] = $this->_getElapsed( $tp['start'] ) . 'ms';
			unset( $tp['start'] );
			$this->_timePoints[$key] = $tp;
		} 
	} 
	
	protected function _logTp()
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;
		
		// log the timepoint-information
		ob_start();
		echo "<pre><br>\n";
		print_r($this->_timePoints);
		print_r("</pre><br>\n");
		$msg = ob_get_clean();
		$this->log($msg, '_EBATNS_TIMEPOINTS');
	}
	
	//
	// end timepoint-tracing
	//
	
	// callusage
	protected function _incrementApiUsage($apiCall)
	{
		if (!$this->_loggingOptions['LOG_API_USAGE'])	
			return;
		
		$this->_callUsage[$apiCall] = $this->_callUsage[$apiCall] + 1;
	}
	
	function getApiUsage()
	{
		return $this->_callUsage;
	}
	
	function getParser($tns = 'urn:ebay:apis:eBLBaseComponents', $parserOptions = null, $recreate = true)
	{
		if ($recreate)
			$this->_parser = null;
		
		if (!$this->_parser)
		{
			if ($parserOptions)
				$this->_parserOptions = $parserOptions;
			$this->_parser = new EbatNs_ResponseParser( $this, $tns, $this->_parserOptions );
		}
		return $this->_parser;
	}
	
	// should return true if the data should NOT be included to the
	// response-object !
	function _handleDataType( $typeName, $value, $mapName )
	{
		if ( $this->_hasCallbacks )
		{
			if (isset($this->_callbacks[strtolower( $typeName )]))
				$callback = $this->_callbacks[strtolower( $typeName )];
			else
				$callback = null;
			if ( $callback )
			{
				if ( is_object( $callback['object'] ) )
				{
					return call_user_method( $callback['method'], $callback['object'], $typeName, & $value, $mapName, & $this );
				} 
				else
				{
					return call_user_func( $callback['method'], $typeName, & $value, $mapName, & $this );
				} 
			} 
		} 
		return false;
	} 
	
	// $typeName as defined in Schema
	// $method (callback, either string or array with object/method)
	function setHandler( $typeName, $method )
	{
		$this->_hasCallbacks = true;
		if ( is_array( $method ) )
		{
			$callback['object'] = $method[0];
			$callback['method'] = $method[1];
		} 
		else
		{
			$callback['object'] = null;
			$callback['method'] = $method;
		} 
		
		$this->_callbacks[strtolower( $typeName )] = $callback;
	} 
	
	// should return a serialized XML of the outgoing message
	function encodeMessage( $method, $request )
	{
		return $request->serialize( $method . 'Request', $request, null, true, null, $this->_dataConverter );
	} 
	// should transform the response (body) to a PHP object structure
	function decodeMessage( $method, $msg, $parseMode )
	{
		$this->_parser = &new EbatNs_ResponseParser( $this, 'urn:ebay:apis:eBLBaseComponents', $this->_parserOptions );
		return $this->_parser->decode( $method . 'Response', $msg, $parseMode );
	} 
	
	function callShoppingApiStyle($method, $request, $parseMode = EBATNS_PARSEMODE_CALL)
	{
		if ($this->_session->getAppMode() == 1)
			$ep = 'http://open.api.sandbox.ebay.com/shopping';
		else
			$ep = 'http://open.api.ebay.com/shopping';

		$this->_incrementApiUsage($method);
		
		// place all data into theirs header
		$reqHeaders[] = 'X-EBAY-API-VERSION: ' . $this->getVersion();
		$reqHeaders[] = 'X-EBAY-API-APP-ID: ' . $this->_session->getAppId();
		$reqHeaders[] = 'X-EBAY-API-CALL-NAME: ' . $method;
		$siteId = $this->_session->getSiteId();
		if (empty($siteId))
			$reqHeaders[] = 'X-EBAY-API-SITE-ID: 0';
		else
			$reqHeaders[] = 'X-EBAY-API-SITE-ID: ' . $siteId;
		$reqHeaders[] = 'X-EBAY-API-REQUEST-ENCODING: XML';
		
		$body = $this->encodeMessageXmlStyle( $method, $request );
		
		$message = '<?xml version="1.0" encoding="utf-8"?>' . "\n";
		$message .= $body;
		
		$this->_ep = $ep;
		
		$responseMsg = $this->sendMessageShoppingApiStyle( $message, $reqHeaders );
		
		if ( $responseMsg )
		{
			$this->_startTp('Decoding SOAP Message');
			$ret = & $this->decodeMessage( $method, $responseMsg, $parseMode );
			$this->_stopTp('Decoding SOAP Message');
		}
		else
		{
			$ret = & $this->_currentResult;
		}
		
		return $ret;
	}
	
	function sendMessageShoppingApiStyleNonCurl( $message, $extraXmlHeaders )
	{
		// this is the part for systems that are not have cURL installed 
		$transport = new EbatNs_HttpTransport();
		if (is_array($extraXmlHeaders))
			$reqHeaders = array_merge((array)$reqHeaders, $extraXmlHeaders);
		
		$responseRaw = $transport->Post($this->_ep, $message, $reqHeaders);
		if (!$responseRaw)
		{
			$this->_currentResult = new EbatNs_ResponseError();
			$this->_currentResult->raise( 'transport error (none curl) ', 90000 + 1, EBAT_SEVERITY_ERROR );
			return null;
		}
		else
		{
			if (isset($responseRaw['errors']))
			{
				$this->_currentResult = new EbatNs_ResponseError();
				$this->_currentResult->raise( 'transport error (none curl) ' . $responseRaw['errors'], 90000 + 2, EBAT_SEVERITY_ERROR );
				return null;
			}
			
			$responseBody = $responseRaw['data'];
			if ($responseBody)
				$this->logXml( $responseBody, 'Response' );
			else
				$this->logXml( $responseRaw, 'ResponseRaw' );
			
			return $responseBody;
		}
	}
	
	function sendMessageShoppingApiStyle( $message, $extraXmlHeaders )
	{
		$this->_currentResult = null;
		
		$this->log( $this->_ep, 'RequestUrl' );
		$this->logXml( $message, 'Request' );
		
		$timeout = $this->_transportOptions['HTTP_TIMEOUT'];
		if (!$timeout || $timeout <= 0)
			$timeout = 300;
		
		// if we have a special HttpTransport-class defined use it !
		if (class_exists('EbatNs_HttpTransport'))
			return $this->sendMessageShoppingApiStyleNonCurl($message, $extraXmlHeaders);
		
		// continue with curl support !				
		$ch = curl_init();
		
		$reqHeaders[] = 'Content-Type: text/xml;charset=utf-8';
		
		if ($this->_transportOptions['HTTP_COMPRESS'])
		{
			$reqHeaders[] = 'Accept-Encoding: gzip, deflate';
			curl_setopt( $ch, CURLOPT_ENCODING, "gzip");
			curl_setopt( $ch, CURLOPT_ENCODING, "deflate");
		}
		
		if (is_array($extraXmlHeaders))
			$reqHeaders = array_merge((array)$reqHeaders, $extraXmlHeaders);
		
		ob_start();
		print_r($reqHeaders);
		$this->log(ob_get_clean(), 'Request headers');
		
		curl_setopt( $ch, CURLOPT_URL, $this->_ep );
		
		// curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
		// curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
		
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $reqHeaders );
		curl_setopt( $ch, CURLOPT_USERAGENT, 'ebatns;shapi;1.0' );
		curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
		
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $message );
		
		curl_setopt( $ch, CURLOPT_FAILONERROR, 0 );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_HEADER, 1 );
		curl_setopt( $ch, CURLOPT_HTTP_VERSION, 1 );
		
		// added support for multi-threaded clients
		if (isset($this->_transportOptions['HTTP_CURL_MULTITHREADED']))
		{
			curl_setopt( $ch, CURLOPT_DNS_USE_GLOBAL_CACHE, 0 );
		}
		
		$responseRaw = curl_exec( $ch );
		
		if ( !$responseRaw )
		{
			$this->_currentResult = new EbatNs_ResponseError();
			$this->_currentResult->raise( 'curl_error ' . curl_errno( $ch ) . ' ' . curl_error( $ch ), 80000 + 1, EBAT_SEVERITY_ERROR );
			curl_close( $ch );
			
			return null;
		} 
		else
		{
			curl_close( $ch );
			
			$responseBody = null;
			if ( preg_match( "/^(.*?)\r?\n\r?\n(.*)/s", $responseRaw, $match ) )
			{
				$responseBody = $match[2];
				$headerLines = split( "\r?\n", $match[1] );
				foreach ( $headerLines as $line )
				{
					if ( strpos( $line, ':' ) === false )
					{
						$responseHeaders[0] = $line;
						continue;
					} 
					list( $key, $value ) = split( ':', $line );
					$responseHeaders[strtolower( $key )] = trim( $value );
				} 
			} 
			
			if ($responseBody)
				$this->logXml( $responseBody, 'Response' );
			else
				$this->logXml( $responseRaw, 'ResponseRaw' );
		} 
		
		return $responseBody;
	} 

	function encodeMessageXmlStyle( $method, $request )
	{
		return $request->serialize( $method . 'Request', $request, array('xmlns' => 'urn:ebay:apis:eBLBaseComponents'), true, null, $this->_dataConverter );
	}
	
	public function hasDataConverter()
	{
	    return ($this->_dataConverter !== null);
	}
	
	public function getDataConverter()
	{
	    return $this->_dataConverter;
	}
	
    public function hasCallbacks()
	{
	    return $this->_hasCallbacks;
	}
	
	/**
	 * Reformats the error data in the response to a printable text or html output
	 *
	 * @param AbstractResponseType $response	A response returned by any of the eBay API calls
	 * @param Boolean $asHtml	Flag to pass the error in htmlentities for better formating
	 * @param Boolean $addSlashes	Uses addslashes to make the error-string directly insertable to a DB
	 * @return string
	 */
	public function getErrorsToString($response, $asHtml = false, $addSlashes = true)
	{
		$errmsg = '';
		
		if (count($response->getErrors()))
			foreach ($response->getErrors() as $errorEle)
				$errmsg .= '#' . $errorEle->getErrorCode() . ' : ' . ($asHtml ? htmlentities($errorEle->getLongMessage()) :  $errorEle->getLongMessage()) . ($asHtml ? "<br>" : "\r\n");

		if ($addSlashes)
			return addslashes($errmsg);
		else   
			return $errmsg;
	}
} 
?>