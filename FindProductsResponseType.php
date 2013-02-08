<?php
// autogenerated file 24.02.2011 11:43
// $Id: $
// $Log: $
//
//
require_once 'DomainHistogramType.php';
require_once 'SimpleItemArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'CatalogProductType.php';

/**
 * Returns stock product information in eBay catalogs, such asinformation about a 
 * particular DVD or camera. Optionally,also returns items that match the product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindProductsResponseType.html
 *
 */
class FindProductsResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $ApproximatePages;
	/**
	 * @var boolean
	 */
	protected $MoreResults;
	/**
	 * @var DomainHistogramType
	 */
	protected $DomainHistogram;
	/**
	 * @var SimpleItemArrayType
	 */
	protected $ItemArray;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var CatalogProductType
	 */
	protected $Product;
	/**
	 * @var int
	 */
	protected $TotalProducts;
	/**
	 * @var boolean
	 */
	protected $DuplicateItems;

	/**
	 * @return int
	 */
	function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setApproximatePages($value)
	{
		$this->ApproximatePages = $value;
	}
	/**
	 * @return boolean
	 */
	function getMoreResults()
	{
		return $this->MoreResults;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMoreResults($value)
	{
		$this->MoreResults = $value;
	}
	/**
	 * @return DomainHistogramType
	 */
	function getDomainHistogram()
	{
		return $this->DomainHistogram;
	}
	/**
	 * @return void
	 * @param DomainHistogramType $value 
	 */
	function setDomainHistogram($value)
	{
		$this->DomainHistogram = $value;
	}
	/**
	 * @return SimpleItemArrayType
	 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * @return void
	 * @param SimpleItemArrayType $value 
	 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return CatalogProductType
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
	 * @param CatalogProductType $value 
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
	 * @param CatalogProductType $value 
	 */
	function addProduct($value)
	{
		$this->Product[] = $value;
	}
	/**
	 * @return int
	 */
	function getTotalProducts()
	{
		return $this->TotalProducts;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalProducts($value)
	{
		$this->TotalProducts = $value;
	}
	/**
	 * @return boolean
	 */
	function getDuplicateItems()
	{
		return $this->DuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDuplicateItems($value)
	{
		$this->DuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindProductsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ApproximatePages' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MoreResults' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DomainHistogram' =>
					array(
						'required' => false,
						'type' => 'DomainHistogramType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemArray' =>
					array(
						'required' => false,
						'type' => 'SimpleItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Product' =>
					array(
						'required' => false,
						'type' => 'CatalogProductType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TotalProducts' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DuplicateItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
