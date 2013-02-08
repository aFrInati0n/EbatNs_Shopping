<?php
// autogenerated file 10.09.2012 13:09
// $Id: $
// $Log: $
//
//
require_once 'ProductSortCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ProductIDType.php';

/**
 * Searches Half.com for stock product information (stock descriptionand Item 
 * Specifics), such as information about a particularkind of DVD or book. Also, 
 * retrieves up to 30 Half.com listings associatedwith a product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindHalfProductsRequestType.html
 *
 */
class FindHalfProductsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $IncludeSelector;
	/**
	 * @var boolean
	 */
	protected $AvailableItemsOnly;
	/**
	 * @var string
	 */
	protected $DomainName;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var string
	 */
	protected $SellerID;
	/**
	 * @var ProductSortCodeType
	 */
	protected $ProductSort;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;
	/**
	 * @var int
	 */
	protected $MaxEntries;
	/**
	 * @var int
	 */
	protected $PageNumber;

	/**
	 * @return string
	 */
	function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setIncludeSelector($value)
	{
		$this->IncludeSelector = $value;
	}
	/**
	 * @return boolean
	 */
	function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAvailableItemsOnly($value)
	{
		$this->AvailableItemsOnly = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getDomainName($index = null)
	{
		if ($index !== null) {
			return $this->DomainName[$index];
		} else {
			return $this->DomainName;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setDomainName($value, $index = null)
	{
		if ($index !== null) {
			$this->DomainName[$index] = $value;
		} else {
			$this->DomainName = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addDomainName($value)
	{
		$this->DomainName[] = $value;
	}
	/**
	 * @return ProductIDType
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param ProductIDType $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return string
	 */
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}
	/**
	 * @return string
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return ProductSortCodeType
	 */
	function getProductSort()
	{
		return $this->ProductSort;
	}
	/**
	 * @return void
	 * @param ProductSortCodeType $value 
	 */
	function setProductSort($value)
	{
		$this->ProductSort = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}
	/**
	 * @return int
	 */
	function getMaxEntries()
	{
		return $this->MaxEntries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxEntries($value)
	{
		$this->MaxEntries = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindHalfProductsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'IncludeSelector' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AvailableItemsOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DomainName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductSort' =>
					array(
						'required' => false,
						'type' => 'ProductSortCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortOrder' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxEntries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					)
				));
	}
}
?>
