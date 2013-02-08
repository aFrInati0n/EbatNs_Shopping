<?php
// autogenerated file 09.05.2012 13:38
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Gets the official eBay system time in GMT. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GeteBayTimeRequestType.html
 *
 */
class GeteBayTimeRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GeteBayTimeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
