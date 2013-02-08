<?php
// autogenerated file 29.12.2011 13:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'TradingRoleCodeType.php';
require_once 'AmountType.php';
require_once 'CommentTypeCodeType.php';

/**
 * Detailed feedback information for a user. Conveys the score for thefeedback, the 
 * textual comment, and other information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackDetailType.html
 *
 */
class FeedbackDetailType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CommentingUser;
	/**
	 * @var int
	 */
	protected $CommentingUserScore;
	/**
	 * @var string
	 */
	protected $CommentText;
	/**
	 * @var dateTime
	 */
	protected $CommentTime;
	/**
	 * @var CommentTypeCodeType
	 */
	protected $CommentType;
	/**
	 * @var string
	 */
	protected $FeedbackResponse;
	/**
	 * @var string
	 */
	protected $FollowUp;
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var TradingRoleCodeType
	 */
	protected $Role;
	/**
	 * @var string
	 */
	protected $ItemTitle;
	/**
	 * @var AmountType
	 */
	protected $ItemPrice;
	/**
	 * @var string
	 */
	protected $FeedbackID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var boolean
	 */
	protected $CommentReplaced;
	/**
	 * @var boolean
	 */
	protected $ResponseReplaced;
	/**
	 * @var boolean
	 */
	protected $FollowUpReplaced;
	/**
	 * @var boolean
	 */
	protected $Countable;

	/**
	 * @return string
	 */
	function getCommentingUser()
	{
		return $this->CommentingUser;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCommentingUser($value)
	{
		$this->CommentingUser = $value;
	}
	/**
	 * @return int
	 */
	function getCommentingUserScore()
	{
		return $this->CommentingUserScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCommentingUserScore($value)
	{
		$this->CommentingUserScore = $value;
	}
	/**
	 * @return string
	 */
	function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}
	/**
	 * @return dateTime
	 */
	function getCommentTime()
	{
		return $this->CommentTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setCommentTime($value)
	{
		$this->CommentTime = $value;
	}
	/**
	 * @return CommentTypeCodeType
	 */
	function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * @return void
	 * @param CommentTypeCodeType $value 
	 */
	function setCommentType($value)
	{
		$this->CommentType = $value;
	}
	/**
	 * @return string
	 */
	function getFeedbackResponse()
	{
		return $this->FeedbackResponse;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackResponse($value)
	{
		$this->FeedbackResponse = $value;
	}
	/**
	 * @return string
	 */
	function getFollowUp()
	{
		return $this->FollowUp;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFollowUp($value)
	{
		$this->FollowUp = $value;
	}
	/**
	 * @return string
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return TradingRoleCodeType
	 */
	function getRole()
	{
		return $this->Role;
	}
	/**
	 * @return void
	 * @param TradingRoleCodeType $value 
	 */
	function setRole($value)
	{
		$this->Role = $value;
	}
	/**
	 * @return string
	 */
	function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
	}
	/**
	 * @return AmountType
	 */
	function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setItemPrice($value)
	{
		$this->ItemPrice = $value;
	}
	/**
	 * @return string
	 */
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return boolean
	 */
	function getCommentReplaced()
	{
		return $this->CommentReplaced;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCommentReplaced($value)
	{
		$this->CommentReplaced = $value;
	}
	/**
	 * @return boolean
	 */
	function getResponseReplaced()
	{
		return $this->ResponseReplaced;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setResponseReplaced($value)
	{
		$this->ResponseReplaced = $value;
	}
	/**
	 * @return boolean
	 */
	function getFollowUpReplaced()
	{
		return $this->FollowUpReplaced;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFollowUpReplaced($value)
	{
		$this->FollowUpReplaced = $value;
	}
	/**
	 * @return boolean
	 */
	function getCountable()
	{
		return $this->Countable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCountable($value)
	{
		$this->Countable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CommentingUser' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentingUserScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentType' =>
					array(
						'required' => false,
						'type' => 'CommentTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackResponse' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FollowUp' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Role' =>
					array(
						'required' => false,
						'type' => 'TradingRoleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemTitle' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentReplaced' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ResponseReplaced' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FollowUpReplaced' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Countable' =>
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
