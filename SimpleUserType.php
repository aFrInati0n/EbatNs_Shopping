<?php
// autogenerated file 10.09.2012 13:13
// $Id: $
// $Log: $
//
//
require_once 'FeedbackRatingStarCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'UserStatusCodeType.php';
require_once 'SellerLevelCodeType.php';
require_once 'SiteCodeType.php';

/**
 * Type to contain the data for one eBay user. Depending on the context, the 
 * usermight be the seller or the buyer in a transaction, or the bidder or winning 
 * bidderin a listing. An object of this type is returned by a number of calls, 
 * includingthe GetUser call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SimpleUserType.html
 *
 */
class SimpleUserType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var boolean
	 */
	protected $FeedbackPrivate;
	/**
	 * @var FeedbackRatingStarCodeType
	 */
	protected $FeedbackRatingStar;
	/**
	 * @var int
	 */
	protected $FeedbackScore;
	/**
	 * @var boolean
	 */
	protected $UserAnonymized;
	/**
	 * @var boolean
	 */
	protected $NewUser;
	/**
	 * @var dateTime
	 */
	protected $RegistrationDate;
	/**
	 * @var SiteCodeType
	 */
	protected $RegistrationSite;
	/**
	 * @var UserStatusCodeType
	 */
	protected $Status;
	/**
	 * @var SellerBusinessCodeType
	 */
	protected $SellerBusinessType;
	/**
	 * @var anyURI
	 */
	protected $StoreURL;
	/**
	 * @var string
	 */
	protected $StoreName;
	/**
	 * @var anyURI
	 */
	protected $SellerItemsURL;
	/**
	 * @var anyURI
	 */
	protected $AboutMeURL;
	/**
	 * @var anyURI
	 */
	protected $MyWorldURL;
	/**
	 * @var anyURI
	 */
	protected $MyWorldSmallImage;
	/**
	 * @var anyURI
	 */
	protected $MyWorldLargeImage;
	/**
	 * @var anyURI
	 */
	protected $ReviewsAndGuidesURL;
	/**
	 * @var anyURI
	 */
	protected $FeedbackDetailsURL;
	/**
	 * @var float
	 */
	protected $PositiveFeedbackPercent;
	/**
	 * @var SellerLevelCodeType
	 */
	protected $SellerLevel;
	/**
	 * @var boolean
	 */
	protected $TopRatedSeller;

	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return boolean
	 */
	function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFeedbackPrivate($value)
	{
		$this->FeedbackPrivate = $value;
	}
	/**
	 * @return FeedbackRatingStarCodeType
	 */
	function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}
	/**
	 * @return void
	 * @param FeedbackRatingStarCodeType $value 
	 */
	function setFeedbackRatingStar($value)
	{
		$this->FeedbackRatingStar = $value;
	}
	/**
	 * @return int
	 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
	/**
	 * @return boolean
	 */
	function getUserAnonymized()
	{
		return $this->UserAnonymized;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setUserAnonymized($value)
	{
		$this->UserAnonymized = $value;
	}
	/**
	 * @return boolean
	 */
	function getNewUser()
	{
		return $this->NewUser;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setNewUser($value)
	{
		$this->NewUser = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}
	/**
	 * @return SiteCodeType
	 */
	function getRegistrationSite()
	{
		return $this->RegistrationSite;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setRegistrationSite($value)
	{
		$this->RegistrationSite = $value;
	}
	/**
	 * @return UserStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param UserStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return SellerBusinessCodeType
	 */
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * @return void
	 * @param SellerBusinessCodeType $value 
	 */
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStoreURL($value)
	{
		$this->StoreURL = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return anyURI
	 */
	function getSellerItemsURL()
	{
		return $this->SellerItemsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setSellerItemsURL($value)
	{
		$this->SellerItemsURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getAboutMeURL()
	{
		return $this->AboutMeURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setAboutMeURL($value)
	{
		$this->AboutMeURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getMyWorldURL()
	{
		return $this->MyWorldURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setMyWorldURL($value)
	{
		$this->MyWorldURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getMyWorldSmallImage()
	{
		return $this->MyWorldSmallImage;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setMyWorldSmallImage($value)
	{
		$this->MyWorldSmallImage = $value;
	}
	/**
	 * @return anyURI
	 */
	function getMyWorldLargeImage()
	{
		return $this->MyWorldLargeImage;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setMyWorldLargeImage($value)
	{
		$this->MyWorldLargeImage = $value;
	}
	/**
	 * @return anyURI
	 */
	function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setReviewsAndGuidesURL($value)
	{
		$this->ReviewsAndGuidesURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getFeedbackDetailsURL()
	{
		return $this->FeedbackDetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setFeedbackDetailsURL($value)
	{
		$this->FeedbackDetailsURL = $value;
	}
	/**
	 * @return float
	 */
	function getPositiveFeedbackPercent()
	{
		return $this->PositiveFeedbackPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setPositiveFeedbackPercent($value)
	{
		$this->PositiveFeedbackPercent = $value;
	}
	/**
	 * @return SellerLevelCodeType
	 */
	function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * @return void
	 * @param SellerLevelCodeType $value 
	 */
	function setSellerLevel($value)
	{
		$this->SellerLevel = $value;
	}
	/**
	 * @return boolean
	 */
	function getTopRatedSeller()
	{
		return $this->TopRatedSeller;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setTopRatedSeller($value)
	{
		$this->TopRatedSeller = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SimpleUserType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UserID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackPrivate' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackRatingStar' =>
					array(
						'required' => false,
						'type' => 'FeedbackRatingStarCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserAnonymized' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NewUser' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RegistrationDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RegistrationSite' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'UserStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerBusinessType' =>
					array(
						'required' => false,
						'type' => 'SellerBusinessCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerItemsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AboutMeURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MyWorldURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MyWorldSmallImage' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MyWorldLargeImage' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewsAndGuidesURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackDetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PositiveFeedbackPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerLevel' =>
					array(
						'required' => false,
						'type' => 'SellerLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TopRatedSeller' =>
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
