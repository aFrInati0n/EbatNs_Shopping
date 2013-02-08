<?php
// autogenerated file 10.09.2012 13:08
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * This call will give you the ability to retrieve high levelCategory information, 
 * relevant for a buy-side application. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoryInfoRequestType.html
 *
 */
class GetCategoryInfoRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $IncludeSelector;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoryInfoRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeSelector' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
