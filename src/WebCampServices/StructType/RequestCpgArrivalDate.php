<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgArrivalDate StructType
 * @subpackage Structs
 */
class RequestCpgArrivalDate extends AbstractStructBase
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
     * The nbPers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $nbPers = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The idsite
     * @var int|null
     */
    protected ?int $idsite = null;
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
     * The idCategYelloh
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCategYelloh = null;
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
     * The externalCriterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[]
     */
    protected ?array $externalCriterion = null;
    /**
     * Constructor method for RequestCpgArrivalDate
     * @uses RequestCpgArrivalDate::setIdUser()
     * @uses RequestCpgArrivalDate::setPassword()
     * @uses RequestCpgArrivalDate::setLanguage()
     * @uses RequestCpgArrivalDate::setNbPers()
     * @uses RequestCpgArrivalDate::setMonth()
     * @uses RequestCpgArrivalDate::setYear()
     * @uses RequestCpgArrivalDate::setDuration()
     * @uses RequestCpgArrivalDate::setIdsite()
     * @uses RequestCpgArrivalDate::setProductType()
     * @uses RequestCpgArrivalDate::setSearchPlace()
     * @uses RequestCpgArrivalDate::setIdCategYelloh()
     * @uses RequestCpgArrivalDate::setCriterion()
     * @uses RequestCpgArrivalDate::setCategoryType()
     * @uses RequestCpgArrivalDate::setSurface()
     * @uses RequestCpgArrivalDate::setRoom()
     * @uses RequestCpgArrivalDate::setBathroom()
     * @uses RequestCpgArrivalDate::setExternalCriterion()
     * @param string $idUser
     * @param string $password
     * @param string $language
     * @param int $nbPers
     * @param int $month
     * @param int $year
     * @param int $duration
     * @param int $idsite
     * @param string $productType
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @param string $idCategYelloh
     * @param int[] $criterion
     * @param string[] $categoryType
     * @param int $surface
     * @param int $room
     * @param int $bathroom
     * @param \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[] $externalCriterion
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $language = null, ?int $nbPers = null, ?int $month = null, ?int $year = null, ?int $duration = null, ?int $idsite = null, ?string $productType = null, ?array $searchPlace = null, ?string $idCategYelloh = null, ?array $criterion = null, ?array $categoryType = null, ?int $surface = null, ?int $room = null, ?int $bathroom = null, ?array $externalCriterion = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setLanguage($language)
            ->setNbPers($nbPers)
            ->setMonth($month)
            ->setYear($year)
            ->setDuration($duration)
            ->setIdsite($idsite)
            ->setProductType($productType)
            ->setSearchPlace($searchPlace)
            ->setIdCategYelloh($idCategYelloh)
            ->setCriterion($criterion)
            ->setCategoryType($categoryType)
            ->setSurface($surface)
            ->setRoom($room)
            ->setBathroom($bathroom)
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * Get nbPers value
     * @return int|null
     */
    public function getNbPers(): ?int
    {
        return $this->nbPers;
    }
    /**
     * Set nbPers value
     * @param int $nbPers
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setNbPers(?int $nbPers = null): self
    {
        // validation for constraint: int
        if (!is_null($nbPers) && !(is_int($nbPers) || ctype_digit($nbPers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbPers, true), gettype($nbPers)), __LINE__);
        }
        $this->nbPers = $nbPers;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get idsite value
     * @return int|null
     */
    public function getIdsite(): ?int
    {
        return $this->idsite;
    }
    /**
     * Set idsite value
     * @param int $idsite
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setIdsite(?int $idsite = null): self
    {
        // validation for constraint: int
        if (!is_null($idsite) && !(is_int($idsite) || ctype_digit($idsite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idsite, true), gettype($idsite)), __LINE__);
        }
        $this->idsite = $idsite;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
        foreach ($values as $requestCpgArrivalDateSearchPlaceItem) {
            // validation for constraint: itemType
            if (!$requestCpgArrivalDateSearchPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
                $invalidValues[] = is_object($requestCpgArrivalDateSearchPlaceItem) ? get_class($requestCpgArrivalDateSearchPlaceItem) : sprintf('%s(%s)', gettype($requestCpgArrivalDateSearchPlaceItem), var_export($requestCpgArrivalDateSearchPlaceItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * Get idCategYelloh value
     * @return string|null
     */
    public function getIdCategYelloh(): ?string
    {
        return $this->idCategYelloh;
    }
    /**
     * Set idCategYelloh value
     * @param string $idCategYelloh
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
     */
    public function setIdCategYelloh(?string $idCategYelloh = null): self
    {
        // validation for constraint: string
        if (!is_null($idCategYelloh) && !is_string($idCategYelloh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCategYelloh, true), gettype($idCategYelloh)), __LINE__);
        }
        $this->idCategYelloh = $idCategYelloh;
        
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
        foreach ($values as $requestCpgArrivalDateCriterionItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgArrivalDateCriterionItem) || ctype_digit($requestCpgArrivalDateCriterionItem))) {
                $invalidValues[] = is_object($requestCpgArrivalDateCriterionItem) ? get_class($requestCpgArrivalDateCriterionItem) : sprintf('%s(%s)', gettype($requestCpgArrivalDateCriterionItem), var_export($requestCpgArrivalDateCriterionItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
        foreach ($values as $requestCpgArrivalDateCategoryTypeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgArrivalDateCategoryTypeItem)) {
                $invalidValues[] = is_object($requestCpgArrivalDateCategoryTypeItem) ? get_class($requestCpgArrivalDateCategoryTypeItem) : sprintf('%s(%s)', gettype($requestCpgArrivalDateCategoryTypeItem), var_export($requestCpgArrivalDateCategoryTypeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
        foreach ($values as $requestCpgArrivalDateExternalCriterionItem) {
            // validation for constraint: itemType
            if (!$requestCpgArrivalDateExternalCriterionItem instanceof \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion) {
                $invalidValues[] = is_object($requestCpgArrivalDateExternalCriterionItem) ? get_class($requestCpgArrivalDateExternalCriterionItem) : sprintf('%s(%s)', gettype($requestCpgArrivalDateExternalCriterionItem), var_export($requestCpgArrivalDateExternalCriterionItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate
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
