<?php
// autogenerated file 24.02.2011 11:42
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';
require_once 'ShippingCostSummaryType.php';
require_once 'AmountType.php';
require_once 'SimpleItemArrayType.php';
require_once 'ProductIDType.php';

/**
 * Information about an Half.com catalog product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HalfCatalogProductType.html
 *
 */
class HalfCatalogProductType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var anyURI
	 */
	protected $DetailsURL;
	/**
	 * @var anyURI
	 */
	protected $StockPhotoURL;
	/**
	 * @var ShippingCostSummaryType
	 */
	protected $ShippingCostSummary;
	/**
	 * @var boolean
	 */
	protected $DisplayStockPhotos;
	/**
	 * @var int
	 */
	protected $ItemCount;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $DomainName;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;
	/**
	 * @var SimpleItemArrayType
	 */
	protected $ItemArray;
	/**
	 * @var int
	 */
	protected $ReviewCount;
	/**
	 * @var AmountType
	 */
	protected $MinPrice;

	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
	}
	/**
	 * @return ShippingCostSummaryType
	 */
	function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * @return void
	 * @param ShippingCostSummaryType $value 
	 */
	function setShippingCostSummary($value)
	{
		$this->ShippingCostSummary = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayStockPhotos($value)
	{
		$this->DisplayStockPhotos = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return ProductIDType
	 * @param integer $index 
	 */
	function getProductID($index = null)
	{
		if ($index !== null) {
			return $this->ProductID[$index];
		} else {
			return $this->ProductID;
		}
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 * @param  $index 
	 */
	function setProductID($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductID[$index] = $value;
		} else {
			$this->ProductID = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 */
	function addProductID($value)
	{
		$this->ProductID[] = $value;
	}
	/**
	 * @return string
	 */
	function getDomainName()
	{
		return $this->DomainName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDomainName($value)
	{
		$this->DomainName = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
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
	function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReviewCount($value)
	{
		$this->ReviewCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMinPrice()
	{
		return $this->MinPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HalfCatalogProductType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StockPhotoURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCostSummary' =>
					array(
						'required' => false,
						'type' => 'ShippingCostSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayStockPhotos' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DomainName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
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
					'ReviewCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
