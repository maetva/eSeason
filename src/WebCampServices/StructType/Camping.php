<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Camping StructType
 * @subpackage Structs
 */
class Camping extends AbstractStructBase
{
    /**
     * The idSite
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The address2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $address2 = null;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\ChannelInformation[]
     */
    protected ?array $channel = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z]{2}
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The numRNET
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $numRNET = null;
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $criteria = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\PaymentInformation[]
     */
    protected ?array $payment = null;
    /**
     * The customerListInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CustomerListInformation $customerListInformation = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The geographicalArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\GeographicalArea|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\GeographicalArea $geographicalArea = null;
    /**
     * The localization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $localization = null;
    /**
     * The mail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $mail = null;
    /**
     * The manner
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $manner = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The standing
     * Meta information extracted from the WSDL
     * - base: short
     * - maxInclusive: 5
     * - minInclusive: 0
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $standing = null;
    /**
     * The webSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $webSite = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The salesCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $salesCondition = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The picture
     * Meta information extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    protected ?array $picture = null;
    /**
     * The wichStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $wichStock = null;
    /**
     * The criterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Criterion[]
     */
    protected ?array $criterion = null;
    /**
     * The periods
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods[]
     */
    protected ?array $periods = null;
    /**
     * The openAllYear
     * @var bool|null
     */
    protected ?bool $openAllYear = null;
    /**
     * The gpsCoordinates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\GPSCoordinates $gpsCoordinates = null;
    /**
     * The rebookingSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\RebookingSetting[]
     */
    protected ?array $rebookingSettings = null;
    /**
     * Constructor method for Camping
     * @uses Camping::setIdSite()
     * @uses Camping::setAddress()
     * @uses Camping::setAddress2()
     * @uses Camping::setChannel()
     * @uses Camping::setCity()
     * @uses Camping::setCountry()
     * @uses Camping::setNumRNET()
     * @uses Camping::setCriteria()
     * @uses Camping::setPayment()
     * @uses Camping::setCustomerListInformation()
     * @uses Camping::setFax()
     * @uses Camping::setGeographicalArea()
     * @uses Camping::setLocalization()
     * @uses Camping::setMail()
     * @uses Camping::setManner()
     * @uses Camping::setName()
     * @uses Camping::setPhone()
     * @uses Camping::setStanding()
     * @uses Camping::setWebSite()
     * @uses Camping::setZipCode()
     * @uses Camping::setSalesCondition()
     * @uses Camping::setDescription()
     * @uses Camping::setPicture()
     * @uses Camping::setWichStock()
     * @uses Camping::setCriterion()
     * @uses Camping::setPeriods()
     * @uses Camping::setOpenAllYear()
     * @uses Camping::setGpsCoordinates()
     * @uses Camping::setRebookingSettings()
     * @param int $idSite
     * @param string $address
     * @param string $address2
     * @param \Maetva\ESeason\WebCampServices\StructType\ChannelInformation[] $channel
     * @param string $city
     * @param string $country
     * @param string $numRNET
     * @param string[] $criteria
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentInformation[] $payment
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation $customerListInformation
     * @param string $fax
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea $geographicalArea
     * @param string[] $localization
     * @param string $mail
     * @param string[] $manner
     * @param string $name
     * @param string $phone
     * @param int $standing
     * @param string $webSite
     * @param string $zipCode
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $salesCondition
     * @param string $description
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $picture
     * @param string $wichStock
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion[] $criterion
     * @param \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods[] $periods
     * @param bool $openAllYear
     * @param \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates $gpsCoordinates
     * @param \Maetva\ESeason\WebCampServices\StructType\RebookingSetting[] $rebookingSettings
     */
    public function __construct(?int $idSite = null, ?string $address = null, ?string $address2 = null, ?array $channel = null, ?string $city = null, ?string $country = null, ?string $numRNET = null, ?array $criteria = null, ?array $payment = null, ?\Maetva\ESeason\WebCampServices\StructType\CustomerListInformation $customerListInformation = null, ?string $fax = null, ?\Maetva\ESeason\WebCampServices\StructType\GeographicalArea $geographicalArea = null, ?array $localization = null, ?string $mail = null, ?array $manner = null, ?string $name = null, ?string $phone = null, ?int $standing = null, ?string $webSite = null, ?string $zipCode = null, ?\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $salesCondition = null, ?string $description = null, ?array $picture = null, ?string $wichStock = null, ?array $criterion = null, ?array $periods = null, ?bool $openAllYear = null, ?\Maetva\ESeason\WebCampServices\StructType\GPSCoordinates $gpsCoordinates = null, ?array $rebookingSettings = null)
    {
        $this
            ->setIdSite($idSite)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setChannel($channel)
            ->setCity($city)
            ->setCountry($country)
            ->setNumRNET($numRNET)
            ->setCriteria($criteria)
            ->setPayment($payment)
            ->setCustomerListInformation($customerListInformation)
            ->setFax($fax)
            ->setGeographicalArea($geographicalArea)
            ->setLocalization($localization)
            ->setMail($mail)
            ->setManner($manner)
            ->setName($name)
            ->setPhone($phone)
            ->setStanding($standing)
            ->setWebSite($webSite)
            ->setZipCode($zipCode)
            ->setSalesCondition($salesCondition)
            ->setDescription($description)
            ->setPicture($picture)
            ->setWichStock($wichStock)
            ->setCriterion($criterion)
            ->setPeriods($periods)
            ->setOpenAllYear($openAllYear)
            ->setGpsCoordinates($gpsCoordinates)
            ->setRebookingSettings($rebookingSettings);
    }
    /**
     * Get idSite value
     * @return int|null
     */
    public function getIdSite(): ?int
    {
        return $this->idSite;
    }
    /**
     * Set idSite value
     * @param int $idSite
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setIdSite(?int $idSite = null): self
    {
        // validation for constraint: int
        if (!is_null($idSite) && !(is_int($idSite) || ctype_digit($idSite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSite, true), gettype($idSite)), __LINE__);
        }
        $this->idSite = $idSite;
        
        return $this;
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        
        return $this;
    }
    /**
     * Get address2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return isset($this->address2) ? $this->address2 : null;
    }
    /**
     * Set address2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address2
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setAddress2(?string $address2 = null): self
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        if (is_null($address2) || (is_array($address2) && empty($address2))) {
            unset($this->address2);
        } else {
            $this->address2 = $address2;
        }
        
        return $this;
    }
    /**
     * Get channel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\ChannelInformation[]
     */
    public function getChannel(): ?array
    {
        return isset($this->channel) ? $this->channel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setChannel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChannelForArrayConstraintsFromSetChannel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingChannelItem) {
            // validation for constraint: itemType
            if (!$campingChannelItem instanceof \Maetva\ESeason\WebCampServices\StructType\ChannelInformation) {
                $invalidValues[] = is_object($campingChannelItem) ? get_class($campingChannelItem) : sprintf('%s(%s)', gettype($campingChannelItem), var_export($campingChannelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The channel property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\ChannelInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set channel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\ChannelInformation[] $channel
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setChannel(?array $channel = null): self
    {
        // validation for constraint: array
        if ('' !== ($channelArrayErrorMessage = self::validateChannelForArrayConstraintsFromSetChannel($channel))) {
            throw new InvalidArgumentException($channelArrayErrorMessage, __LINE__);
        }
        if (is_null($channel) || (is_array($channel) && empty($channel))) {
            unset($this->channel);
        } else {
            $this->channel = $channel;
        }
        
        return $this;
    }
    /**
     * Add item to channel value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\ChannelInformation $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToChannel(\Maetva\ESeason\WebCampServices\StructType\ChannelInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\ChannelInformation) {
            throw new InvalidArgumentException(sprintf('The channel property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\ChannelInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->channel[] = $item;
        
        return $this;
    }
    /**
     * Get city value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity(): ?string
    {
        return isset($this->city) ? $this->city : null;
    }
    /**
     * Set city value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
        
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return isset($this->country) ? $this->country : null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z]{2})
        if (!is_null($country) && !preg_match('/[a-zA-Z]{2}/', $country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z]{2}/', var_export($country, true)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        
        return $this;
    }
    /**
     * Get numRNET value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumRNET(): ?string
    {
        return isset($this->numRNET) ? $this->numRNET : null;
    }
    /**
     * Set numRNET value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numRNET
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setNumRNET(?string $numRNET = null): self
    {
        // validation for constraint: string
        if (!is_null($numRNET) && !is_string($numRNET)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numRNET, true), gettype($numRNET)), __LINE__);
        }
        if (is_null($numRNET) || (is_array($numRNET) && empty($numRNET))) {
            unset($this->numRNET);
        } else {
            $this->numRNET = $numRNET;
        }
        
        return $this;
    }
    /**
     * Get criteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getCriteria(): ?array
    {
        return isset($this->criteria) ? $this->criteria : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriteriaForArrayConstraintsFromSetCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingCriteriaItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid($campingCriteriaItem)) {
                $invalidValues[] = is_object($campingCriteriaItem) ? get_class($campingCriteriaItem) : sprintf('%s(%s)', gettype($campingCriteriaItem), var_export($campingCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Criteria', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set criteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $criteria
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setCriteria(?array $criteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($criteriaArrayErrorMessage = self::validateCriteriaForArrayConstraintsFromSetCriteria($criteria))) {
            throw new InvalidArgumentException($criteriaArrayErrorMessage, __LINE__);
        }
        if (is_null($criteria) || (is_array($criteria) && empty($criteria))) {
            unset($this->criteria);
        } else {
            $this->criteria = $criteria;
        }
        
        return $this;
    }
    /**
     * Add item to criteria value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToCriteria(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Criteria', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues())), __LINE__);
        }
        $this->criteria[] = $item;
        
        return $this;
    }
    /**
     * Get payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation[]
     */
    public function getPayment(): ?array
    {
        return isset($this->payment) ? $this->payment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintsFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingPaymentItem) {
            // validation for constraint: itemType
            if (!$campingPaymentItem instanceof \Maetva\ESeason\WebCampServices\StructType\PaymentInformation) {
                $invalidValues[] = is_object($campingPaymentItem) ? get_class($campingPaymentItem) : sprintf('%s(%s)', gettype($campingPaymentItem), var_export($campingPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The payment property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\PaymentInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentInformation[] $payment
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintsFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->payment);
        } else {
            $this->payment = $payment;
        }
        
        return $this;
    }
    /**
     * Add item to payment value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentInformation $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToPayment(\Maetva\ESeason\WebCampServices\StructType\PaymentInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\PaymentInformation) {
            throw new InvalidArgumentException(sprintf('The payment property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\PaymentInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->payment[] = $item;
        
        return $this;
    }
    /**
     * Get customerListInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation|null
     */
    public function getCustomerListInformation(): ?\Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
    {
        return isset($this->customerListInformation) ? $this->customerListInformation : null;
    }
    /**
     * Set customerListInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation $customerListInformation
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setCustomerListInformation(?\Maetva\ESeason\WebCampServices\StructType\CustomerListInformation $customerListInformation = null): self
    {
        if (is_null($customerListInformation) || (is_array($customerListInformation) && empty($customerListInformation))) {
            unset($this->customerListInformation);
        } else {
            $this->customerListInformation = $customerListInformation;
        }
        
        return $this;
    }
    /**
     * Get fax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFax(): ?string
    {
        return isset($this->fax) ? $this->fax : null;
    }
    /**
     * Set fax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fax
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->fax);
        } else {
            $this->fax = $fax;
        }
        
        return $this;
    }
    /**
     * Get geographicalArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\GeographicalArea|null
     */
    public function getGeographicalArea(): ?\Maetva\ESeason\WebCampServices\StructType\GeographicalArea
    {
        return isset($this->geographicalArea) ? $this->geographicalArea : null;
    }
    /**
     * Set geographicalArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea $geographicalArea
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setGeographicalArea(?\Maetva\ESeason\WebCampServices\StructType\GeographicalArea $geographicalArea = null): self
    {
        if (is_null($geographicalArea) || (is_array($geographicalArea) && empty($geographicalArea))) {
            unset($this->geographicalArea);
        } else {
            $this->geographicalArea = $geographicalArea;
        }
        
        return $this;
    }
    /**
     * Get localization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getLocalization(): ?array
    {
        return isset($this->localization) ? $this->localization : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLocalization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocalization method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocalizationForArrayConstraintsFromSetLocalization(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingLocalizationItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid($campingLocalizationItem)) {
                $invalidValues[] = is_object($campingLocalizationItem) ? get_class($campingLocalizationItem) : sprintf('%s(%s)', gettype($campingLocalizationItem), var_export($campingLocalizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Localizations', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set localization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $localization
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setLocalization(?array $localization = null): self
    {
        // validation for constraint: array
        if ('' !== ($localizationArrayErrorMessage = self::validateLocalizationForArrayConstraintsFromSetLocalization($localization))) {
            throw new InvalidArgumentException($localizationArrayErrorMessage, __LINE__);
        }
        if (is_null($localization) || (is_array($localization) && empty($localization))) {
            unset($this->localization);
        } else {
            $this->localization = $localization;
        }
        
        return $this;
    }
    /**
     * Add item to localization value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToLocalization(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Localizations', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues())), __LINE__);
        }
        $this->localization[] = $item;
        
        return $this;
    }
    /**
     * Get mail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMail(): ?string
    {
        return isset($this->mail) ? $this->mail : null;
    }
    /**
     * Set mail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mail
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setMail(?string $mail = null): self
    {
        // validation for constraint: string
        if (!is_null($mail) && !is_string($mail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mail, true), gettype($mail)), __LINE__);
        }
        if (is_null($mail) || (is_array($mail) && empty($mail))) {
            unset($this->mail);
        } else {
            $this->mail = $mail;
        }
        
        return $this;
    }
    /**
     * Get manner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getManner(): ?array
    {
        return isset($this->manner) ? $this->manner : null;
    }
    /**
     * This method is responsible for validating the values passed to the setManner method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManner method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMannerForArrayConstraintsFromSetManner(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingMannerItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Manners::valueIsValid($campingMannerItem)) {
                $invalidValues[] = is_object($campingMannerItem) ? get_class($campingMannerItem) : sprintf('%s(%s)', gettype($campingMannerItem), var_export($campingMannerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Manners', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Manners::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set manner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Manners::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Manners::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $manner
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setManner(?array $manner = null): self
    {
        // validation for constraint: array
        if ('' !== ($mannerArrayErrorMessage = self::validateMannerForArrayConstraintsFromSetManner($manner))) {
            throw new InvalidArgumentException($mannerArrayErrorMessage, __LINE__);
        }
        if (is_null($manner) || (is_array($manner) && empty($manner))) {
            unset($this->manner);
        } else {
            $this->manner = $manner;
        }
        
        return $this;
    }
    /**
     * Add item to manner value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Manners::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Manners::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToManner(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Manners::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Manners', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Manners::getValidValues())), __LINE__);
        }
        $this->manner[] = $item;
        
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return isset($this->phone) ? $this->phone : null;
    }
    /**
     * Set phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->phone);
        } else {
            $this->phone = $phone;
        }
        
        return $this;
    }
    /**
     * Get standing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getStanding(): ?int
    {
        return isset($this->standing) ? $this->standing : null;
    }
    /**
     * Set standing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $standing
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setStanding(?int $standing = null): self
    {
        // validation for constraint: int
        if (!is_null($standing) && !(is_int($standing) || ctype_digit($standing))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($standing, true), gettype($standing)), __LINE__);
        }
        // validation for constraint: maxInclusive(5)
        if (!is_null($standing) && $standing > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 5', var_export($standing, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($standing) && $standing < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($standing, true)), __LINE__);
        }
        if (is_null($standing) || (is_array($standing) && empty($standing))) {
            unset($this->standing);
        } else {
            $this->standing = $standing;
        }
        
        return $this;
    }
    /**
     * Get webSite value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebSite(): ?string
    {
        return isset($this->webSite) ? $this->webSite : null;
    }
    /**
     * Set webSite value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webSite
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setWebSite(?string $webSite = null): self
    {
        // validation for constraint: string
        if (!is_null($webSite) && !is_string($webSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webSite, true), gettype($webSite)), __LINE__);
        }
        if (is_null($webSite) || (is_array($webSite) && empty($webSite))) {
            unset($this->webSite);
        } else {
            $this->webSite = $webSite;
        }
        
        return $this;
    }
    /**
     * Get zipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return isset($this->zipCode) ? $this->zipCode : null;
    }
    /**
     * Set zipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->zipCode);
        } else {
            $this->zipCode = $zipCode;
        }
        
        return $this;
    }
    /**
     * Get salesCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType|null
     */
    public function getSalesCondition(): ?\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
    {
        return isset($this->salesCondition) ? $this->salesCondition : null;
    }
    /**
     * Set salesCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $salesCondition
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setSalesCondition(?\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $salesCondition = null): self
    {
        if (is_null($salesCondition) || (is_array($salesCondition) && empty($salesCondition))) {
            unset($this->salesCondition);
        } else {
            $this->salesCondition = $salesCondition;
        }
        
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
    /**
     * Get picture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    public function getPicture(): ?array
    {
        return isset($this->picture) ? $this->picture : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureForArrayConstraintsFromSetPicture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingPictureItem) {
            // validation for constraint: itemType
            if (!$campingPictureItem instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
                $invalidValues[] = is_object($campingPictureItem) ? get_class($campingPictureItem) : sprintf('%s(%s)', gettype($campingPictureItem), var_export($campingPictureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picture property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set picture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $picture
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setPicture(?array $picture = null): self
    {
        // validation for constraint: array
        if ('' !== ($pictureArrayErrorMessage = self::validatePictureForArrayConstraintsFromSetPicture($picture))) {
            throw new InvalidArgumentException($pictureArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($picture) && count($picture) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 7', count($picture)), __LINE__);
        }
        if (is_null($picture) || (is_array($picture) && empty($picture))) {
            unset($this->picture);
        } else {
            $this->picture = $picture;
        }
        
        return $this;
    }
    /**
     * Add item to picture value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToPicture(\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
            throw new InvalidArgumentException(sprintf('The picture property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($this->picture) && count($this->picture) >= 7) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 7', count($this->picture)), __LINE__);
        }
        $this->picture[] = $item;
        
        return $this;
    }
    /**
     * Get wichStock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWichStock(): ?string
    {
        return isset($this->wichStock) ? $this->wichStock : null;
    }
    /**
     * Set wichStock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Stock::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Stock::getValidValues()
     * @throws InvalidArgumentException
     * @param string $wichStock
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setWichStock(?string $wichStock = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Stock::valueIsValid($wichStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Stock', is_array($wichStock) ? implode(', ', $wichStock) : var_export($wichStock, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Stock::getValidValues())), __LINE__);
        }
        if (is_null($wichStock) || (is_array($wichStock) && empty($wichStock))) {
            unset($this->wichStock);
        } else {
            $this->wichStock = $wichStock;
        }
        
        return $this;
    }
    /**
     * Get criterion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion[]
     */
    public function getCriterion(): ?array
    {
        return isset($this->criterion) ? $this->criterion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriterionForArrayConstraintsFromSetCriterion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingCriterionItem) {
            // validation for constraint: itemType
            if (!$campingCriterionItem instanceof \Maetva\ESeason\WebCampServices\StructType\Criterion) {
                $invalidValues[] = is_object($campingCriterionItem) ? get_class($campingCriterionItem) : sprintf('%s(%s)', gettype($campingCriterionItem), var_export($campingCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The criterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Criterion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set criterion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion[] $criterion
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setCriterion(?array $criterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($criterionArrayErrorMessage = self::validateCriterionForArrayConstraintsFromSetCriterion($criterion))) {
            throw new InvalidArgumentException($criterionArrayErrorMessage, __LINE__);
        }
        if (is_null($criterion) || (is_array($criterion) && empty($criterion))) {
            unset($this->criterion);
        } else {
            $this->criterion = $criterion;
        }
        
        return $this;
    }
    /**
     * Add item to criterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToCriterion(\Maetva\ESeason\WebCampServices\StructType\Criterion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Criterion) {
            throw new InvalidArgumentException(sprintf('The criterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Criterion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->criterion[] = $item;
        
        return $this;
    }
    /**
     * Get periods value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods[]
     */
    public function getPeriods(): ?array
    {
        return isset($this->periods) ? $this->periods : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriods method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriods method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodsForArrayConstraintsFromSetPeriods(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingPeriodsItem) {
            // validation for constraint: itemType
            if (!$campingPeriodsItem instanceof \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods) {
                $invalidValues[] = is_object($campingPeriodsItem) ? get_class($campingPeriodsItem) : sprintf('%s(%s)', gettype($campingPeriodsItem), var_export($campingPeriodsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The periods property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set periods value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods[] $periods
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setPeriods(?array $periods = null): self
    {
        // validation for constraint: array
        if ('' !== ($periodsArrayErrorMessage = self::validatePeriodsForArrayConstraintsFromSetPeriods($periods))) {
            throw new InvalidArgumentException($periodsArrayErrorMessage, __LINE__);
        }
        if (is_null($periods) || (is_array($periods) && empty($periods))) {
            unset($this->periods);
        } else {
            $this->periods = $periods;
        }
        
        return $this;
    }
    /**
     * Add item to periods value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToPeriods(\Maetva\ESeason\WebCampServices\StructType\OpeningPeriods $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods) {
            throw new InvalidArgumentException(sprintf('The periods property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->periods[] = $item;
        
        return $this;
    }
    /**
     * Get openAllYear value
     * @return bool|null
     */
    public function getOpenAllYear(): ?bool
    {
        return $this->openAllYear;
    }
    /**
     * Set openAllYear value
     * @param bool $openAllYear
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setOpenAllYear(?bool $openAllYear = null): self
    {
        // validation for constraint: boolean
        if (!is_null($openAllYear) && !is_bool($openAllYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($openAllYear, true), gettype($openAllYear)), __LINE__);
        }
        $this->openAllYear = $openAllYear;
        
        return $this;
    }
    /**
     * Get gpsCoordinates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates|null
     */
    public function getGpsCoordinates(): ?\Maetva\ESeason\WebCampServices\StructType\GPSCoordinates
    {
        return isset($this->gpsCoordinates) ? $this->gpsCoordinates : null;
    }
    /**
     * Set gpsCoordinates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates $gpsCoordinates
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setGpsCoordinates(?\Maetva\ESeason\WebCampServices\StructType\GPSCoordinates $gpsCoordinates = null): self
    {
        if (is_null($gpsCoordinates) || (is_array($gpsCoordinates) && empty($gpsCoordinates))) {
            unset($this->gpsCoordinates);
        } else {
            $this->gpsCoordinates = $gpsCoordinates;
        }
        
        return $this;
    }
    /**
     * Get rebookingSettings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\RebookingSetting[]
     */
    public function getRebookingSettings(): ?array
    {
        return isset($this->rebookingSettings) ? $this->rebookingSettings : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRebookingSettings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRebookingSettings method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRebookingSettingsForArrayConstraintsFromSetRebookingSettings(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $campingRebookingSettingsItem) {
            // validation for constraint: itemType
            if (!$campingRebookingSettingsItem instanceof \Maetva\ESeason\WebCampServices\StructType\RebookingSetting) {
                $invalidValues[] = is_object($campingRebookingSettingsItem) ? get_class($campingRebookingSettingsItem) : sprintf('%s(%s)', gettype($campingRebookingSettingsItem), var_export($campingRebookingSettingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rebookingSettings property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\RebookingSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rebookingSettings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\RebookingSetting[] $rebookingSettings
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function setRebookingSettings(?array $rebookingSettings = null): self
    {
        // validation for constraint: array
        if ('' !== ($rebookingSettingsArrayErrorMessage = self::validateRebookingSettingsForArrayConstraintsFromSetRebookingSettings($rebookingSettings))) {
            throw new InvalidArgumentException($rebookingSettingsArrayErrorMessage, __LINE__);
        }
        if (is_null($rebookingSettings) || (is_array($rebookingSettings) && empty($rebookingSettings))) {
            unset($this->rebookingSettings);
        } else {
            $this->rebookingSettings = $rebookingSettings;
        }
        
        return $this;
    }
    /**
     * Add item to rebookingSettings value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\RebookingSetting $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping
     */
    public function addToRebookingSettings(\Maetva\ESeason\WebCampServices\StructType\RebookingSetting $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\RebookingSetting) {
            throw new InvalidArgumentException(sprintf('The rebookingSettings property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\RebookingSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rebookingSettings[] = $item;
        
        return $this;
    }
}
