<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgBoolAvailability StructType
 * @subpackage Structs
 */
class RequestCpgBoolAvailability extends AbstractStructBase
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
     * Constructor method for RequestCpgBoolAvailability
     * @uses RequestCpgBoolAvailability::setIdUser()
     * @uses RequestCpgBoolAvailability::setPassword()
     * @uses RequestCpgBoolAvailability::setLanguage()
     * @uses RequestCpgBoolAvailability::setArrival()
     * @uses RequestCpgBoolAvailability::setCriteria()
     * @uses RequestCpgBoolAvailability::setDuration()
     * @uses RequestCpgBoolAvailability::setGeographicalArea()
     * @uses RequestCpgBoolAvailability::setLocalization()
     * @uses RequestCpgBoolAvailability::setNaturist()
     * @uses RequestCpgBoolAvailability::setPerson()
     * @uses RequestCpgBoolAvailability::setProductType()
     * @uses RequestCpgBoolAvailability::setSearchPlace()
     * @uses RequestCpgBoolAvailability::setStanding()
     * @param string $idUser
     * @param string $password
     * @param string $language
     * @param string $arrival
     * @param string[] $criteria
     * @param string $duration
     * @param \Maetva\ESeason\WebCampServices\StructType\GeographicalArea[] $geographicalArea
     * @param string[] $localization
     * @param bool $naturist
     * @param int $person
     * @param string $productType
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @param int[] $standing
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $language = null, ?string $arrival = null, ?array $criteria = null, ?string $duration = null, ?array $geographicalArea = null, ?array $localization = null, ?bool $naturist = null, ?int $person = null, ?string $productType = null, ?array $searchPlace = null, ?array $standing = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setLanguage($language)
            ->setArrival($arrival)
            ->setCriteria($criteria)
            ->setDuration($duration)
            ->setGeographicalArea($geographicalArea)
            ->setLocalization($localization)
            ->setNaturist($naturist)
            ->setPerson($person)
            ->setProductType($productType)
            ->setSearchPlace($searchPlace)
            ->setStanding($standing);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
        foreach ($values as $requestCpgBoolAvailabilityCriteriaItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Criteria::valueIsValid($requestCpgBoolAvailabilityCriteriaItem)) {
                $invalidValues[] = is_object($requestCpgBoolAvailabilityCriteriaItem) ? get_class($requestCpgBoolAvailabilityCriteriaItem) : sprintf('%s(%s)', gettype($requestCpgBoolAvailabilityCriteriaItem), var_export($requestCpgBoolAvailabilityCriteriaItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
        foreach ($values as $requestCpgBoolAvailabilityGeographicalAreaItem) {
            // validation for constraint: itemType
            if (!$requestCpgBoolAvailabilityGeographicalAreaItem instanceof \Maetva\ESeason\WebCampServices\StructType\GeographicalArea) {
                $invalidValues[] = is_object($requestCpgBoolAvailabilityGeographicalAreaItem) ? get_class($requestCpgBoolAvailabilityGeographicalAreaItem) : sprintf('%s(%s)', gettype($requestCpgBoolAvailabilityGeographicalAreaItem), var_export($requestCpgBoolAvailabilityGeographicalAreaItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
        foreach ($values as $requestCpgBoolAvailabilityLocalizationItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\Localizations::valueIsValid($requestCpgBoolAvailabilityLocalizationItem)) {
                $invalidValues[] = is_object($requestCpgBoolAvailabilityLocalizationItem) ? get_class($requestCpgBoolAvailabilityLocalizationItem) : sprintf('%s(%s)', gettype($requestCpgBoolAvailabilityLocalizationItem), var_export($requestCpgBoolAvailabilityLocalizationItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
        foreach ($values as $requestCpgBoolAvailabilitySearchPlaceItem) {
            // validation for constraint: itemType
            if (!$requestCpgBoolAvailabilitySearchPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
                $invalidValues[] = is_object($requestCpgBoolAvailabilitySearchPlaceItem) ? get_class($requestCpgBoolAvailabilitySearchPlaceItem) : sprintf('%s(%s)', gettype($requestCpgBoolAvailabilitySearchPlaceItem), var_export($requestCpgBoolAvailabilitySearchPlaceItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
        foreach ($values as $requestCpgBoolAvailabilityStandingItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgBoolAvailabilityStandingItem) || ctype_digit($requestCpgBoolAvailabilityStandingItem))) {
                $invalidValues[] = is_object($requestCpgBoolAvailabilityStandingItem) ? get_class($requestCpgBoolAvailabilityStandingItem) : sprintf('%s(%s)', gettype($requestCpgBoolAvailabilityStandingItem), var_export($requestCpgBoolAvailabilityStandingItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability
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
}
