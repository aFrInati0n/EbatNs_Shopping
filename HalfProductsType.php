<?php
// autogenerated file 29.12.2011 13:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'HalfCatalogProductType.php';

/**
 * Information about an eBay catalog product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HalfProductsType.html
 *
 */
class HalfProductsType extends EbatNs_ComplexType
{
	/**
	 * @var HalfCatalogProductType
	 */
	protected $Product;

	/**
	 * @return HalfCatalogProductType
	 * @param integer $index 
	 */
	function getProduct($index = null)
	{
		if ($index !== null) {
			return $this->Product[$index];
		} else {
			return $this->Product;
		}
	}
	/**
	 * @return void
	 * @param HalfCatalogProductType $value 
	 * @param  $index 
	 */
	function setProduct($value, $index = null)
	{
		if ($index !== null) {
			$this->Product[$index] = $value;
		} else {
			$this->Product = $value;
		}
	}
	/**
	 * @return void
	 * @param HalfCatalogProductType $value 
	 */
	function addProduct($value)
	{
		$this->Product[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HalfProductsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Product' =>
					array(
						'required' => false,
						'type' => 'HalfCatalogProductType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
