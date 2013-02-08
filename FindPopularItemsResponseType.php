<?php
// autogenerated file 10.09.2012 13:09
// $Id: $
// $Log: $
//
//
require_once 'SimpleItemArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Popular items, detail level is default for simple item type. addition with 
 * WatchCount. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindPopularItemsResponseType.html
 *
 */
class FindPopularItemsResponseType extends AbstractResponseType
{
	/**
	 * @var SimpleItemArrayType
	 */
	protected $ItemArray;

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
		parent::__construct('FindPopularItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
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
