<?php
// autogenerated file 29.12.2011 13:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Controls the order of product (not item) searches. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductSortCodeType.html
 *
 * @property string Popularity
 * @property string Rating
 * @property string ReviewCount
 * @property string ItemCount
 * @property string Title
 * @property string CustomCode
 */
class ProductSortCodeType extends EbatNs_FacetType
{
	const CodeType_Popularity = 'Popularity';
	const CodeType_Rating = 'Rating';
	const CodeType_ReviewCount = 'ReviewCount';
	const CodeType_ItemCount = 'ItemCount';
	const CodeType_Title = 'Title';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProductSortCodeType = new ProductSortCodeType();

?>
