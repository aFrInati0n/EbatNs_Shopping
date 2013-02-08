<?php
// autogenerated file 24.02.2011 11:42
// $Id: $
// $Log: $
//
//
require_once 'FeedbackHistoryType.php';
require_once 'SimpleUserType.php';
require_once 'AbstractResponseType.php';
require_once 'FeedbackDetailType.php';

/**
 * Response to GetUserProfile request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserProfileResponseType.html
 *
 */
class GetUserProfileResponseType extends AbstractResponseType
{
	/**
	 * @var SimpleUserType
	 */
	protected $User;
	/**
	 * @var FeedbackHistoryType
	 */
	protected $FeedbackHistory;
	/**
	 * @var FeedbackDetailType
	 */
	protected $FeedbackDetails;

	/**
	 * @return SimpleUserType
	 */
	function getUser()
	{
		return $this->User;
	}
	/**
	 * @return void
	 * @param SimpleUserType $value 
	 */
	function setUser($value)
	{
		$this->User = $value;
	}
	/**
	 * @return FeedbackHistoryType
	 */
	function getFeedbackHistory()
	{
		return $this->FeedbackHistory;
	}
	/**
	 * @return void
	 * @param FeedbackHistoryType $value 
	 */
	function setFeedbackHistory($value)
	{
		$this->FeedbackHistory = $value;
	}
	/**
	 * @return FeedbackDetailType
	 * @param integer $index 
	 */
	function getFeedbackDetails($index = null)
	{
		if ($index !== null) {
			return $this->FeedbackDetails[$index];
		} else {
			return $this->FeedbackDetails;
		}
	}
	/**
	 * @return void
	 * @param FeedbackDetailType $value 
	 * @param  $index 
	 */
	function setFeedbackDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->FeedbackDetails[$index] = $value;
		} else {
			$this->FeedbackDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackDetailType $value 
	 */
	function addFeedbackDetails($value)
	{
		$this->FeedbackDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserProfileResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'User' =>
					array(
						'required' => false,
						'type' => 'SimpleUserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackHistory' =>
					array(
						'required' => false,
						'type' => 'FeedbackHistoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackDetails' =>
					array(
						'required' => false,
						'type' => 'FeedbackDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
