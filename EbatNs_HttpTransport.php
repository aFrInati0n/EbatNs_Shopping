<?php
// $Id: EbatNs_HttpTransport.php,v 1.1 2008-04-30 13:51:29 carsten Exp $
// $Log: EbatNs_HttpTransport.php,v $
// Revision 1.1  2008-04-30 13:51:29  carsten
// *** empty log message ***
//
// Revision 1.1  2007/08/03 12:18:02  michael
// *** empty log message ***
//

class EbatNs_HttpTransport
{
	function Post($rawUrl, $data, $addHeaders = null)
	{
		$pParts = parse_url($rawUrl);
		$host = $pParts['host'];
		if (!isset($pParts['port']))
			$port = 80;
		else
			$port = $pParts['port'];
		$path = $pParts['path'];
		if (isset($pParts['query']))
		{
			// check URL-encode
			// multiple parts ?
			$path .= '?' . $pParts['query'];
		}
		// no user/pwd
		// no fragment
		
		// always assuming HTTP !
		
		// setup the headers !
		// $headers[] = 'Accept-Encoding: none;';
		$headers[] = 'User-Agent: ebatns;shapi;1.0';
		$headers[] = 'Content-Type: text/xml;charset=utf-8';
		if ($addHeaders !== null)
			$headers = array_merge($headers, $addHeaders);
		
		$cmds[] = 'POST ' . $path . ' HTTP/1.1';
		$cmds[] = 'Host: ' . $host;
		foreach($headers as $header)
			$cmds[] = $header;
		$cmds[] = 'Content-Length: ' . strlen($data);
		$cmds[] = 'Connection: close';
		
		$errNo = null;
		$errString = null;
		$timeout = 10;
		
		$fp = @fsockopen($host, $port, $errNo, $errString, $timeout);
		
		if ($fp === false || $errNo != 0)
		{
			if ($errNo != 0)
				return array('data' => null, 'headers' => null, 'errors' => "Problem with socket : $errNo $errString");
			else
				return array('data' => null, 'headers' => null, 'errors' => "Problem with socket-connect ($host)");
		}
		
		stream_set_timeout($fp, $timeout);
		$strCmd = implode("\r\n", $cmds) . "\r\n\r\n";
		fwrite($fp, $strCmd);
		fwrite($fp, $data);
		
		$responseHeader = '';
		$responseContent = '';
		do {
			$responseHeader.= fread($fp, 1);
		} while (!preg_match('/\\r\\n\\r\\n$/', $responseHeader));
		
		if (!strstr($responseHeader, "Transfer-Encoding: chunked"))
			while (!feof($fp))
			$responseContent.= fgets($fp, 128);
		else
		{
			while ($chunk_length = hexdec(fgets($fp)))
			{
				$responseContentChunk = '';
				$read_length = 0;
				while ($read_length < $chunk_length)
				{
					$responseContentChunk .= fread($fp, $chunk_length - $read_length);
					$read_length = strlen($responseContentChunk);
				}
				$responseContent.= $responseContentChunk;
				fgets($fp);
			}
		}
		
		fclose($fp);
		
		return array('data' => $responseContent, 'headers' => explode("\r\n", $responseHeader), 'errors' => null);
	}
}

?>