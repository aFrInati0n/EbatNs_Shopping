<?php
// autogenerated file 29.12.2011 13:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Type of seller account. This value can be returned if the German site (site 
 * ID77) or eBay Motors site (site ID 100) is specified. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerBusinessCodeType.html
 *
 * @property string Undefined
 * @property string Private
 * @property string Commercial
 * @property string CustomCode
 */
class SellerBusinessCodeType extends EbatNs_FacetType
{
	const CodeType_Undefined = 'Undefined';
	const CodeType_Private = 'Private';
	const CodeType_Commercial = 'Commercial';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerBusinessCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerBusinessCodeType = new SellerBusinessCodeType();

?>
