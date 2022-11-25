<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgSimpleSearch StructType
 * @subpackage Structs
 */
class RequestCpgSimpleSearch extends AbstractStructBase
{
    /**
     * The searchPlace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Maetva\ESeason\WebCampServices\StructType\SearchPlace[]
     */
    protected array $searchPlace;
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
     * The month
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The dayOfWeek
     * @var int|null
     */
    protected ?int $dayOfWeek = null;
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
     * The year
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * Constructor method for RequestCpgSimpleSearch
     * @uses RequestCpgSimpleSearch::setSearchPlace()
     * @uses RequestCpgSimpleSearch::setIdUser()
     * @uses RequestCpgSimpleSearch::setPassword()
     * @uses RequestCpgSimpleSearch::setMonth()
     * @uses RequestCpgSimpleSearch::setDuration()
     * @uses RequestCpgSimpleSearch::setDayOfWeek()
     * @uses RequestCpgSimpleSearch::setLanguage()
     * @uses RequestCpgSimpleSearch::setPerson()
     * @uses RequestCpgSimpleSearch::setProductType()
     * @uses RequestCpgSimpleSearch::setYear()
     * @uses RequestCpgSimpleSearch::setIdCustomer()
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace[] $searchPlace
     * @param string $idUser
     * @param string $password
     * @param int $month
     * @param int $duration
     * @param int $dayOfWeek
     * @param string $language
     * @param int $person
     * @param string $productType
     * @param int $year
     * @param string $idCustomer
     */
    public function __construct(array $searchPlace, ?string $idUser = null, ?string $password = null, ?int $month = null, ?int $duration = null, ?int $dayOfWeek = null, ?string $language = null, ?int $person = null, ?string $productType = null, ?int $year = null, ?string $idCustomer = null)
    {
        $this
            ->setSearchPlace($searchPlace)
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setMonth($month)
            ->setDuration($duration)
            ->setDayOfWeek($dayOfWeek)
            ->setLanguage($language)
            ->setPerson($person)
            ->setProductType($productType)
            ->setYear($year)
            ->setIdCustomer($idCustomer);
    }
    /**
     * Get searchPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace[]
     */
    public function getSearchPlace(): array
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
        foreach ($values as $requestCpgSimpleSearchSearchPlaceItem) {
            // validation for constraint: itemType
            if (!$requestCpgSimpleSearchSearchPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SearchPlace) {
                $invalidValues[] = is_object($requestCpgSimpleSearchSearchPlaceItem) ? get_class($requestCpgSimpleSearchSearchPlaceItem) : sprintf('%s(%s)', gettype($requestCpgSimpleSearchSearchPlaceItem), var_export($requestCpgSimpleSearchSearchPlaceItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
     */
    public function setSearchPlace(array $searchPlace): self
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * Get dayOfWeek value
     * @return int|null
     */
    public function getDayOfWeek(): ?int
    {
        return $this->dayOfWeek;
    }
    /**
     * Set dayOfWeek value
     * @param int $dayOfWeek
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
     */
    public function setDayOfWeek(?int $dayOfWeek = null): self
    {
        // validation for constraint: int
        if (!is_null($dayOfWeek) && !(is_int($dayOfWeek) || ctype_digit($dayOfWeek))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOfWeek, true), gettype($dayOfWeek)), __LINE__);
        }
        $this->dayOfWeek = $dayOfWeek;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch
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
}
