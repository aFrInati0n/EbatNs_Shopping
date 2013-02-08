<?php
// autogenerated file 22.07.2011 10:25
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the words most frequently used by eBay users when searching for 
 * listings.These keywords are generated weekly by eBay. Thus, calls retrieve 
 * static data.FindPopularSearches is not available for the following sites: FR, 
 * HK, MY, PH, PL, SG, SE. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FindPopularSearchesRequestType.html
 *
 */
class FindPopularSearchesRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var int
	 */
	protected $MaxKeywords;
	/**
	 * @var int
	 */
	protected $MaxResultsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var boolean
	 */
	protected $IncludeChildCategories;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getQueryKeywords($index = null)
	{
		if ($index !== null) {
			return $this->QueryKeywords[$index];
		} else {
			return $this->QueryKeywords;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setQueryKeywords($value, $index = null)
	{
		if ($index !== null) {
			$this->QueryKeywords[$index] = $value;
		} else {
			$this->QueryKeywords = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addQueryKeywords($value)
	{
		$this->QueryKeywords[] = $value;
	}
	/**
	 * @return int
	 */
	function getMaxKeywords()
	{
		return $this->MaxKeywords;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxKeywords($value)
	{
		$this->MaxKeywords = $value;
	}
	/**
	 * @return int
	 */
	function getMaxResultsPerPage()
	{
		return $this->MaxResultsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxResultsPerPage($value)
	{
		$this->MaxResultsPerPage = $value;
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
	 * @return boolean
	 */
	function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeChildCategories($value)
	{
		$this->IncludeChildCategories = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FindPopularSearchesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'MaxKeywords' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxResultsPerPage' =>
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
					),
					'IncludeChildCategories' =>
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
