<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgChangeOrderPrice StructType
 * @subpackage Structs
 */
class ResponseCpgChangeOrderPrice extends AbstractStructBase
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
     * The changeAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $changeAmount = null;
    /**
     * The payAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $payAmount = null;
    /**
     * Constructor method for ResponseCpgChangeOrderPrice
     * @uses ResponseCpgChangeOrderPrice::setCancelInsurance()
     * @uses ResponseCpgChangeOrderPrice::setError()
     * @uses ResponseCpgChangeOrderPrice::setMessError()
     * @uses ResponseCpgChangeOrderPrice::setExpenseReservation()
     * @uses ResponseCpgChangeOrderPrice::setIdUser()
     * @uses ResponseCpgChangeOrderPrice::setOrderLine()
     * @uses ResponseCpgChangeOrderPrice::setPrice()
     * @uses ResponseCpgChangeOrderPrice::setPromoInfo()
     * @uses ResponseCpgChangeOrderPrice::setBasicAmount()
     * @uses ResponseCpgChangeOrderPrice::setTax()
     * @uses ResponseCpgChangeOrderPrice::setCancelEnable()
     * @uses ResponseCpgChangeOrderPrice::setSupplementPrice()
     * @uses ResponseCpgChangeOrderPrice::setChangeAmount()
     * @uses ResponseCpgChangeOrderPrice::setPayAmount()
     * @param float $cancelInsurance
     * @param string $error
     * @param string $messError
     * @param float $expenseReservation
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\OrderLine[] $orderLine
     * @param float $price
     * @param \Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo
     * @param float $basicAmount
     * @param float $tax
     * @param bool $cancelEnable
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplementPrice
     * @param float $changeAmount
     * @param float $payAmount
     */
    public function __construct(?float $cancelInsurance = null, ?string $error = null, ?string $messError = null, ?float $expenseReservation = null, ?string $idUser = null, ?array $orderLine = null, ?float $price = null, ?\Maetva\ESeason\WebCampServices\StructType\PromoInfo $promoInfo = null, ?float $basicAmount = null, ?float $tax = null, ?bool $cancelEnable = null, ?array $supplementPrice = null, ?float $changeAmount = null, ?float $payAmount = null)
    {
        $this
            ->setCancelInsurance($cancelInsurance)
            ->setError($error)
            ->setMessError($messError)
            ->setExpenseReservation($expenseReservation)
            ->setIdUser($idUser)
            ->setOrderLine($orderLine)
            ->setPrice($price)
            ->setPromoInfo($promoInfo)
            ->setBasicAmount($basicAmount)
            ->setTax($tax)
            ->setCancelEnable($cancelEnable)
            ->setSupplementPrice($supplementPrice)
            ->setChangeAmount($changeAmount)
            ->setPayAmount($payAmount);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
        foreach ($values as $responseCpgChangeOrderPriceOrderLineItem) {
            // validation for constraint: itemType
            if (!$responseCpgChangeOrderPriceOrderLineItem instanceof \Maetva\ESeason\WebCampServices\StructType\OrderLine) {
                $invalidValues[] = is_object($responseCpgChangeOrderPriceOrderLineItem) ? get_class($responseCpgChangeOrderPriceOrderLineItem) : sprintf('%s(%s)', gettype($responseCpgChangeOrderPriceOrderLineItem), var_export($responseCpgChangeOrderPriceOrderLineItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
        foreach ($values as $responseCpgChangeOrderPriceSupplementPriceItem) {
            // validation for constraint: itemType
            if (!$responseCpgChangeOrderPriceSupplementPriceItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($responseCpgChangeOrderPriceSupplementPriceItem) ? get_class($responseCpgChangeOrderPriceSupplementPriceItem) : sprintf('%s(%s)', gettype($responseCpgChangeOrderPriceSupplementPriceItem), var_export($responseCpgChangeOrderPriceSupplementPriceItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
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
     * Get changeAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getChangeAmount(): ?float
    {
        return isset($this->changeAmount) ? $this->changeAmount : null;
    }
    /**
     * Set changeAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $changeAmount
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
     */
    public function setChangeAmount(?float $changeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($changeAmount) && !(is_float($changeAmount) || is_numeric($changeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($changeAmount, true), gettype($changeAmount)), __LINE__);
        }
        if (is_null($changeAmount) || (is_array($changeAmount) && empty($changeAmount))) {
            unset($this->changeAmount);
        } else {
            $this->changeAmount = $changeAmount;
        }
        
        return $this;
    }
    /**
     * Get payAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPayAmount(): ?float
    {
        return isset($this->payAmount) ? $this->payAmount : null;
    }
    /**
     * Set payAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $payAmount
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice
     */
    public function setPayAmount(?float $payAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payAmount) && !(is_float($payAmount) || is_numeric($payAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payAmount, true), gettype($payAmount)), __LINE__);
        }
        if (is_null($payAmount) || (is_array($payAmount) && empty($payAmount))) {
            unset($this->payAmount);
        } else {
            $this->payAmount = $payAmount;
        }
        
        return $this;
    }
}
