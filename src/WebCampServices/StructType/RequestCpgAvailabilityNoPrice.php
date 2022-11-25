<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgAvailabilityNoPrice StructType
 * @subpackage Structs
 */
class RequestCpgAvailabilityNoPrice extends AbstractStructBase
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
     * The arrival
     * @var string|null
     */
    protected ?string $arrival = null;
    /**
     * The departure
     * @var string|null
     */
    protected ?string $departure = null;
    /**
     * The duration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $duration = null;
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
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
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
     * The searchMode
     * Meta information extracted from the WSDL
     * - base: int
     * - maxInclusive: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $searchMode = null;
    /**
     * The returnProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnProduct = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $card = null;
    /**
     * The cachePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $cachePrice = null;
    /**
     * The wichStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wichStock = null;
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
     * The idMlc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idMlc = null;
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
     * Constructor method for RequestCpgAvailabilityNoPrice
     * @uses RequestCpgAvailabilityNoPrice::setIdUser()
     * @uses RequestCpgAvailabilityNoPrice::setPassword()
     * @uses RequestCpgAvailabilityNoPrice::setArrival()
     * @uses RequestCpgAvailabilityNoPrice::setDeparture()
     * @uses RequestCpgAvailabilityNoPrice::setDuration()
     * @uses RequestCpgAvailabilityNoPrice::setDeltaArrival()
     * @uses RequestCpgAvailabilityNoPrice::setDeltaDuration()
     * @uses RequestCpgAvailabilityNoPrice::setLanguage()
     * @uses RequestCpgAvailabilityNoPrice::setPerson()
     * @uses RequestCpgAvailabilityNoPrice::setProductType()
     * @uses RequestCpgAvailabilityNoPrice::setSearchPlace()
     * @uses RequestCpgAvailabilityNoPrice::setCpSite()
     * @uses RequestCpgAvailabilityNoPrice::setSearchType()
     * @uses RequestCpgAvailabilityNoPrice::setSearchMode()
     * @uses RequestCpgAvailabilityNoPrice::setReturnProduct()
     * @uses RequestCpgAvailabilityNoPrice::setCard()
     * @uses RequestCpgAvailabilityNoPrice::setCachePrice()
     * @uses RequestCpgAvailabilityNoPrice::setWichStock()
     * @uses RequestCpgAvailabilityNoPrice::setCriterion()
     * @uses RequestCpgAvailabilityNoPrice::setCategoryType()
     * @uses RequestCpgAvailabilityNoPrice::setSurface()
     * @uses RequestCpgAvailabilityNoPrice::setRoom()
     * @uses RequestCpgAvailabilityNoPrice::setBathroom()
     * @uses RequestCpgAvailabilityNoPrice::setIdMlc()
     * @uses RequestCpgAvailabilityNoPrice::setIdCustomer()
     * @uses RequestCpgAvailabilityNoPrice::setExternalCriterion()
     * @param string $idUser
     * @param string $password
     * @param string $arrival
     * @param string $departure
     * @param int $duration
     * @param int $deltaArrival
     * @param int $deltaDuration
     * @param string $language
     * @param int $person
     * @param string $productType
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @param int[] $cpSite
     * @param int $searchType
     * @param int $searchMode
     * @param bool $returnProduct
     * @param string $card
     * @param bool $cachePrice
     * @param string $wichStock
     * @param int[] $criterion
     * @param string[] $categoryType
     * @param int $surface
     * @param int $room
     * @param int $bathroom
     * @param string $idMlc
     * @param string $idCustomer
     * @param \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion[] $externalCriterion
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $arrival = null, ?string $departure = null, ?int $duration = null, ?int $deltaArrival = null, ?int $deltaDuration = null, ?string $language = null, ?int $person = null, ?string $productType = null, ?array $searchPlace = null, ?array $cpSite = null, ?int $searchType = null, ?int $searchMode = null, ?bool $returnProduct = null, ?string $card = null, ?bool $cachePrice = null, ?string $wichStock = null, ?array $criterion = null, ?array $categoryType = null, ?int $surface = null, ?int $room = null, ?int $bathroom = null, ?string $idMlc = null, ?string $idCustomer = null, ?array $externalCriterion = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setArrival($arrival)
            ->setDeparture($departure)
            ->setDuration($duration)
            ->setDeltaArrival($deltaArrival)
            ->setDeltaDuration($deltaDuration)
            ->setLanguage($language)
            ->setPerson($person)
            ->setProductType($productType)
            ->setSearchPlace($searchPlace)
            ->setCpSite($cpSite)
            ->setSearchType($searchType)
            ->setSearchMode($searchMode)
            ->setReturnProduct($returnProduct)
            ->setCard($card)
            ->setCachePrice($cachePrice)
            ->setWichStock($wichStock)
            ->setCriterion($criterion)
            ->setCategoryType($categoryType)
            ->setSurface($surface)
            ->setRoom($room)
            ->setBathroom($bathroom)
            ->setIdMlc($idMlc)
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * Get departure value
     * @return string|null
     */
    public function getDeparture(): ?string
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setDeparture(?string $departure = null): self
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
        foreach ($values as $requestCpgAvailabilityNoPriceSearchPlaceItem) {
            // validation for constraint: itemType
            if (!$requestCpgAvailabilityNoPriceSearchPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
                $invalidValues[] = is_object($requestCpgAvailabilityNoPriceSearchPlaceItem) ? get_class($requestCpgAvailabilityNoPriceSearchPlaceItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityNoPriceSearchPlaceItem), var_export($requestCpgAvailabilityNoPriceSearchPlaceItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
        foreach ($values as $requestCpgAvailabilityNoPriceCpSiteItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgAvailabilityNoPriceCpSiteItem) || ctype_digit($requestCpgAvailabilityNoPriceCpSiteItem))) {
                $invalidValues[] = is_object($requestCpgAvailabilityNoPriceCpSiteItem) ? get_class($requestCpgAvailabilityNoPriceCpSiteItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityNoPriceCpSiteItem), var_export($requestCpgAvailabilityNoPriceCpSiteItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * Get searchMode value
     * @return int|null
     */
    public function getSearchMode(): ?int
    {
        return $this->searchMode;
    }
    /**
     * Set searchMode value
     * @param int $searchMode
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setSearchMode(?int $searchMode = null): self
    {
        // validation for constraint: int
        if (!is_null($searchMode) && !(is_int($searchMode) || ctype_digit($searchMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchMode, true), gettype($searchMode)), __LINE__);
        }
        // validation for constraint: maxInclusive(1)
        if (!is_null($searchMode) && $searchMode > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 1', var_export($searchMode, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($searchMode) && $searchMode < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($searchMode, true)), __LINE__);
        }
        $this->searchMode = $searchMode;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * Get card value
     * @return string|null
     */
    public function getCard(): ?string
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param string $card
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setCard(?string $card = null): self
    {
        // validation for constraint: string
        if (!is_null($card) && !is_string($card)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($card, true), gettype($card)), __LINE__);
        }
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get cachePrice value
     * @return bool|null
     */
    public function getCachePrice(): ?bool
    {
        return $this->cachePrice;
    }
    /**
     * Set cachePrice value
     * @param bool $cachePrice
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setCachePrice(?bool $cachePrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cachePrice) && !is_bool($cachePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cachePrice, true), gettype($cachePrice)), __LINE__);
        }
        $this->cachePrice = $cachePrice;
        
        return $this;
    }
    /**
     * Get wichStock value
     * @return string|null
     */
    public function getWichStock(): ?string
    {
        return $this->wichStock;
    }
    /**
     * Set wichStock value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Stock::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Stock::getValidValues()
     * @throws InvalidArgumentException
     * @param string $wichStock
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setWichStock(?string $wichStock = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Stock::valueIsValid($wichStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Stock', is_array($wichStock) ? implode(', ', $wichStock) : var_export($wichStock, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Stock::getValidValues())), __LINE__);
        }
        $this->wichStock = $wichStock;
        
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
        foreach ($values as $requestCpgAvailabilityNoPriceCriterionItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgAvailabilityNoPriceCriterionItem) || ctype_digit($requestCpgAvailabilityNoPriceCriterionItem))) {
                $invalidValues[] = is_object($requestCpgAvailabilityNoPriceCriterionItem) ? get_class($requestCpgAvailabilityNoPriceCriterionItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityNoPriceCriterionItem), var_export($requestCpgAvailabilityNoPriceCriterionItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
        foreach ($values as $requestCpgAvailabilityNoPriceCategoryTypeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgAvailabilityNoPriceCategoryTypeItem)) {
                $invalidValues[] = is_object($requestCpgAvailabilityNoPriceCategoryTypeItem) ? get_class($requestCpgAvailabilityNoPriceCategoryTypeItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityNoPriceCategoryTypeItem), var_export($requestCpgAvailabilityNoPriceCategoryTypeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * Get idMlc value
     * @return string|null
     */
    public function getIdMlc(): ?string
    {
        return $this->idMlc;
    }
    /**
     * Set idMlc value
     * @param string $idMlc
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
     */
    public function setIdMlc(?string $idMlc = null): self
    {
        // validation for constraint: string
        if (!is_null($idMlc) && !is_string($idMlc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idMlc, true), gettype($idMlc)), __LINE__);
        }
        $this->idMlc = $idMlc;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
        foreach ($values as $requestCpgAvailabilityNoPriceExternalCriterionItem) {
            // validation for constraint: itemType
            if (!$requestCpgAvailabilityNoPriceExternalCriterionItem instanceof \Maetva\ESeason\WebCampServices\StructType\ExternalCriterion) {
                $invalidValues[] = is_object($requestCpgAvailabilityNoPriceExternalCriterionItem) ? get_class($requestCpgAvailabilityNoPriceExternalCriterionItem) : sprintf('%s(%s)', gettype($requestCpgAvailabilityNoPriceExternalCriterionItem), var_export($requestCpgAvailabilityNoPriceExternalCriterionItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice
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
