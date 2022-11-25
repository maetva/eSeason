<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgAvailability StructType
 * @subpackage Structs
 */
class RequestCpgAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The arrival
     * @var string|null
     */
    protected ?string $arrival = null;
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $criteria = null;
    /**
     * The deltaArrival
     * Meta information extracted from the WSDL
     * - base: short
     * - maxInclusive: 30
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $deltaArrival = null;
    /**
     * The deltaDuration
     * Meta information extracted from the WSDL
     * - base: short
     * - maxInclusive: 30
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $deltaDuration = null;
    /**
     * The duration
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The geographicalArea
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\GeographicalArea[]
     */
    protected ?array $geographicalArea = null;
    /**
     * The localization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $localization = null;
    /**
     * The maxPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $maxPrice = null;
    /**
     * The minPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $minPrice = null;
    /**
     * The naturist
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $naturist = null;
    /**
     * The person
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $person = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The searchPlace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SearchPlace[]
     */
    protected ?array $searchPlace = null;
    /**
     * The cpSite
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $cpSite = null;
    /**
     * The searchType
     * Meta information extracted from the WSDL
     * - base: short
     * - maxInclusive: 5
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $searchType = null;
    /**
     * The standing
     * Meta information extracted from the WSDL
     * - base: short
     * - maxInclusive: 5
     * - maxOccurs: unbounded
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $standing = null;
    /**
     * The returnMediaObj
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnMediaObj = null;
    /**
     * The returnProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnProduct = null;
    /**
     * The criterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $criterion = null;
    /**
     * The categoryType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $categoryType = null;
    /**
     * The surface
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $surface = null;
    /**
     * The room
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $room = null;
    /**
     * The bathroom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $bathroom = null;
    /**
     * The mediaDataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediaDataType = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * The externalCriterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[]
     */
    protected ?array $externalCriterion = null;
    /**
     * Constructor method for RequestCpgAvailability
     * @uses RequestCpgAvailability::setIdUser()
     * @uses RequestCpgAvailability::setPassword()
     * @uses RequestCpgAvailability::setLanguage()
     * @uses RequestCpgAvailability::setArrival()
     * @uses RequestCpgAvailability::setCriteria()
     * @uses RequestCpgAvailability::setDeltaArrival()
     * @uses RequestCpgAvailability::setDeltaDuration()
     * @uses RequestCpgAvailability::setDuration()
     * @uses RequestCpgAvailability::setGeographicalArea()
     * @uses RequestCpgAvailability::setLocalization()
     * @uses RequestCpgAvailability::setMaxPrice()
     * @uses RequestCpgAvailability::setMinPrice()
     * @uses RequestCpgAvailability::setNaturist()
     * @uses RequestCpgAvailability::setPerson()
     * @uses RequestCpgAvailability::setProductType()
     * @uses RequestCpgAvailability::setSearchPlace()
     * @uses RequestCpgAvailability::setCpSite()
     * @uses RequestCpgAvailability::setSearchType()
     * @uses RequestCpgAvailability::setStanding()
     * @uses RequestCpgAvailability::setReturnMediaObj()
     * @uses RequestCpgAvailability::setReturnProduct()
     * @uses RequestCpgAvailability::setCriterion()
     * @uses RequestCpgAvailability::setCategoryType()
     * @uses RequestCpgAvailability::setSurface()
     * @uses RequestCpgAvailability::setRoom()
     * @uses RequestCpgAvailability::setBathroom()
     * @uses RequestCpgAvailability::setMediaDataType()
     * @uses RequestCpgAvailability::setIdCustomer()
     * @uses RequestCpgAvailability::setExternalCriterion()
     * @param string $idUser
     * @param string $password
     * @param string $language
     * @param string $arrival
     * @param string[] $criteria
     * @param int $deltaArrival
     * @param int $deltaDuration
     * @param string $duration
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea[] $geographicalArea
     * @param string[] $localization
     * @param float $maxPrice
     * @param float $minPrice
     * @param bool $naturist
     * @param int $person
     * @param string $productType
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @param int[] $cpSite
     * @param int $searchType
     * @param int[] $standing
     * @param bool $returnMediaObj
     * @param bool $returnProduct
     * @param int[] $criterion
     * @param string[] $categoryType
     * @param int $surface
     * @param int $room
     * @param int $bathroom
     * @param string $mediaDataType
     * @param string $idCustomer
     * @param \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[] $externalCriterion
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $language = null, ?string $arrival = null, ?array $criteria = null, ?int $deltaArrival = null, ?int $deltaDuration = null, ?string $duration = null, ?array $geographicalArea = null, ?array $localization = null, ?float $maxPrice = null, ?float $minPrice = null, ?bool $naturist = null, ?int $person = null, ?string $productType = null, ?array $searchPlace = null, ?array $cpSite = null, ?int $searchType = null, ?array $standing = null, ?bool $returnMediaObj = null, ?bool $returnProduct = null, ?array $criterion = null, ?array $categoryType = null, ?int $surface = null, ?int $room = null, ?int $bathroom = null, ?string $mediaDataType = null, ?string $idCustomer = null, ?array $externalCriterion = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setLanguage($language)
            ->setArrival($arrival)
            ->setCriteria($criteria)
            ->setDeltaArrival($deltaArrival)
            ->setDeltaDuration($deltaDuration)
            ->setDuration($duration)
            ->setGeographicalArea($geographicalArea)
            ->setLocalization($localization)
            ->setMaxPrice($maxPrice)
            ->setMinPrice($minPrice)
            ->setNaturist($naturist)
            ->setPerson($person)
            ->setProductType($productType)
            ->setSearchPlace($searchPlace)
            ->setCpSite($cpSite)
            ->setSearchType($searchType)
            ->setStanding($standing)
            ->setReturnMediaObj($returnMediaObj)
            ->setReturnProduct($returnProduct)
            ->setCriterion($criterion)
            ->setCategoryType($categoryType)
            ->setSurface($surface)
            ->setRoom($room)
            ->setBathroom($bathroom)
            ->setMediaDataType($mediaDataType)
            ->setIdCustomer($idCustomer)
            ->setExternalCriterion($externalCriterion);
    }
    /**
     * Get idUser value
     * @return string|null
     */
    public function getIdUser(): ?string
    {
        return $this->idUser;
    }
    /**
     * Set idUser value
     * @param string $idUser
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setIdUser(?string $idUser = null): self
    {
        // validation for constraint: string
        if (!is_null($idUser) && !is_string($idUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idUser, true), gettype($idUser)), __LINE__);
        }
        $this->idUser = $idUser;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get arrival value
     * @return string|null
     */
    public function getArrival(): ?string
    {
        return $this->arrival;
    }
    /**
     * Set arrival value
     * @param string $arrival
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setArrival(?string $arrival = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival) && !is_string($arrival)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival, true), gettype($arrival)), __LINE__);
        }
        $this->arrival = $arrival;
        
        return $this;
    }
    /**
     * Get criteria value
     * @return string[]
     */
    public function getCriteria(): ?array
    {
        return $this->criteria;
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
        foreach ($values as $requestCpgAvailabilityCriteriaItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid($requestCpgAvailabilityCriteriaItem)) {
                $invalidValues[] = is_object($requestCpgAvailabilityCriteriaItem) ? get_class($requestCpgAvailabilityCriteriaItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityCriteriaItem), var_export($requestCpgAvailabilityCriteriaItem, true));
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $criteria
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setCriteria(?array $criteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($criteriaArrayErrorMessage = self::validateCriteriaForArrayConstraintsFromSetCriteria($criteria))) {
            throw new InvalidArgumentException($criteriaArrayErrorMessage, __LINE__);
        }
        $this->criteria = $criteria;
        
        return $this;
    }
    /**
     * Add item to criteria value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Criteria::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
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
     * Get deltaArrival value
     * @return int|null
     */
    public function getDeltaArrival(): ?int
    {
        return $this->deltaArrival;
    }
    /**
     * Set deltaArrival value
     * @param int $deltaArrival
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setDeltaArrival(?int $deltaArrival = null): self
    {
        // validation for constraint: int
        if (!is_null($deltaArrival) && !(is_int($deltaArrival) || ctype_digit($deltaArrival))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deltaArrival, true), gettype($deltaArrival)), __LINE__);
        }
        // validation for constraint: maxInclusive(30)
        if (!is_null($deltaArrival) && $deltaArrival > 30) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 30', var_export($deltaArrival, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($deltaArrival) && $deltaArrival < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($deltaArrival, true)), __LINE__);
        }
        $this->deltaArrival = $deltaArrival;
        
        return $this;
    }
    /**
     * Get deltaDuration value
     * @return int|null
     */
    public function getDeltaDuration(): ?int
    {
        return $this->deltaDuration;
    }
    /**
     * Set deltaDuration value
     * @param int $deltaDuration
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setDeltaDuration(?int $deltaDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($deltaDuration) && !(is_int($deltaDuration) || ctype_digit($deltaDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deltaDuration, true), gettype($deltaDuration)), __LINE__);
        }
        // validation for constraint: maxInclusive(30)
        if (!is_null($deltaDuration) && $deltaDuration > 30) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 30', var_export($deltaDuration, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($deltaDuration) && $deltaDuration < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($deltaDuration, true)), __LINE__);
        }
        $this->deltaDuration = $deltaDuration;
        
        return $this;
    }
    /**
     * Get duration value
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param string $duration
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setDuration(?string $duration = null): self
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get geographicalArea value
     * @return \Maetva\ESeason\WebCampServices\StructType\GeographicalArea[]
     */
    public function getGeographicalArea(): ?array
    {
        return $this->geographicalArea;
    }
    /**
     * This method is responsible for validating the values passed to the setGeographicalArea method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeographicalArea method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeographicalAreaForArrayConstraintsFromSetGeographicalArea(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilityGeographicalAreaItem) {
            // validation for constraint: itemType
            if (!$requestCpgAvailabilityGeographicalAreaItem instanceof \Maetva\ESeason\WebCampServices\StructType\GeographicalArea) {
                $invalidValues[] = is_object($requestCpgAvailabilityGeographicalAreaItem) ? get_class($requestCpgAvailabilityGeographicalAreaItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityGeographicalAreaItem), var_export($requestCpgAvailabilityGeographicalAreaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The geographicalArea property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\GeographicalArea, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set geographicalArea value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea[] $geographicalArea
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setGeographicalArea(?array $geographicalArea = null): self
    {
        // validation for constraint: array
        if ('' !== ($geographicalAreaArrayErrorMessage = self::validateGeographicalAreaForArrayConstraintsFromSetGeographicalArea($geographicalArea))) {
            throw new InvalidArgumentException($geographicalAreaArrayErrorMessage, __LINE__);
        }
        $this->geographicalArea = $geographicalArea;
        
        return $this;
    }
    /**
     * Add item to geographicalArea value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToGeographicalArea(\Maetva\ESeason\WebCampServices\StructType\GeographicalArea $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\GeographicalArea) {
            throw new InvalidArgumentException(sprintf('The geographicalArea property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\GeographicalArea, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->geographicalArea[] = $item;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string[]
     */
    public function getLocalization(): ?array
    {
        return $this->localization;
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
        foreach ($values as $requestCpgAvailabilityLocalizationItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid($requestCpgAvailabilityLocalizationItem)) {
                $invalidValues[] = is_object($requestCpgAvailabilityLocalizationItem) ? get_class($requestCpgAvailabilityLocalizationItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityLocalizationItem), var_export($requestCpgAvailabilityLocalizationItem, true));
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $localization
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setLocalization(?array $localization = null): self
    {
        // validation for constraint: array
        if ('' !== ($localizationArrayErrorMessage = self::validateLocalizationForArrayConstraintsFromSetLocalization($localization))) {
            throw new InvalidArgumentException($localizationArrayErrorMessage, __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
    /**
     * Add item to localization value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Localizations::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
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
     * Get maxPrice value
     * @return float|null
     */
    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }
    /**
     * Set maxPrice value
     * @param float $maxPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setMaxPrice(?float $maxPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($maxPrice) && !(is_float($maxPrice) || is_numeric($maxPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxPrice, true), gettype($maxPrice)), __LINE__);
        }
        $this->maxPrice = $maxPrice;
        
        return $this;
    }
    /**
     * Get minPrice value
     * @return float|null
     */
    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }
    /**
     * Set minPrice value
     * @param float $minPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setMinPrice(?float $minPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($minPrice) && !(is_float($minPrice) || is_numeric($minPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minPrice, true), gettype($minPrice)), __LINE__);
        }
        $this->minPrice = $minPrice;
        
        return $this;
    }
    /**
     * Get naturist value
     * @return bool|null
     */
    public function getNaturist(): ?bool
    {
        return $this->naturist;
    }
    /**
     * Set naturist value
     * @param bool $naturist
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setNaturist(?bool $naturist = null): self
    {
        // validation for constraint: boolean
        if (!is_null($naturist) && !is_bool($naturist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($naturist, true), gettype($naturist)), __LINE__);
        }
        $this->naturist = $naturist;
        
        return $this;
    }
    /**
     * Get person value
     * @return int|null
     */
    public function getPerson(): ?int
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param int $person
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setPerson(?int $person = null): self
    {
        // validation for constraint: int
        if (!is_null($person) && !(is_int($person) || ctype_digit($person))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($person, true), gettype($person)), __LINE__);
        }
        $this->person = $person;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\LodgingType', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues())), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get searchPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace[]
     */
    public function getSearchPlace(): ?array
    {
        return $this->searchPlace;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchPlace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchPlace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchPlaceForArrayConstraintsFromSetSearchPlace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilitySearchPlaceItem) {
            // validation for constraint: itemType
            if (!$requestCpgAvailabilitySearchPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
                $invalidValues[] = is_object($requestCpgAvailabilitySearchPlaceItem) ? get_class($requestCpgAvailabilitySearchPlaceItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilitySearchPlaceItem), var_export($requestCpgAvailabilitySearchPlaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchPlace property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SearchPlace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set searchPlace value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setSearchPlace(?array $searchPlace = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchPlaceArrayErrorMessage = self::validateSearchPlaceForArrayConstraintsFromSetSearchPlace($searchPlace))) {
            throw new InvalidArgumentException($searchPlaceArrayErrorMessage, __LINE__);
        }
        $this->searchPlace = $searchPlace;
        
        return $this;
    }
    /**
     * Add item to searchPlace value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToSearchPlace(\Maetva\ESeason\WebCampServices\StructType\SearchPlace $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
            throw new InvalidArgumentException(sprintf('The searchPlace property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SearchPlace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchPlace[] = $item;
        
        return $this;
    }
    /**
     * Get cpSite value
     * @return int[]
     */
    public function getCpSite(): ?array
    {
        return $this->cpSite;
    }
    /**
     * This method is responsible for validating the values passed to the setCpSite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCpSite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCpSiteForArrayConstraintsFromSetCpSite(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilityCpSiteItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgAvailabilityCpSiteItem) || ctype_digit($requestCpgAvailabilityCpSiteItem))) {
                $invalidValues[] = is_object($requestCpgAvailabilityCpSiteItem) ? get_class($requestCpgAvailabilityCpSiteItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityCpSiteItem), var_export($requestCpgAvailabilityCpSiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cpSite property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cpSite value
     * @throws InvalidArgumentException
     * @param int[] $cpSite
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setCpSite(?array $cpSite = null): self
    {
        // validation for constraint: array
        if ('' !== ($cpSiteArrayErrorMessage = self::validateCpSiteForArrayConstraintsFromSetCpSite($cpSite))) {
            throw new InvalidArgumentException($cpSiteArrayErrorMessage, __LINE__);
        }
        $this->cpSite = $cpSite;
        
        return $this;
    }
    /**
     * Add item to cpSite value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToCpSite(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The cpSite property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cpSite[] = $item;
        
        return $this;
    }
    /**
     * Get searchType value
     * @return int|null
     */
    public function getSearchType(): ?int
    {
        return $this->searchType;
    }
    /**
     * Set searchType value
     * @param int $searchType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setSearchType(?int $searchType = null): self
    {
        // validation for constraint: int
        if (!is_null($searchType) && !(is_int($searchType) || ctype_digit($searchType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchType, true), gettype($searchType)), __LINE__);
        }
        // validation for constraint: maxInclusive(5)
        if (!is_null($searchType) && $searchType > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 5', var_export($searchType, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($searchType) && $searchType < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($searchType, true)), __LINE__);
        }
        $this->searchType = $searchType;
        
        return $this;
    }
    /**
     * Get standing value
     * @return int[]
     */
    public function getStanding(): ?array
    {
        return $this->standing;
    }
    /**
     * This method is responsible for validating the values passed to the setStanding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStanding method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStandingForArrayConstraintsFromSetStanding(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilityStandingItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgAvailabilityStandingItem) || ctype_digit($requestCpgAvailabilityStandingItem))) {
                $invalidValues[] = is_object($requestCpgAvailabilityStandingItem) ? get_class($requestCpgAvailabilityStandingItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityStandingItem), var_export($requestCpgAvailabilityStandingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The standing property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set standing value
     * @throws InvalidArgumentException
     * @param int[] $standing
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setStanding(?array $standing = null): self
    {
        // validation for constraint: array
        if ('' !== ($standingArrayErrorMessage = self::validateStandingForArrayConstraintsFromSetStanding($standing))) {
            throw new InvalidArgumentException($standingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxInclusive(5)
        if (!is_null($standing) && $standing > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 5', var_export($standing, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($standing) && $standing < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($standing, true)), __LINE__);
        }
        $this->standing = $standing;
        
        return $this;
    }
    /**
     * Add item to standing value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToStanding(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The standing property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxInclusive(5)
        if ($item > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 5', var_export($item, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($item < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($item, true)), __LINE__);
        }
        $this->standing[] = $item;
        
        return $this;
    }
    /**
     * Get returnMediaObj value
     * @return bool|null
     */
    public function getReturnMediaObj(): ?bool
    {
        return $this->returnMediaObj;
    }
    /**
     * Set returnMediaObj value
     * @param bool $returnMediaObj
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setReturnMediaObj(?bool $returnMediaObj = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnMediaObj) && !is_bool($returnMediaObj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnMediaObj, true), gettype($returnMediaObj)), __LINE__);
        }
        $this->returnMediaObj = $returnMediaObj;
        
        return $this;
    }
    /**
     * Get returnProduct value
     * @return bool|null
     */
    public function getReturnProduct(): ?bool
    {
        return $this->returnProduct;
    }
    /**
     * Set returnProduct value
     * @param bool $returnProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setReturnProduct(?bool $returnProduct = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnProduct) && !is_bool($returnProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnProduct, true), gettype($returnProduct)), __LINE__);
        }
        $this->returnProduct = $returnProduct;
        
        return $this;
    }
    /**
     * Get criterion value
     * @return int[]
     */
    public function getCriterion(): ?array
    {
        return $this->criterion;
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
        foreach ($values as $requestCpgAvailabilityCriterionItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgAvailabilityCriterionItem) || ctype_digit($requestCpgAvailabilityCriterionItem))) {
                $invalidValues[] = is_object($requestCpgAvailabilityCriterionItem) ? get_class($requestCpgAvailabilityCriterionItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityCriterionItem), var_export($requestCpgAvailabilityCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The criterion property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set criterion value
     * @throws InvalidArgumentException
     * @param int[] $criterion
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setCriterion(?array $criterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($criterionArrayErrorMessage = self::validateCriterionForArrayConstraintsFromSetCriterion($criterion))) {
            throw new InvalidArgumentException($criterionArrayErrorMessage, __LINE__);
        }
        $this->criterion = $criterion;
        
        return $this;
    }
    /**
     * Add item to criterion value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToCriterion(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The criterion property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->criterion[] = $item;
        
        return $this;
    }
    /**
     * Get categoryType value
     * @return string[]
     */
    public function getCategoryType(): ?array
    {
        return $this->categoryType;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryTypeForArrayConstraintsFromSetCategoryType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilityCategoryTypeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgAvailabilityCategoryTypeItem)) {
                $invalidValues[] = is_object($requestCpgAvailabilityCategoryTypeItem) ? get_class($requestCpgAvailabilityCategoryTypeItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityCategoryTypeItem), var_export($requestCpgAvailabilityCategoryTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The categoryType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set categoryType value
     * @throws InvalidArgumentException
     * @param string[] $categoryType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setCategoryType(?array $categoryType = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryTypeArrayErrorMessage = self::validateCategoryTypeForArrayConstraintsFromSetCategoryType($categoryType))) {
            throw new InvalidArgumentException($categoryTypeArrayErrorMessage, __LINE__);
        }
        $this->categoryType = $categoryType;
        
        return $this;
    }
    /**
     * Add item to categoryType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToCategoryType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The categoryType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->categoryType[] = $item;
        
        return $this;
    }
    /**
     * Get surface value
     * @return int|null
     */
    public function getSurface(): ?int
    {
        return $this->surface;
    }
    /**
     * Set surface value
     * @param int $surface
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setSurface(?int $surface = null): self
    {
        // validation for constraint: int
        if (!is_null($surface) && !(is_int($surface) || ctype_digit($surface))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($surface, true), gettype($surface)), __LINE__);
        }
        $this->surface = $surface;
        
        return $this;
    }
    /**
     * Get room value
     * @return int|null
     */
    public function getRoom(): ?int
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param int $room
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setRoom(?int $room = null): self
    {
        // validation for constraint: int
        if (!is_null($room) && !(is_int($room) || ctype_digit($room))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($room, true), gettype($room)), __LINE__);
        }
        $this->room = $room;
        
        return $this;
    }
    /**
     * Get bathroom value
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathroom;
    }
    /**
     * Set bathroom value
     * @param int $bathroom
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setBathroom(?int $bathroom = null): self
    {
        // validation for constraint: int
        if (!is_null($bathroom) && !(is_int($bathroom) || ctype_digit($bathroom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bathroom, true), gettype($bathroom)), __LINE__);
        }
        $this->bathroom = $bathroom;
        
        return $this;
    }
    /**
     * Get mediaDataType value
     * @return string|null
     */
    public function getMediaDataType(): ?string
    {
        return $this->mediaDataType;
    }
    /**
     * Set mediaDataType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mediaDataType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setMediaDataType(?string $mediaDataType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\MediaDataType::valueIsValid($mediaDataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\MediaDataType', is_array($mediaDataType) ? implode(', ', $mediaDataType) : var_export($mediaDataType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::getValidValues())), __LINE__);
        }
        $this->mediaDataType = $mediaDataType;
        
        return $this;
    }
    /**
     * Get idCustomer value
     * @return string|null
     */
    public function getIdCustomer(): ?string
    {
        return $this->idCustomer;
    }
    /**
     * Set idCustomer value
     * @param string $idCustomer
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setIdCustomer(?string $idCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($idCustomer) && !is_string($idCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCustomer, true), gettype($idCustomer)), __LINE__);
        }
        $this->idCustomer = $idCustomer;
        
        return $this;
    }
    /**
     * Get externalCriterion value
     * @return \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[]
     */
    public function getExternalCriterion(): ?array
    {
        return $this->externalCriterion;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalCriterionForArrayConstraintsFromSetExternalCriterion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgAvailabilityExternalCriterionItem) {
            // validation for constraint: itemType
            if (!$requestCpgAvailabilityExternalCriterionItem instanceof \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion) {
                $invalidValues[] = is_object($requestCpgAvailabilityExternalCriterionItem) ? get_class($requestCpgAvailabilityExternalCriterionItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityExternalCriterionItem), var_export($requestCpgAvailabilityExternalCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The externalCriterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set externalCriterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[] $externalCriterion
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function setExternalCriterion(?array $externalCriterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalCriterionArrayErrorMessage = self::validateExternalCriterionForArrayConstraintsFromSetExternalCriterion($externalCriterion))) {
            throw new InvalidArgumentException($externalCriterionArrayErrorMessage, __LINE__);
        }
        $this->externalCriterion = $externalCriterion;
        
        return $this;
    }
    /**
     * Add item to externalCriterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability
     */
    public function addToExternalCriterion(\Maetva\ESeason\WebCampServices\StructType\ExternalCriterion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion) {
            throw new InvalidArgumentException(sprintf('The externalCriterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->externalCriterion[] = $item;
        
        return $this;
    }
}
