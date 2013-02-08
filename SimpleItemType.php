<?php
// autogenerated file 29.12.2011 13:38
// $Id: $
// $Log: $
//
//
require_once 'DiscountPriceInfoType.php';
require_once 'QuantityAvailableHintCodeType.php';
require_once 'VariationsType.php';
require_once 'ListingStatusCodeType.php';
require_once 'BusinessSellerDetailsType.php';
require_once 'ProductIDType.php';
require_once 'ShippingCostSummaryType.php';
require_once 'CountryCodeType.php';
require_once 'SiteCodeType.php';
require_once 'DistanceType.php';
require_once 'SimpleUserType.php';
require_once 'NameValueListArrayType.php';
require_once 'ReturnPolicyType.php';
require_once 'CharityType.php';
require_once 'StorefrontType.php';
require_once 'HalfItemConditionCodeType.php';
require_once 'AmountType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'ListingTypeCodeType.php';

/**
 * Contains information for an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SimpleItemType.html
 *
 */
class SimpleItemType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $BestOfferEnabled;
	/**
	 * @var AmountType
	 */
	protected $BuyItNowPrice;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var string
	 */
	protected $ItemID;
	/**
	 * @var boolean
	 */
	protected $BuyItNowAvailable;
	/**
	 * @var AmountType
	 */
	protected $ConvertedBuyItNowPrice;
	/**
	 * @var dateTime
	 */
	protected $EndTime;
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var anyURI
	 */
	protected $ViewItemURLForNaturalSearch;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var string
	 */
	protected $Location;
	/**
	 * @var BuyerPaymentMethodCodeType
	 */
	protected $PaymentMethods;
	/**
	 * @var anyURI
	 */
	protected $GalleryURL;
	/**
	 * @var anyURI
	 */
	protected $PictureURL;
	/**
	 * @var string
	 */
	protected $PostalCode;
	/**
	 * @var string
	 */
	protected $PrimaryCategoryID;
	/**
	 * @var string
	 */
	protected $PrimaryCategoryName;
	/**
	 * @var int
	 */
	protected $Quantity;
	/**
	 * @var SimpleUserType
	 */
	protected $Seller;
	/**
	 * @var int
	 */
	protected $BidCount;
	/**
	 * @var AmountType
	 */
	protected $ConvertedCurrentPrice;
	/**
	 * @var AmountType
	 */
	protected $CurrentPrice;
	/**
	 * @var SimpleUserType
	 */
	protected $HighBidder;
	/**
	 * @var ListingStatusCodeType
	 */
	protected $ListingStatus;
	/**
	 * @var int
	 */
	protected $QuantitySold;
	/**
	 * @var boolean
	 */
	protected $ReserveMet;
	/**
	 * @var string
	 */
	protected $ShipToLocations;
	/**
	 * @var SiteCodeType
	 */
	protected $Site;
	/**
	 * @var duration
	 */
	protected $TimeLeft;
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var ShippingCostSummaryType
	 */
	protected $ShippingCostSummary;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;
	/**
	 * @var long
	 */
	protected $HitCount;
	/**
	 * @var string
	 */
	protected $Subtitle;
	/**
	 * @var string
	 */
	protected $PrimaryCategoryIDPath;
	/**
	 * @var string
	 */
	protected $SecondaryCategoryID;
	/**
	 * @var string
	 */
	protected $SecondaryCategoryName;
	/**
	 * @var string
	 */
	protected $SecondaryCategoryIDPath;
	/**
	 * @var CharityType
	 */
	protected $Charity;
	/**
	 * @var boolean
	 */
	protected $GermanMotorsSearchable;
	/**
	 * @var boolean
	 */
	protected $GetItFast;
	/**
	 * @var boolean
	 */
	protected $Gift;
	/**
	 * @var boolean
	 */
	protected $PictureExists;
	/**
	 * @var boolean
	 */
	protected $RecentListing;
	/**
	 * @var StorefrontType
	 */
	protected $Storefront;
	/**
	 * @var DistanceType
	 */
	protected $DistanceFromBuyer;
	/**
	 * @var CountryCodeType
	 */
	protected $Country;
	/**
	 * @var int
	 */
	protected $WatchCount;
	/**
	 * @var HalfItemConditionCodeType
	 */
	protected $HalfItemCondition;
	/**
	 * @var string
	 */
	protected $SellerComments;
	/**
	 * @var ReturnPolicyType
	 */
	protected $ReturnPolicy;
	/**
	 * @var AmountType
	 */
	protected $MinimumToBid;
	/**
	 * @var ProductIDType
	 */
	protected $ProductID;
	/**
	 * @var boolean
	 */
	protected $AutoPay;
	/**
	 * @var BusinessSellerDetailsType
	 */
	protected $BusinessSellerDetails;
	/**
	 * @var SiteCodeType
	 */
	protected $PaymentAllowedSite;
	/**
	 * @var boolean
	 */
	protected $IntegratedMerchantCreditCardEnabled;
	/**
	 * @var VariationsType
	 */
	protected $Variations;
	/**
	 * @var int
	 */
	protected $HandlingTime;
	/**
	 * @var int
	 */
	protected $LotSize;
	/**
	 * @var int
	 */
	protected $ConditionID;
	/**
	 * @var string
	 */
	protected $ConditionDisplayName;
	/**
	 * @var QuantityAvailableHintCodeType
	 */
	protected $QuantityAvailableHint;
	/**
	 * @var int
	 */
	protected $QuantityThreshold;
	/**
	 * @var DiscountPriceInfoType
	 */
	protected $DiscountPriceInfo;
	/**
	 * @var string
	 */
	protected $ExcludeShipToLocation;

	/**
	 * @return boolean
	 */
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBuyItNowPrice($value)
	{
		$this->BuyItNowPrice = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
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
	 * @return boolean
	 */
	function getBuyItNowAvailable()
	{
		return $this->BuyItNowAvailable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBuyItNowAvailable($value)
	{
		$this->BuyItNowAvailable = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedBuyItNowPrice($value)
	{
		$this->ConvertedBuyItNowPrice = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
	/**
	 * @return anyURI
	 */
	function getViewItemURLForNaturalSearch()
	{
		return $this->ViewItemURLForNaturalSearch;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setViewItemURLForNaturalSearch($value)
	{
		$this->ViewItemURLForNaturalSearch = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return string
	 */
	function getLocation()
	{
		return $this->Location;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLocation($value)
	{
		$this->Location = $value;
	}
	/**
	 * @return BuyerPaymentMethodCodeType
	 * @param integer $index 
	 */
	function getPaymentMethods($index = null)
	{
		if ($index !== null) {
			return $this->PaymentMethods[$index];
		} else {
			return $this->PaymentMethods;
		}
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 * @param  $index 
	 */
	function setPaymentMethods($value, $index = null)
	{
		if ($index !== null) {
			$this->PaymentMethods[$index] = $value;
		} else {
			$this->PaymentMethods = $value;
		}
	}
	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value 
	 */
	function addPaymentMethods($value)
	{
		$this->PaymentMethods[] = $value;
	}
	/**
	 * @return anyURI
	 */
	function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setGalleryURL($value)
	{
		$this->GalleryURL = $value;
	}
	/**
	 * @return anyURI
	 * @param integer $index 
	 */
	function getPictureURL($index = null)
	{
		if ($index !== null) {
			return $this->PictureURL[$index];
		} else {
			return $this->PictureURL;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 * @param  $index 
	 */
	function setPictureURL($value, $index = null)
	{
		if ($index !== null) {
			$this->PictureURL[$index] = $value;
		} else {
			$this->PictureURL = $value;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function addPictureURL($value)
	{
		$this->PictureURL[] = $value;
	}
	/**
	 * @return string
	 */
	function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}
	/**
	 * @return string
	 */
	function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrimaryCategoryID($value)
	{
		$this->PrimaryCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getPrimaryCategoryName()
	{
		return $this->PrimaryCategoryName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrimaryCategoryName($value)
	{
		$this->PrimaryCategoryName = $value;
	}
	/**
	 * @return int
	 */
	function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}
	/**
	 * @return SimpleUserType
	 */
	function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * @return void
	 * @param SimpleUserType $value 
	 */
	function setSeller($value)
	{
		$this->Seller = $value;
	}
	/**
	 * @return int
	 */
	function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidCount($value)
	{
		$this->BidCount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedCurrentPrice($value)
	{
		$this->ConvertedCurrentPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setCurrentPrice($value)
	{
		$this->CurrentPrice = $value;
	}
	/**
	 * @return SimpleUserType
	 */
	function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * @return void
	 * @param SimpleUserType $value 
	 */
	function setHighBidder($value)
	{
		$this->HighBidder = $value;
	}
	/**
	 * @return ListingStatusCodeType
	 */
	function getListingStatus()
	{
		return $this->ListingStatus;
	}
	/**
	 * @return void
	 * @param ListingStatusCodeType $value 
	 */
	function setListingStatus($value)
	{
		$this->ListingStatus = $value;
	}
	/**
	 * @return int
	 */
	function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantitySold($value)
	{
		$this->QuantitySold = $value;
	}
	/**
	 * @return boolean
	 */
	function getReserveMet()
	{
		return $this->ReserveMet;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setReserveMet($value)
	{
		$this->ReserveMet = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getShipToLocations($index = null)
	{
		if ($index !== null) {
			return $this->ShipToLocations[$index];
		} else {
			return $this->ShipToLocations;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setShipToLocations($value, $index = null)
	{
		if ($index !== null) {
			$this->ShipToLocations[$index] = $value;
		} else {
			$this->ShipToLocations = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addShipToLocations($value)
	{
		$this->ShipToLocations[] = $value;
	}
	/**
	 * @return SiteCodeType
	 */
	function getSite()
	{
		return $this->Site;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setSite($value)
	{
		$this->Site = $value;
	}
	/**
	 * @return duration
	 */
	function getTimeLeft()
	{
		return $this->TimeLeft;
	}
	/**
	 * @return void
	 * @param duration $value 
	 */
	function setTimeLeft($value)
	{
		$this->TimeLeft = $value;
	}
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
	 * @return long
	 */
	function getHitCount()
	{
		return $this->HitCount;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setHitCount($value)
	{
		$this->HitCount = $value;
	}
	/**
	 * @return string
	 */
	function getSubtitle()
	{
		return $this->Subtitle;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSubtitle($value)
	{
		$this->Subtitle = $value;
	}
	/**
	 * @return string
	 */
	function getPrimaryCategoryIDPath()
	{
		return $this->PrimaryCategoryIDPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrimaryCategoryIDPath($value)
	{
		$this->PrimaryCategoryIDPath = $value;
	}
	/**
	 * @return string
	 */
	function getSecondaryCategoryID()
	{
		return $this->SecondaryCategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecondaryCategoryID($value)
	{
		$this->SecondaryCategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getSecondaryCategoryName()
	{
		return $this->SecondaryCategoryName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecondaryCategoryName($value)
	{
		$this->SecondaryCategoryName = $value;
	}
	/**
	 * @return string
	 */
	function getSecondaryCategoryIDPath()
	{
		return $this->SecondaryCategoryIDPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecondaryCategoryIDPath($value)
	{
		$this->SecondaryCategoryIDPath = $value;
	}
	/**
	 * @return CharityType
	 */
	function getCharity()
	{
		return $this->Charity;
	}
	/**
	 * @return void
	 * @param CharityType $value 
	 */
	function setCharity($value)
	{
		$this->Charity = $value;
	}
	/**
	 * @return boolean
	 */
	function getGermanMotorsSearchable()
	{
		return $this->GermanMotorsSearchable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGermanMotorsSearchable($value)
	{
		$this->GermanMotorsSearchable = $value;
	}
	/**
	 * @return boolean
	 */
	function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGetItFast($value)
	{
		$this->GetItFast = $value;
	}
	/**
	 * @return boolean
	 */
	function getGift()
	{
		return $this->Gift;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGift($value)
	{
		$this->Gift = $value;
	}
	/**
	 * @return boolean
	 */
	function getPictureExists()
	{
		return $this->PictureExists;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPictureExists($value)
	{
		$this->PictureExists = $value;
	}
	/**
	 * @return boolean
	 */
	function getRecentListing()
	{
		return $this->RecentListing;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRecentListing($value)
	{
		$this->RecentListing = $value;
	}
	/**
	 * @return StorefrontType
	 */
	function getStorefront()
	{
		return $this->Storefront;
	}
	/**
	 * @return void
	 * @param StorefrontType $value 
	 */
	function setStorefront($value)
	{
		$this->Storefront = $value;
	}
	/**
	 * @return DistanceType
	 */
	function getDistanceFromBuyer()
	{
		return $this->DistanceFromBuyer;
	}
	/**
	 * @return void
	 * @param DistanceType $value 
	 */
	function setDistanceFromBuyer($value)
	{
		$this->DistanceFromBuyer = $value;
	}
	/**
	 * @return CountryCodeType
	 */
	function getCountry()
	{
		return $this->Country;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setCountry($value)
	{
		$this->Country = $value;
	}
	/**
	 * @return int
	 */
	function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchCount($value)
	{
		$this->WatchCount = $value;
	}
	/**
	 * @return HalfItemConditionCodeType
	 */
	function getHalfItemCondition()
	{
		return $this->HalfItemCondition;
	}
	/**
	 * @return void
	 * @param HalfItemConditionCodeType $value 
	 */
	function setHalfItemCondition($value)
	{
		$this->HalfItemCondition = $value;
	}
	/**
	 * @return string
	 */
	function getSellerComments()
	{
		return $this->SellerComments;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerComments($value)
	{
		$this->SellerComments = $value;
	}
	/**
	 * @return ReturnPolicyType
	 */
	function getReturnPolicy()
	{
		return $this->ReturnPolicy;
	}
	/**
	 * @return void
	 * @param ReturnPolicyType $value 
	 */
	function setReturnPolicy($value)
	{
		$this->ReturnPolicy = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMinimumToBid()
	{
		return $this->MinimumToBid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMinimumToBid($value)
	{
		$this->MinimumToBid = $value;
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
	 * @return boolean
	 */
	function getAutoPay()
	{
		return $this->AutoPay;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAutoPay($value)
	{
		$this->AutoPay = $value;
	}
	/**
	 * @return BusinessSellerDetailsType
	 */
	function getBusinessSellerDetails()
	{
		return $this->BusinessSellerDetails;
	}
	/**
	 * @return void
	 * @param BusinessSellerDetailsType $value 
	 */
	function setBusinessSellerDetails($value)
	{
		$this->BusinessSellerDetails = $value;
	}
	/**
	 * @return SiteCodeType
	 * @param integer $index 
	 */
	function getPaymentAllowedSite($index = null)
	{
		if ($index !== null) {
			return $this->PaymentAllowedSite[$index];
		} else {
			return $this->PaymentAllowedSite;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 * @param  $index 
	 */
	function setPaymentAllowedSite($value, $index = null)
	{
		if ($index !== null) {
			$this->PaymentAllowedSite[$index] = $value;
		} else {
			$this->PaymentAllowedSite = $value;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function addPaymentAllowedSite($value)
	{
		$this->PaymentAllowedSite[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
	}
	/**
	 * @return VariationsType
	 */
	function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * @return void
	 * @param VariationsType $value 
	 */
	function setVariations($value)
	{
		$this->Variations = $value;
	}
	/**
	 * @return int
	 */
	function getHandlingTime()
	{
		return $this->HandlingTime;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setHandlingTime($value)
	{
		$this->HandlingTime = $value;
	}
	/**
	 * @return int
	 */
	function getLotSize()
	{
		return $this->LotSize;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLotSize($value)
	{
		$this->LotSize = $value;
	}
	/**
	 * @return int
	 */
	function getConditionID()
	{
		return $this->ConditionID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setConditionID($value)
	{
		$this->ConditionID = $value;
	}
	/**
	 * @return string
	 */
	function getConditionDisplayName()
	{
		return $this->ConditionDisplayName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setConditionDisplayName($value)
	{
		$this->ConditionDisplayName = $value;
	}
	/**
	 * @return QuantityAvailableHintCodeType
	 */
	function getQuantityAvailableHint()
	{
		return $this->QuantityAvailableHint;
	}
	/**
	 * @return void
	 * @param QuantityAvailableHintCodeType $value 
	 */
	function setQuantityAvailableHint($value)
	{
		$this->QuantityAvailableHint = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityThreshold()
	{
		return $this->QuantityThreshold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityThreshold($value)
	{
		$this->QuantityThreshold = $value;
	}
	/**
	 * @return DiscountPriceInfoType
	 */
	function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}
	/**
	 * @return void
	 * @param DiscountPriceInfoType $value 
	 */
	function setDiscountPriceInfo($value)
	{
		$this->DiscountPriceInfo = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeShipToLocation[$index];
		} else {
			return $this->ExcludeShipToLocation;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeShipToLocation[$index] = $value;
		} else {
			$this->ExcludeShipToLocation = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SimpleItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BestOfferEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyItNowPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
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
					'BuyItNowAvailable' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedBuyItNowPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ViewItemURLForNaturalSearch' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingType' =>
					array(
						'required' => false,
						'type' => 'ListingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Location' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentMethods' =>
					array(
						'required' => false,
						'type' => 'BuyerPaymentMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'GalleryURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrimaryCategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrimaryCategoryName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Quantity' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Seller' =>
					array(
						'required' => false,
						'type' => 'SimpleUserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedCurrentPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CurrentPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HighBidder' =>
					array(
						'required' => false,
						'type' => 'SimpleUserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingStatus' =>
					array(
						'required' => false,
						'type' => 'ListingStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantitySold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReserveMet' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipToLocations' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Site' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TimeLeft' =>
					array(
						'required' => false,
						'type' => 'duration',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
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
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HitCount' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Subtitle' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrimaryCategoryIDPath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondaryCategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondaryCategoryName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondaryCategoryIDPath' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Charity' =>
					array(
						'required' => false,
						'type' => 'CharityType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GermanMotorsSearchable' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GetItFast' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Gift' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureExists' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RecentListing' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Storefront' =>
					array(
						'required' => false,
						'type' => 'StorefrontType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DistanceFromBuyer' =>
					array(
						'required' => false,
						'type' => 'DistanceType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Country' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WatchCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HalfItemCondition' =>
					array(
						'required' => false,
						'type' => 'HalfItemConditionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerComments' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnPolicy' =>
					array(
						'required' => false,
						'type' => 'ReturnPolicyType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumToBid' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'ProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AutoPay' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BusinessSellerDetails' =>
					array(
						'required' => false,
						'type' => 'BusinessSellerDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentAllowedSite' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'IntegratedMerchantCreditCardEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Variations' =>
					array(
						'required' => false,
						'type' => 'VariationsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HandlingTime' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LotSize' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConditionID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConditionDisplayName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityAvailableHint' =>
					array(
						'required' => false,
						'type' => 'QuantityAvailableHintCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityThreshold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DiscountPriceInfo' =>
					array(
						'required' => false,
						'type' => 'DiscountPriceInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludeShipToLocation' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
