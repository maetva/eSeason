<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Stay StructType
 * @subpackage Structs
 */
class Stay extends AbstractStructBase
{
    /**
     * The cancelEnable
     * @var bool|null
     */
    protected ?bool $cancelEnable = null;
    /**
     * The cancelInsurancePrice
     * @var float|null
     */
    protected ?float $cancelInsurancePrice = null;
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The expenseReservationPrice
     * @var float|null
     */
    protected ?float $expenseReservationPrice = null;
    /**
     * The idSite
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * The idStay
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The priceType
     * @var string|null
     */
    protected ?string $priceType = null;
    /**
     * The promotion
     * @var bool|null
     */
    protected ?bool $promotion = null;
    /**
     * The animal
     * @var bool|null
     */
    protected ?bool $animal = null;
    /**
     * The personmin
     * @var int|null
     */
    protected ?int $personmin = null;
    /**
     * The personmax
     * @var int|null
     */
    protected ?int $personmax = null;
    /**
     * The promoInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\PromoInfo|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $selectPlace = null;
    /**
     * The highlighted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $highlighted = null;
    /**
     * The highlightLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $highlightLabel = null;
    /**
     * The fidNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $fidNights = null;
    /**
     * The fidComments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidComments = null;
    /**
     * The fidStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $fidStatus = null;
    /**
     * The fidMap
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidMap = null;
    /**
     * The pertinence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $pertinence = null;
    /**
     * The personSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $personSale = null;
    /**
     * The limitFull
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $limitFull = null;
    /**
     * The libCateg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libCateg = null;
    /**
     * The libTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libTariff = null;
    /**
     * The stock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $stock = null;
    /**
     * The flexDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexDate = null;
    /**
     * The flexCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexCapacity = null;
    /**
     * The upgradeCateg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $upgradeCateg = null;
    /**
     * The dryPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $dryPrice = null;
    /**
     * The includedPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $includedPerson = null;
    /**
     * The specificParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SpecificParam[]
     */
    protected ?array $specificParam = null;
    /**
     * Constructor method for Stay
     * @uses Stay::setCancelEnable()
     * @uses Stay::setCancelInsurancePrice()
     * @uses Stay::setDeposit()
     * @uses Stay::setExpenseReservationPrice()
     * @uses Stay::setIdSite()
     * @uses Stay::setIdStay()
     * @uses Stay::setPrice()
     * @uses Stay::setPriceType()
     * @uses Stay::setPromotion()
     * @uses Stay::setAnimal()
     * @uses Stay::setPersonmin()
     * @uses Stay::setPersonmax()
     * @uses Stay::setPromoInfo()
     * @uses Stay::setSelectPlace()
     * @uses Stay::setHighlighted()
     * @uses Stay::setHighlightLabel()
     * @uses Stay::setFidNights()
     * @uses Stay::setFidComments()
     * @uses Stay::setFidStatus()
     * @uses Stay::setFidMap()
     * @uses Stay::setPertinence()
     * @uses Stay::setPersonSale()
     * @uses Stay::setLimitFull()
     * @uses Stay::setLibCateg()
     * @uses Stay::setLibTariff()
     * @uses Stay::setStock()
     * @uses Stay::setFlexDate()
     * @uses Stay::setFlexCapacity()
     * @uses Stay::setUpgradeCateg()
     * @uses Stay::setDryPrice()
     * @uses Stay::setIncludedPerson()
     * @uses Stay::setSpecificParam()
     * @param bool $cancelEnable
     * @param float $cancelInsurancePrice
     * @param float $deposit
     * @param float $expenseReservationPrice
     * @param int $idSite
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param float $price
     * @param string $priceType
     * @param bool $promotion
     * @param bool $animal
     * @param int $personmin
     * @param int $personmax
     * @param \Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo
     * @param bool $selectPlace
     * @param bool $highlighted
     * @param string $highlightLabel
     * @param int $fidNights
     * @param string $fidComments
     * @param int $fidStatus
     * @param string $fidMap
     * @param int $pertinence
     * @param bool $personSale
     * @param int $limitFull
     * @param string $libCateg
     * @param string $libTariff
     * @param int $stock
     * @param bool $flexDate
     * @param bool $flexCapacity
     * @param bool $upgradeCateg
     * @param float $dryPrice
     * @param int $includedPerson
     * @param \Maetva\ESeason\WebCampServices\StructType\SpecificParam[] $specificParam
     */
    public function __construct(?bool $cancelEnable = null, ?float $cancelInsurancePrice = null, ?float $deposit = null, ?float $expenseReservationPrice = null, ?int $idSite = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?float $price = null, ?string $priceType = null, ?bool $promotion = null, ?bool $animal = null, ?int $personmin = null, ?int $personmax = null, ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null, ?bool $selectPlace = null, ?bool $highlighted = null, ?string $highlightLabel = null, ?int $fidNights = null, ?string $fidComments = null, ?int $fidStatus = null, ?string $fidMap = null, ?int $pertinence = null, ?bool $personSale = null, ?int $limitFull = null, ?string $libCateg = null, ?string $libTariff = null, ?int $stock = null, ?bool $flexDate = null, ?bool $flexCapacity = null, ?bool $upgradeCateg = null, ?float $dryPrice = null, ?int $includedPerson = null, ?array $specificParam = null)
    {
        $this
            ->setCancelEnable($cancelEnable)
            ->setCancelInsurancePrice($cancelInsurancePrice)
            ->setDeposit($deposit)
            ->setExpenseReservationPrice($expenseReservationPrice)
            ->setIdSite($idSite)
            ->setIdStay($idStay)
            ->setPrice($price)
            ->setPriceType($priceType)
            ->setPromotion($promotion)
            ->setAnimal($animal)
            ->setPersonmin($personmin)
            ->setPersonmax($personmax)
            ->setPromoInfo($promoInfo)
            ->setSelectPlace($selectPlace)
            ->setHighlighted($highlighted)
            ->setHighlightLabel($highlightLabel)
            ->setFidNights($fidNights)
            ->setFidComments($fidComments)
            ->setFidStatus($fidStatus)
            ->setFidMap($fidMap)
            ->setPertinence($pertinence)
            ->setPersonSale($personSale)
            ->setLimitFull($limitFull)
            ->setLibCateg($libCateg)
            ->setLibTariff($libTariff)
            ->setStock($stock)
            ->setFlexDate($flexDate)
            ->setFlexCapacity($flexCapacity)
            ->setUpgradeCateg($upgradeCateg)
            ->setDryPrice($dryPrice)
            ->setIncludedPerson($includedPerson)
            ->setSpecificParam($specificParam);
    }
    /**
     * Get cancelEnable value
     * @return bool|null
     */
    public function getCancelEnable(): ?bool
    {
        return $this->cancelEnable;
    }
    /**
     * Set cancelEnable value
     * @param bool $cancelEnable
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setCancelEnable(?bool $cancelEnable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelEnable) && !is_bool($cancelEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelEnable, true), gettype($cancelEnable)), __LINE__);
        }
        $this->cancelEnable = $cancelEnable;
        
        return $this;
    }
    /**
     * Get cancelInsurancePrice value
     * @return float|null
     */
    public function getCancelInsurancePrice(): ?float
    {
        return $this->cancelInsurancePrice;
    }
    /**
     * Set cancelInsurancePrice value
     * @param float $cancelInsurancePrice
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setCancelInsurancePrice(?float $cancelInsurancePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($cancelInsurancePrice) && !(is_float($cancelInsurancePrice) || is_numeric($cancelInsurancePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancelInsurancePrice, true), gettype($cancelInsurancePrice)), __LINE__);
        }
        $this->cancelInsurancePrice = $cancelInsurancePrice;
        
        return $this;
    }
    /**
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
    /**
     * Get expenseReservationPrice value
     * @return float|null
     */
    public function getExpenseReservationPrice(): ?float
    {
        return $this->expenseReservationPrice;
    }
    /**
     * Set expenseReservationPrice value
     * @param float $expenseReservationPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setExpenseReservationPrice(?float $expenseReservationPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($expenseReservationPrice) && !(is_float($expenseReservationPrice) || is_numeric($expenseReservationPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expenseReservationPrice, true), gettype($expenseReservationPrice)), __LINE__);
        }
        $this->expenseReservationPrice = $expenseReservationPrice;
        
        return $this;
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
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
     * Get idStay value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    public function getIdStay(): ?\Maetva\ESeason\WebCampServices\StructType\IdStay
    {
        return $this->idStay;
    }
    /**
     * Set idStay value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get priceType value
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * Set priceType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PriceType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PriceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $priceType
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPriceType(?string $priceType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\PriceType::valueIsValid($priceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\PriceType', is_array($priceType) ? implode(', ', $priceType) : var_export($priceType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\PriceType::getValidValues())), __LINE__);
        }
        $this->priceType = $priceType;
        
        return $this;
    }
    /**
     * Get promotion value
     * @return bool|null
     */
    public function getPromotion(): ?bool
    {
        return $this->promotion;
    }
    /**
     * Set promotion value
     * @param bool $promotion
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPromotion(?bool $promotion = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promotion) && !is_bool($promotion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promotion, true), gettype($promotion)), __LINE__);
        }
        $this->promotion = $promotion;
        
        return $this;
    }
    /**
     * Get animal value
     * @return bool|null
     */
    public function getAnimal(): ?bool
    {
        return $this->animal;
    }
    /**
     * Set animal value
     * @param bool $animal
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setAnimal(?bool $animal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($animal) && !is_bool($animal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($animal, true), gettype($animal)), __LINE__);
        }
        $this->animal = $animal;
        
        return $this;
    }
    /**
     * Get personmin value
     * @return int|null
     */
    public function getPersonmin(): ?int
    {
        return $this->personmin;
    }
    /**
     * Set personmin value
     * @param int $personmin
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPersonmin(?int $personmin = null): self
    {
        // validation for constraint: int
        if (!is_null($personmin) && !(is_int($personmin) || ctype_digit($personmin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personmin, true), gettype($personmin)), __LINE__);
        }
        $this->personmin = $personmin;
        
        return $this;
    }
    /**
     * Get personmax value
     * @return int|null
     */
    public function getPersonmax(): ?int
    {
        return $this->personmax;
    }
    /**
     * Set personmax value
     * @param int $personmax
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPersonmax(?int $personmax = null): self
    {
        // validation for constraint: int
        if (!is_null($personmax) && !(is_int($personmax) || ctype_digit($personmax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personmax, true), gettype($personmax)), __LINE__);
        }
        $this->personmax = $personmax;
        
        return $this;
    }
    /**
     * Get promoInfo value
     * @return \Maetva\ESeason\WebCampServices\StructType\PromoInfo|null
     */
    public function getPromoInfo(): ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo
    {
        return $this->promoInfo;
    }
    /**
     * Set promoInfo value
     * @param \Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPromoInfo(?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null): self
    {
        $this->promoInfo = $promoInfo;
        
        return $this;
    }
    /**
     * Get selectPlace value
     * @return bool|null
     */
    public function getSelectPlace(): ?bool
    {
        return $this->selectPlace;
    }
    /**
     * Set selectPlace value
     * @param bool $selectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setSelectPlace(?bool $selectPlace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectPlace) && !is_bool($selectPlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectPlace, true), gettype($selectPlace)), __LINE__);
        }
        $this->selectPlace = $selectPlace;
        
        return $this;
    }
    /**
     * Get highlighted value
     * @return bool|null
     */
    public function getHighlighted(): ?bool
    {
        return $this->highlighted;
    }
    /**
     * Set highlighted value
     * @param bool $highlighted
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setHighlighted(?bool $highlighted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($highlighted) && !is_bool($highlighted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highlighted, true), gettype($highlighted)), __LINE__);
        }
        $this->highlighted = $highlighted;
        
        return $this;
    }
    /**
     * Get highlightLabel value
     * @return string|null
     */
    public function getHighlightLabel(): ?string
    {
        return $this->highlightLabel;
    }
    /**
     * Set highlightLabel value
     * @param string $highlightLabel
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setHighlightLabel(?string $highlightLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($highlightLabel) && !is_string($highlightLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($highlightLabel, true), gettype($highlightLabel)), __LINE__);
        }
        $this->highlightLabel = $highlightLabel;
        
        return $this;
    }
    /**
     * Get fidNights value
     * @return int|null
     */
    public function getFidNights(): ?int
    {
        return $this->fidNights;
    }
    /**
     * Set fidNights value
     * @param int $fidNights
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFidNights(?int $fidNights = null): self
    {
        // validation for constraint: int
        if (!is_null($fidNights) && !(is_int($fidNights) || ctype_digit($fidNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidNights, true), gettype($fidNights)), __LINE__);
        }
        $this->fidNights = $fidNights;
        
        return $this;
    }
    /**
     * Get fidComments value
     * @return string|null
     */
    public function getFidComments(): ?string
    {
        return $this->fidComments;
    }
    /**
     * Set fidComments value
     * @param string $fidComments
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFidComments(?string $fidComments = null): self
    {
        // validation for constraint: string
        if (!is_null($fidComments) && !is_string($fidComments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidComments, true), gettype($fidComments)), __LINE__);
        }
        $this->fidComments = $fidComments;
        
        return $this;
    }
    /**
     * Get fidStatus value
     * @return int|null
     */
    public function getFidStatus(): ?int
    {
        return $this->fidStatus;
    }
    /**
     * Set fidStatus value
     * @param int $fidStatus
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFidStatus(?int $fidStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($fidStatus) && !(is_int($fidStatus) || ctype_digit($fidStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidStatus, true), gettype($fidStatus)), __LINE__);
        }
        $this->fidStatus = $fidStatus;
        
        return $this;
    }
    /**
     * Get fidMap value
     * @return string|null
     */
    public function getFidMap(): ?string
    {
        return $this->fidMap;
    }
    /**
     * Set fidMap value
     * @param string $fidMap
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFidMap(?string $fidMap = null): self
    {
        // validation for constraint: string
        if (!is_null($fidMap) && !is_string($fidMap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidMap, true), gettype($fidMap)), __LINE__);
        }
        $this->fidMap = $fidMap;
        
        return $this;
    }
    /**
     * Get pertinence value
     * @return int|null
     */
    public function getPertinence(): ?int
    {
        return $this->pertinence;
    }
    /**
     * Set pertinence value
     * @param int $pertinence
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPertinence(?int $pertinence = null): self
    {
        // validation for constraint: int
        if (!is_null($pertinence) && !(is_int($pertinence) || ctype_digit($pertinence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pertinence, true), gettype($pertinence)), __LINE__);
        }
        $this->pertinence = $pertinence;
        
        return $this;
    }
    /**
     * Get personSale value
     * @return bool|null
     */
    public function getPersonSale(): ?bool
    {
        return $this->personSale;
    }
    /**
     * Set personSale value
     * @param bool $personSale
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setPersonSale(?bool $personSale = null): self
    {
        // validation for constraint: boolean
        if (!is_null($personSale) && !is_bool($personSale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($personSale, true), gettype($personSale)), __LINE__);
        }
        $this->personSale = $personSale;
        
        return $this;
    }
    /**
     * Get limitFull value
     * @return int|null
     */
    public function getLimitFull(): ?int
    {
        return $this->limitFull;
    }
    /**
     * Set limitFull value
     * @param int $limitFull
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setLimitFull(?int $limitFull = null): self
    {
        // validation for constraint: int
        if (!is_null($limitFull) && !(is_int($limitFull) || ctype_digit($limitFull))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitFull, true), gettype($limitFull)), __LINE__);
        }
        $this->limitFull = $limitFull;
        
        return $this;
    }
    /**
     * Get libCateg value
     * @return string|null
     */
    public function getLibCateg(): ?string
    {
        return $this->libCateg;
    }
    /**
     * Set libCateg value
     * @param string $libCateg
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setLibCateg(?string $libCateg = null): self
    {
        // validation for constraint: string
        if (!is_null($libCateg) && !is_string($libCateg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libCateg, true), gettype($libCateg)), __LINE__);
        }
        $this->libCateg = $libCateg;
        
        return $this;
    }
    /**
     * Get libTariff value
     * @return string|null
     */
    public function getLibTariff(): ?string
    {
        return $this->libTariff;
    }
    /**
     * Set libTariff value
     * @param string $libTariff
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setLibTariff(?string $libTariff = null): self
    {
        // validation for constraint: string
        if (!is_null($libTariff) && !is_string($libTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libTariff, true), gettype($libTariff)), __LINE__);
        }
        $this->libTariff = $libTariff;
        
        return $this;
    }
    /**
     * Get stock value
     * @return int|null
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }
    /**
     * Set stock value
     * @param int $stock
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setStock(?int $stock = null): self
    {
        // validation for constraint: int
        if (!is_null($stock) && !(is_int($stock) || ctype_digit($stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stock, true), gettype($stock)), __LINE__);
        }
        $this->stock = $stock;
        
        return $this;
    }
    /**
     * Get flexDate value
     * @return bool|null
     */
    public function getFlexDate(): ?bool
    {
        return $this->flexDate;
    }
    /**
     * Set flexDate value
     * @param bool $flexDate
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFlexDate(?bool $flexDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexDate) && !is_bool($flexDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexDate, true), gettype($flexDate)), __LINE__);
        }
        $this->flexDate = $flexDate;
        
        return $this;
    }
    /**
     * Get flexCapacity value
     * @return bool|null
     */
    public function getFlexCapacity(): ?bool
    {
        return $this->flexCapacity;
    }
    /**
     * Set flexCapacity value
     * @param bool $flexCapacity
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setFlexCapacity(?bool $flexCapacity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexCapacity) && !is_bool($flexCapacity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexCapacity, true), gettype($flexCapacity)), __LINE__);
        }
        $this->flexCapacity = $flexCapacity;
        
        return $this;
    }
    /**
     * Get upgradeCateg value
     * @return bool|null
     */
    public function getUpgradeCateg(): ?bool
    {
        return $this->upgradeCateg;
    }
    /**
     * Set upgradeCateg value
     * @param bool $upgradeCateg
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setUpgradeCateg(?bool $upgradeCateg = null): self
    {
        // validation for constraint: boolean
        if (!is_null($upgradeCateg) && !is_bool($upgradeCateg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($upgradeCateg, true), gettype($upgradeCateg)), __LINE__);
        }
        $this->upgradeCateg = $upgradeCateg;
        
        return $this;
    }
    /**
     * Get dryPrice value
     * @return float|null
     */
    public function getDryPrice(): ?float
    {
        return $this->dryPrice;
    }
    /**
     * Set dryPrice value
     * @param float $dryPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setDryPrice(?float $dryPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($dryPrice) && !(is_float($dryPrice) || is_numeric($dryPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dryPrice, true), gettype($dryPrice)), __LINE__);
        }
        $this->dryPrice = $dryPrice;
        
        return $this;
    }
    /**
     * Get includedPerson value
     * @return int|null
     */
    public function getIncludedPerson(): ?int
    {
        return $this->includedPerson;
    }
    /**
     * Set includedPerson value
     * @param int $includedPerson
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setIncludedPerson(?int $includedPerson = null): self
    {
        // validation for constraint: int
        if (!is_null($includedPerson) && !(is_int($includedPerson) || ctype_digit($includedPerson))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includedPerson, true), gettype($includedPerson)), __LINE__);
        }
        $this->includedPerson = $includedPerson;
        
        return $this;
    }
    /**
     * Get specificParam value
     * @return \Maetva\ESeason\WebCampServices\StructType\SpecificParam[]
     */
    public function getSpecificParam(): ?array
    {
        return $this->specificParam;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecificParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificParam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecificParamForArrayConstraintsFromSetSpecificParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $staySpecificParamItem) {
            // validation for constraint: itemType
            if (!$staySpecificParamItem instanceof \Maetva\ESeason\WebCampServices\StructType\SpecificParam) {
                $invalidValues[] = is_object($staySpecificParamItem) ? get_class($staySpecificParamItem) : sprintf('%s(%s)', gettype($staySpecificParamItem), var_export($staySpecificParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The specificParam property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SpecificParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set specificParam value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SpecificParam[] $specificParam
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function setSpecificParam(?array $specificParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificParamArrayErrorMessage = self::validateSpecificParamForArrayConstraintsFromSetSpecificParam($specificParam))) {
            throw new InvalidArgumentException($specificParamArrayErrorMessage, __LINE__);
        }
        $this->specificParam = $specificParam;
        
        return $this;
    }
    /**
     * Add item to specificParam value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SpecificParam $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay
     */
    public function addToSpecificParam(\Maetva\ESeason\WebCampServices\StructType\SpecificParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SpecificParam) {
            throw new InvalidArgumentException(sprintf('The specificParam property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SpecificParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->specificParam[] = $item;
        
        return $this;
    }
}
