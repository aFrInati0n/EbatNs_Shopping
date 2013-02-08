<?php
// autogenerated file 24.02.2011 11:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SimpleItemArrayType.php';

/**
 * Container for items. Can contain zero, one, or multipleSimpleItemType objects, 
 * each of which has data for an item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchResultType.html
 *
 */
class SearchResultType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CategoryGroupNamePath;
	/**
	 * @var string
	 */
	protected $CategoryGroupIDPath;
	/**
	 * @var int
	 */
	protected $CategoryGroupItemCount;
	/**
	 * @var SimpleItemArrayType
	 */
	protected $ItemArray;

	/**
	 * @return string
	 */
	function getCategoryGroupNamePath()
	{
		return $this->CategoryGroupNamePath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryGroupNamePath($value)
	{
		$this->CategoryGroupNamePath = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryGroupIDPath()
	{
		return $this->CategoryGroupIDPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryGroupIDPath($value)
	{
		$this->CategoryGroupIDPath = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryGroupItemCount()
	{
		return $this->CategoryGroupItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryGroupItemCount($value)
	{
		$this->CategoryGroupItemCount = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchResultType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryGroupNamePath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryGroupIDPath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryGroupItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					)
				));
	}
}
?>
