<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgPrice StructType
 * @subpackage Structs
 */
class ResponseCpgPrice extends AbstractStructBase
{
    /**
     * The cancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $cancelInsurance = null;
    /**
     * The deposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The noPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $noPayment = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The expenseReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $expenseReservation = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The orderLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\OrderLine[]
     */
    protected ?array $orderLine = null;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The vat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $vat = null;
    /**
     * The priceWT
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $priceWT = null;
    /**
     * The promoInfo
     * @var \Maetva\ESeason\WebCampServices\StructType\PromoInfo|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null;
    /**
     * The basicAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $basicAmount = null;
    /**
     * The tax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $tax = null;
    /**
     * The selectPlaceEnable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $selectPlaceEnable = null;
    /**
     * The selectPlacePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $selectPlacePrice = null;
    /**
     * The cancelEnable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $cancelEnable = null;
    /**
     * The supplementPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    protected ?array $supplementPrice = null;
    /**
     * The stock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $stock = null;
    /**
     * The promoCodeValid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoCodeValid = null;
    /**
     * The upgradeCateg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $upgradeCateg = null;
    /**
     * The option
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $option = null;
    /**
     * The displaySelectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $displaySelectPlace = null;
    /**
     * The specificParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SpecificParam[]
     */
    protected ?array $specificParam = null;
    /**
     * The fidNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * - nillable: true
     * @var int|null
     */
    protected ?int $fidStatus = null;
    /**
     * Constructor method for ResponseCpgPrice
     * @uses ResponseCpgPrice::setCancelInsurance()
     * @uses ResponseCpgPrice::setDeposit()
     * @uses ResponseCpgPrice::setNoPayment()
     * @uses ResponseCpgPrice::setError()
     * @uses ResponseCpgPrice::setMessError()
     * @uses ResponseCpgPrice::setExpenseReservation()
     * @uses ResponseCpgPrice::setIdUser()
     * @uses ResponseCpgPrice::setOrderLine()
     * @uses ResponseCpgPrice::setPrice()
     * @uses ResponseCpgPrice::setVat()
     * @uses ResponseCpgPrice::setPriceWT()
     * @uses ResponseCpgPrice::setPromoInfo()
     * @uses ResponseCpgPrice::setBasicAmount()
     * @uses ResponseCpgPrice::setTax()
     * @uses ResponseCpgPrice::setSelectPlaceEnable()
     * @uses ResponseCpgPrice::setSelectPlacePrice()
     * @uses ResponseCpgPrice::setCancelEnable()
     * @uses ResponseCpgPrice::setSupplementPrice()
     * @uses ResponseCpgPrice::setStock()
     * @uses ResponseCpgPrice::setPromoCodeValid()
     * @uses ResponseCpgPrice::setUpgradeCateg()
     * @uses ResponseCpgPrice::setOption()
     * @uses ResponseCpgPrice::setDisplaySelectPlace()
     * @uses ResponseCpgPrice::setSpecificParam()
     * @uses ResponseCpgPrice::setFidNights()
     * @uses ResponseCpgPrice::setFidComments()
     * @uses ResponseCpgPrice::setFidStatus()
     * @param float $cancelInsurance
     * @param float $deposit
     * @param bool $noPayment
     * @param string $error
     * @param string $messError
     * @param float $expenseReservation
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\OrderLine[] $orderLine
     * @param float $price
     * @param float $vat
     * @param float $priceWT
     * @param \Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo
     * @param float $basicAmount
     * @param float $tax
     * @param bool $selectPlaceEnable
     * @param float $selectPlacePrice
     * @param bool $cancelEnable
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplementPrice
     * @param int $stock
     * @param bool $promoCodeValid
     * @param bool $upgradeCateg
     * @param bool $option
     * @param bool $displaySelectPlace
     * @param \Maetva\ESeason\WebCampServices\StructType\SpecificParam[] $specificParam
     * @param int $fidNights
     * @param string $fidComments
     * @param int $fidStatus
     */
    public function __construct(?float $cancelInsurance = null, ?float $deposit = null, ?bool $noPayment = null, ?string $error = null, ?string $messError = null, ?float $expenseReservation = null, ?string $idUser = null, ?array $orderLine = null, ?float $price = null, ?float $vat = null, ?float $priceWT = null, ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null, ?float $basicAmount = null, ?float $tax = null, ?bool $selectPlaceEnable = null, ?float $selectPlacePrice = null, ?bool $cancelEnable = null, ?array $supplementPrice = null, ?int $stock = null, ?bool $promoCodeValid = null, ?bool $upgradeCateg = null, ?bool $option = null, ?bool $displaySelectPlace = null, ?array $specificParam = null, ?int $fidNights = null, ?string $fidComments = null, ?int $fidStatus = null)
    {
        $this
            ->setCancelInsurance($cancelInsurance)
            ->setDeposit($deposit)
            ->setNoPayment($noPayment)
            ->setError($error)
            ->setMessError($messError)
            ->setExpenseReservation($expenseReservation)
            ->setIdUser($idUser)
            ->setOrderLine($orderLine)
            ->setPrice($price)
            ->setVat($vat)
            ->setPriceWT($priceWT)
            ->setPromoInfo($promoInfo)
            ->setBasicAmount($basicAmount)
            ->setTax($tax)
            ->setSelectPlaceEnable($selectPlaceEnable)
            ->setSelectPlacePrice($selectPlacePrice)
            ->setCancelEnable($cancelEnable)
            ->setSupplementPrice($supplementPrice)
            ->setStock($stock)
            ->setPromoCodeValid($promoCodeValid)
            ->setUpgradeCateg($upgradeCateg)
            ->setOption($option)
            ->setDisplaySelectPlace($displaySelectPlace)
            ->setSpecificParam($specificParam)
            ->setFidNights($fidNights)
            ->setFidComments($fidComments)
            ->setFidStatus($fidStatus);
    }
    /**
     * Get cancelInsurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCancelInsurance(): ?float
    {
        return isset($this->cancelInsurance) ? $this->cancelInsurance : null;
    }
    /**
     * Set cancelInsurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $cancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setCancelInsurance(?float $cancelInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($cancelInsurance) && !(is_float($cancelInsurance) || is_numeric($cancelInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancelInsurance, true), gettype($cancelInsurance)), __LINE__);
        }
        if (is_null($cancelInsurance) || (is_array($cancelInsurance) && empty($cancelInsurance))) {
            unset($this->cancelInsurance);
        } else {
            $this->cancelInsurance = $cancelInsurance;
        }
        
        return $this;
    }
    /**
     * Get deposit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return isset($this->deposit) ? $this->deposit : null;
    }
    /**
     * Set deposit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $deposit
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        if (is_null($deposit) || (is_array($deposit) && empty($deposit))) {
            unset($this->deposit);
        } else {
            $this->deposit = $deposit;
        }
        
        return $this;
    }
    /**
     * Get noPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getNoPayment(): ?bool
    {
        return isset($this->noPayment) ? $this->noPayment : null;
    }
    /**
     * Set noPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $noPayment
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setNoPayment(?bool $noPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noPayment) && !is_bool($noPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noPayment, true), gettype($noPayment)), __LINE__);
        }
        if (is_null($noPayment) || (is_array($noPayment) && empty($noPayment))) {
            unset($this->noPayment);
        } else {
            $this->noPayment = $noPayment;
        }
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues()
     * @throws InvalidArgumentException
     * @param string $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Errors', is_array($error) ? implode(', ', $error) : var_export($error, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues())), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return isset($this->messError) ? $this->messError : null;
    }
    /**
     * Set messError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        if (is_null($messError) || (is_array($messError) && empty($messError))) {
            unset($this->messError);
        } else {
            $this->messError = $messError;
        }
        
        return $this;
    }
    /**
     * Get expenseReservation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getExpenseReservation(): ?float
    {
        return isset($this->expenseReservation) ? $this->expenseReservation : null;
    }
    /**
     * Set expenseReservation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $expenseReservation
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setExpenseReservation(?float $expenseReservation = null): self
    {
        // validation for constraint: float
        if (!is_null($expenseReservation) && !(is_float($expenseReservation) || is_numeric($expenseReservation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expenseReservation, true), gettype($expenseReservation)), __LINE__);
        }
        if (is_null($expenseReservation) || (is_array($expenseReservation) && empty($expenseReservation))) {
            unset($this->expenseReservation);
        } else {
            $this->expenseReservation = $expenseReservation;
        }
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
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
     * Get orderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine[]
     */
    public function getOrderLine(): ?array
    {
        return isset($this->orderLine) ? $this->orderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderLineForArrayConstraintsFromSetOrderLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgPriceOrderLineItem) {
            // validation for constraint: itemType
            if (!$responseCpgPriceOrderLineItem instanceof \Maetva\ESeason\WebCampServices\StructType\OrderLine) {
                $invalidValues[] = is_object($responseCpgPriceOrderLineItem) ? get_class($responseCpgPriceOrderLineItem) : sprintf('%s(%s)', gettype($responseCpgPriceOrderLineItem), var_export($responseCpgPriceOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderLine property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OrderLine[] $orderLine
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setOrderLine(?array $orderLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderLineArrayErrorMessage = self::validateOrderLineForArrayConstraintsFromSetOrderLine($orderLine))) {
            throw new InvalidArgumentException($orderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($orderLine) || (is_array($orderLine) && empty($orderLine))) {
            unset($this->orderLine);
        } else {
            $this->orderLine = $orderLine;
        }
        
        return $this;
    }
    /**
     * Add item to orderLine value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OrderLine $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function addToOrderLine(\Maetva\ESeason\WebCampServices\StructType\OrderLine $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\OrderLine) {
            throw new InvalidArgumentException(sprintf('The orderLine property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderLine[] = $item;
        
        return $this;
    }
    /**
     * Get price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return isset($this->price) ? $this->price : null;
    }
    /**
     * Set price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $price
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->price);
        } else {
            $this->price = $price;
        }
        
        return $this;
    }
    /**
     * Get vat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getVat(): ?float
    {
        return isset($this->vat) ? $this->vat : null;
    }
    /**
     * Set vat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $vat
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setVat(?float $vat = null): self
    {
        // validation for constraint: float
        if (!is_null($vat) && !(is_float($vat) || is_numeric($vat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        if (is_null($vat) || (is_array($vat) && empty($vat))) {
            unset($this->vat);
        } else {
            $this->vat = $vat;
        }
        
        return $this;
    }
    /**
     * Get priceWT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPriceWT(): ?float
    {
        return isset($this->priceWT) ? $this->priceWT : null;
    }
    /**
     * Set priceWT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $priceWT
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setPriceWT(?float $priceWT = null): self
    {
        // validation for constraint: float
        if (!is_null($priceWT) && !(is_float($priceWT) || is_numeric($priceWT))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceWT, true), gettype($priceWT)), __LINE__);
        }
        if (is_null($priceWT) || (is_array($priceWT) && empty($priceWT))) {
            unset($this->priceWT);
        } else {
            $this->priceWT = $priceWT;
        }
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setPromoInfo(?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null): self
    {
        $this->promoInfo = $promoInfo;
        
        return $this;
    }
    /**
     * Get basicAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getBasicAmount(): ?float
    {
        return isset($this->basicAmount) ? $this->basicAmount : null;
    }
    /**
     * Set basicAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $basicAmount
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setBasicAmount(?float $basicAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($basicAmount) && !(is_float($basicAmount) || is_numeric($basicAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basicAmount, true), gettype($basicAmount)), __LINE__);
        }
        if (is_null($basicAmount) || (is_array($basicAmount) && empty($basicAmount))) {
            unset($this->basicAmount);
        } else {
            $this->basicAmount = $basicAmount;
        }
        
        return $this;
    }
    /**
     * Get tax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTax(): ?float
    {
        return isset($this->tax) ? $this->tax : null;
    }
    /**
     * Set tax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $tax
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setTax(?float $tax = null): self
    {
        // validation for constraint: float
        if (!is_null($tax) && !(is_float($tax) || is_numeric($tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
        if (is_null($tax) || (is_array($tax) && empty($tax))) {
            unset($this->tax);
        } else {
            $this->tax = $tax;
        }
        
        return $this;
    }
    /**
     * Get selectPlaceEnable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSelectPlaceEnable(): ?bool
    {
        return isset($this->selectPlaceEnable) ? $this->selectPlaceEnable : null;
    }
    /**
     * Set selectPlaceEnable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $selectPlaceEnable
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setSelectPlaceEnable(?bool $selectPlaceEnable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectPlaceEnable) && !is_bool($selectPlaceEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectPlaceEnable, true), gettype($selectPlaceEnable)), __LINE__);
        }
        if (is_null($selectPlaceEnable) || (is_array($selectPlaceEnable) && empty($selectPlaceEnable))) {
            unset($this->selectPlaceEnable);
        } else {
            $this->selectPlaceEnable = $selectPlaceEnable;
        }
        
        return $this;
    }
    /**
     * Get selectPlacePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSelectPlacePrice(): ?float
    {
        return isset($this->selectPlacePrice) ? $this->selectPlacePrice : null;
    }
    /**
     * Set selectPlacePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $selectPlacePrice
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setSelectPlacePrice(?float $selectPlacePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($selectPlacePrice) && !(is_float($selectPlacePrice) || is_numeric($selectPlacePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($selectPlacePrice, true), gettype($selectPlacePrice)), __LINE__);
        }
        if (is_null($selectPlacePrice) || (is_array($selectPlacePrice) && empty($selectPlacePrice))) {
            unset($this->selectPlacePrice);
        } else {
            $this->selectPlacePrice = $selectPlacePrice;
        }
        
        return $this;
    }
    /**
     * Get cancelEnable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCancelEnable(): ?bool
    {
        return isset($this->cancelEnable) ? $this->cancelEnable : null;
    }
    /**
     * Set cancelEnable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cancelEnable
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setCancelEnable(?bool $cancelEnable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelEnable) && !is_bool($cancelEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelEnable, true), gettype($cancelEnable)), __LINE__);
        }
        if (is_null($cancelEnable) || (is_array($cancelEnable) && empty($cancelEnable))) {
            unset($this->cancelEnable);
        } else {
            $this->cancelEnable = $cancelEnable;
        }
        
        return $this;
    }
    /**
     * Get supplementPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    public function getSupplementPrice(): ?array
    {
        return isset($this->supplementPrice) ? $this->supplementPrice : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplementPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplementPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementPriceForArrayConstraintsFromSetSupplementPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgPriceSupplementPriceItem) {
            // validation for constraint: itemType
            if (!$responseCpgPriceSupplementPriceItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($responseCpgPriceSupplementPriceItem) ? get_class($responseCpgPriceSupplementPriceItem) : sprintf('%s(%s)', gettype($responseCpgPriceSupplementPriceItem), var_export($responseCpgPriceSupplementPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplementPrice property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplementPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplementPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setSupplementPrice(?array $supplementPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementPriceArrayErrorMessage = self::validateSupplementPriceForArrayConstraintsFromSetSupplementPrice($supplementPrice))) {
            throw new InvalidArgumentException($supplementPriceArrayErrorMessage, __LINE__);
        }
        if (is_null($supplementPrice) || (is_array($supplementPrice) && empty($supplementPrice))) {
            unset($this->supplementPrice);
        } else {
            $this->supplementPrice = $supplementPrice;
        }
        
        return $this;
    }
    /**
     * Add item to supplementPrice value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function addToSupplementPrice(\Maetva\ESeason\WebCampServices\StructType\Supplement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
            throw new InvalidArgumentException(sprintf('The supplementPrice property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplementPrice[] = $item;
        
        return $this;
    }
    /**
     * Get stock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getStock(): ?int
    {
        return isset($this->stock) ? $this->stock : null;
    }
    /**
     * Set stock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $stock
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setStock(?int $stock = null): self
    {
        // validation for constraint: int
        if (!is_null($stock) && !(is_int($stock) || ctype_digit($stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stock, true), gettype($stock)), __LINE__);
        }
        if (is_null($stock) || (is_array($stock) && empty($stock))) {
            unset($this->stock);
        } else {
            $this->stock = $stock;
        }
        
        return $this;
    }
    /**
     * Get promoCodeValid value
     * @return bool|null
     */
    public function getPromoCodeValid(): ?bool
    {
        return $this->promoCodeValid;
    }
    /**
     * Set promoCodeValid value
     * @param bool $promoCodeValid
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setPromoCodeValid(?bool $promoCodeValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promoCodeValid) && !is_bool($promoCodeValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promoCodeValid, true), gettype($promoCodeValid)), __LINE__);
        }
        $this->promoCodeValid = $promoCodeValid;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
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
     * Get option value
     * @return bool|null
     */
    public function getOption(): ?bool
    {
        return $this->option;
    }
    /**
     * Set option value
     * @param bool $option
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setOption(?bool $option = null): self
    {
        // validation for constraint: boolean
        if (!is_null($option) && !is_bool($option)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($option, true), gettype($option)), __LINE__);
        }
        $this->option = $option;
        
        return $this;
    }
    /**
     * Get displaySelectPlace value
     * @return bool|null
     */
    public function getDisplaySelectPlace(): ?bool
    {
        return $this->displaySelectPlace;
    }
    /**
     * Set displaySelectPlace value
     * @param bool $displaySelectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setDisplaySelectPlace(?bool $displaySelectPlace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displaySelectPlace) && !is_bool($displaySelectPlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displaySelectPlace, true), gettype($displaySelectPlace)), __LINE__);
        }
        $this->displaySelectPlace = $displaySelectPlace;
        
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
        foreach ($values as $responseCpgPriceSpecificParamItem) {
            // validation for constraint: itemType
            if (!$responseCpgPriceSpecificParamItem instanceof \Maetva\ESeason\WebCampServices\StructType\SpecificParam) {
                $invalidValues[] = is_object($responseCpgPriceSpecificParamItem) ? get_class($responseCpgPriceSpecificParamItem) : sprintf('%s(%s)', gettype($responseCpgPriceSpecificParamItem), var_export($responseCpgPriceSpecificParamItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
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
    /**
     * Get fidNights value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFidNights(): ?int
    {
        return isset($this->fidNights) ? $this->fidNights : null;
    }
    /**
     * Set fidNights value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $fidNights
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setFidNights(?int $fidNights = null): self
    {
        // validation for constraint: int
        if (!is_null($fidNights) && !(is_int($fidNights) || ctype_digit($fidNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidNights, true), gettype($fidNights)), __LINE__);
        }
        if (is_null($fidNights) || (is_array($fidNights) && empty($fidNights))) {
            unset($this->fidNights);
        } else {
            $this->fidNights = $fidNights;
        }
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFidStatus(): ?int
    {
        return isset($this->fidStatus) ? $this->fidStatus : null;
    }
    /**
     * Set fidStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $fidStatus
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice
     */
    public function setFidStatus(?int $fidStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($fidStatus) && !(is_int($fidStatus) || ctype_digit($fidStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidStatus, true), gettype($fidStatus)), __LINE__);
        }
        if (is_null($fidStatus) || (is_array($fidStatus) && empty($fidStatus))) {
            unset($this->fidStatus);
        } else {
            $this->fidStatus = $fidStatus;
        }
        
        return $this;
    }
}
