<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A generic histogram entry type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HistogramEntryType.html
 *
 */
class HistogramEntryType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var int
	 */
	protected $Count;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return int
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HistogramEntryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Count' =>
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
