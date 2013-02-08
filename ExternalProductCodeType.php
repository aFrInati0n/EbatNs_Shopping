<?php
// autogenerated file 10.09.2012 13:08
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the type of external product ID being used to identify astock product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExternalProductCodeType.html
 *
 * @property string ISBN
 * @property string UPC
 * @property string ProductID
 * @property string EAN
 * @property string Keywords
 * @property string MPN
 * @property string CustomCode
 */
class ExternalProductCodeType extends EbatNs_FacetType
{
	const CodeType_ISBN = 'ISBN';
	const CodeType_UPC = 'UPC';
	const CodeType_ProductID = 'ProductID';
	const CodeType_EAN = 'EAN';
	const CodeType_Keywords = 'Keywords';
	const CodeType_MPN = 'MPN';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExternalProductCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExternalProductCodeType = new ExternalProductCodeType();

?>
