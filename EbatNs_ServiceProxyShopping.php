<?php
// $Id: ClientProxy.tpl.php,v 1.4 2008-06-06 05:39:14 michael Exp $
// $Log: ClientProxy.tpl.php,v $
// Revision 1.4  2008-06-06 05:39:14  michael
// *** empty log message ***
//
// Revision 1.3  2008/06/05 08:58:31  michael
// switched to getAck()
//
// Revision 1.2  2008/06/05 08:21:06  michael
// Initial PHP5
//

/**
 * Load files we depend on.
 */

require_once 'EbatNs_Client.php';
require_once 'EbatNs_Session.php';

/**
 * The WSDL version the SDK is built against.
 */
define('EBAY_WSDL_VERSION', '771');

/**
 * This class is the basic interface to the eBay-Webserice for the user.
 * We generated the "proxy" externally as the SOAP-wsdl proxy generator does
 * not really did what we needed.
 */
class EbatNs_ServiceProxyShopping extends EbatNs_Client
{
    /**
     * Setup the ServiceProxy 
     *
     * @param mixed $sessionOrConfig Could be either a path to a config-file or a EbatNs_Session-object
     * @param string $converter Name of the converter class used, defaults to 'EbatNs_DataConverterIso' for convertion from uft8 to iso-8859-1
     */
    function __construct($sessionOrConfig, $converter = 'EbatNs_DataConverterIso')
    {
        if ($sessionOrConfig instanceof EbatNs_Session)
        {
			// Initialize the SOAP Client.
			parent::__construct($sessionOrConfig, $converter);
		}
		else
		{
			// assume that $session is the path to the config-file
			//
		    if (is_string($sessionOrConfig))
			{
				$session = new EbatNs_Session($sessionOrConfig);
				parent::__construct($session, $converter);
			}
		}
    }

    /**
     * Checks if the response has errors (from the eBay API side)
     *
     * @param AbstractResponseType $response	A response returned by any of the eBay API calls
     * @param Boolean $ignoreWarnings	true (default) will ignore warnings, so we detect ONLY real failures ...
     * @return Boolean
     */
	function isGood($response, $ignoreWarnings = true)
	{
		if ($ignoreWarnings)
			return ($response->getAck() == 'Success' || $response->getAck() == 'Warning');		
		else
			return ($response->getAck() == 'Success');
	}

	/**
	 * Checks if the response had failures
	 *
	 * @param AbstractResponseType $response	A response returned by any of the eBay API calls
	 * @return Boolean
	 */
	function isFailure($response)
	{
		return ($response->getAck() == 'Failure');
	}
	
	/**
	 * @return FindHalfProductsResponseType
	 * @param FindHalfProductsRequestType $request 
	 */
	function FindHalfProducts($request)
	{
			return $this->callShoppingApiStyle('FindHalfProducts', $request);
	}
	/**
	 * @return FindPopularItemsResponseType
	 * @param FindPopularItemsRequestType $request 
	 */
	function FindPopularItems($request)
	{
			return $this->callShoppingApiStyle('FindPopularItems', $request);
	}
	/**
	 * @return FindPopularSearchesResponseType
	 * @param FindPopularSearchesRequestType $request 
	 */
	function FindPopularSearches($request)
	{
			return $this->callShoppingApiStyle('FindPopularSearches', $request);
	}
	/**
	 * @return FindProductsResponseType
	 * @param FindProductsRequestType $request 
	 */
	function FindProducts($request)
	{
			return $this->callShoppingApiStyle('FindProducts', $request);
	}
	/**
	 * @return FindReviewsAndGuidesResponseType
	 * @param FindReviewsAndGuidesRequestType $request 
	 */
	function FindReviewsAndGuides($request)
	{
			return $this->callShoppingApiStyle('FindReviewsAndGuides', $request);
	}
	/**
	 * @return GetCategoryInfoResponseType
	 * @param GetCategoryInfoRequestType $request 
	 */
	function GetCategoryInfo($request)
	{
			return $this->callShoppingApiStyle('GetCategoryInfo', $request);
	}
	/**
	 * @return GetItemStatusResponseType
	 * @param GetItemStatusRequestType $request 
	 */
	function GetItemStatus($request)
	{
			return $this->callShoppingApiStyle('GetItemStatus', $request);
	}
	/**
	 * @return GetMultipleItemsResponseType
	 * @param GetMultipleItemsRequestType $request 
	 */
	function GetMultipleItems($request)
	{
			return $this->callShoppingApiStyle('GetMultipleItems', $request);
	}
	/**
	 * @return GetShippingCostsResponseType
	 * @param GetShippingCostsRequestType $request 
	 */
	function GetShippingCosts($request)
	{
			return $this->callShoppingApiStyle('GetShippingCosts', $request);
	}
	/**
	 * @return GetSingleItemResponseType
	 * @param GetSingleItemRequestType $request 
	 */
	function GetSingleItem($request)
	{
			return $this->callShoppingApiStyle('GetSingleItem', $request);
	}
	/**
	 * @return GetUserProfileResponseType
	 * @param GetUserProfileRequestType $request 
	 */
	function GetUserProfile($request)
	{
			return $this->callShoppingApiStyle('GetUserProfile', $request);
	}
	/**
	 * @return GeteBayTimeResponseType
	 * @param GeteBayTimeRequestType $request 
	 */
	function GeteBayTime($request)
	{
			return $this->callShoppingApiStyle('GeteBayTime', $request);
	}

}
?>