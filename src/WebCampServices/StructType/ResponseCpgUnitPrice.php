<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgUnitPrice StructType
 * @subpackage Structs
 */
class ResponseCpgUnitPrice extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The basicAmount
     * @var float|null
     */
    protected ?float $basicAmount = null;
    /**
     * The promo
     * @var float|null
     */
    protected ?float $promo = null;
    /**
     * The deposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The cancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $cancelInsurance = null;
    /**
     * The cancelEnable
     * @var bool|null
     */
    protected ?bool $cancelEnable = null;
    /**
     * The expenseReservation
     * @var float|null
     */
    protected ?float $expenseReservation = null;
    /**
     * The supplementUnitPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    protected ?array $supplementUnitPrice = null;
    /**
     * The supplementIncluded
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded[]
     */
    protected ?array $supplementIncluded = null;
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
     * Constructor method for ResponseCpgUnitPrice
     * @uses ResponseCpgUnitPrice::setIdUser()
     * @uses ResponseCpgUnitPrice::setBasicAmount()
     * @uses ResponseCpgUnitPrice::setPromo()
     * @uses ResponseCpgUnitPrice::setDeposit()
     * @uses ResponseCpgUnitPrice::setCancelInsurance()
     * @uses ResponseCpgUnitPrice::setCancelEnable()
     * @uses ResponseCpgUnitPrice::setExpenseReservation()
     * @uses ResponseCpgUnitPrice::setSupplementUnitPrice()
     * @uses ResponseCpgUnitPrice::setSupplementIncluded()
     * @uses ResponseCpgUnitPrice::setSelectPlaceEnable()
     * @uses ResponseCpgUnitPrice::setSelectPlacePrice()
     * @uses ResponseCpgUnitPrice::setError()
     * @uses ResponseCpgUnitPrice::setMessError()
     * @param string $idUser
     * @param float $basicAmount
     * @param float $promo
     * @param float $deposit
     * @param float $cancelInsurance
     * @param bool $cancelEnable
     * @param float $expenseReservation
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplementUnitPrice
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded[] $supplementIncluded
     * @param bool $selectPlaceEnable
     * @param float $selectPlacePrice
     * @param string $error
     * @param string $messError
     */
    public function __construct(?string $idUser = null, ?float $basicAmount = null, ?float $promo = null, ?float $deposit = null, ?float $cancelInsurance = null, ?bool $cancelEnable = null, ?float $expenseReservation = null, ?array $supplementUnitPrice = null, ?array $supplementIncluded = null, ?bool $selectPlaceEnable = null, ?float $selectPlacePrice = null, ?string $error = null, ?string $messError = null)
    {
        $this
            ->setIdUser($idUser)
            ->setBasicAmount($basicAmount)
            ->setPromo($promo)
            ->setDeposit($deposit)
            ->setCancelInsurance($cancelInsurance)
            ->setCancelEnable($cancelEnable)
            ->setExpenseReservation($expenseReservation)
            ->setSupplementUnitPrice($supplementUnitPrice)
            ->setSupplementIncluded($supplementIncluded)
            ->setSelectPlaceEnable($selectPlaceEnable)
            ->setSelectPlacePrice($selectPlacePrice)
            ->setError($error)
            ->setMessError($messError);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * Get basicAmount value
     * @return float|null
     */
    public function getBasicAmount(): ?float
    {
        return $this->basicAmount;
    }
    /**
     * Set basicAmount value
     * @param float $basicAmount
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function setBasicAmount(?float $basicAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($basicAmount) && !(is_float($basicAmount) || is_numeric($basicAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basicAmount, true), gettype($basicAmount)), __LINE__);
        }
        $this->basicAmount = $basicAmount;
        
        return $this;
    }
    /**
     * Get promo value
     * @return float|null
     */
    public function getPromo(): ?float
    {
        return $this->promo;
    }
    /**
     * Set promo value
     * @param float $promo
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function setPromo(?float $promo = null): self
    {
        // validation for constraint: float
        if (!is_null($promo) && !(is_float($promo) || is_numeric($promo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($promo, true), gettype($promo)), __LINE__);
        }
        $this->promo = $promo;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * Get expenseReservation value
     * @return float|null
     */
    public function getExpenseReservation(): ?float
    {
        return $this->expenseReservation;
    }
    /**
     * Set expenseReservation value
     * @param float $expenseReservation
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function setExpenseReservation(?float $expenseReservation = null): self
    {
        // validation for constraint: float
        if (!is_null($expenseReservation) && !(is_float($expenseReservation) || is_numeric($expenseReservation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expenseReservation, true), gettype($expenseReservation)), __LINE__);
        }
        $this->expenseReservation = $expenseReservation;
        
        return $this;
    }
    /**
     * Get supplementUnitPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    public function getSupplementUnitPrice(): ?array
    {
        return isset($this->supplementUnitPrice) ? $this->supplementUnitPrice : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplementUnitPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplementUnitPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementUnitPriceForArrayConstraintsFromSetSupplementUnitPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgUnitPriceSupplementUnitPriceItem) {
            // validation for constraint: itemType
            if (!$responseCpgUnitPriceSupplementUnitPriceItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($responseCpgUnitPriceSupplementUnitPriceItem) ? get_class($responseCpgUnitPriceSupplementUnitPriceItem) : sprintf('%s(%s)', gettype($responseCpgUnitPriceSupplementUnitPriceItem), var_export($responseCpgUnitPriceSupplementUnitPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplementUnitPrice property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplementUnitPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplementUnitPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function setSupplementUnitPrice(?array $supplementUnitPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementUnitPriceArrayErrorMessage = self::validateSupplementUnitPriceForArrayConstraintsFromSetSupplementUnitPrice($supplementUnitPrice))) {
            throw new InvalidArgumentException($supplementUnitPriceArrayErrorMessage, __LINE__);
        }
        if (is_null($supplementUnitPrice) || (is_array($supplementUnitPrice) && empty($supplementUnitPrice))) {
            unset($this->supplementUnitPrice);
        } else {
            $this->supplementUnitPrice = $supplementUnitPrice;
        }
        
        return $this;
    }
    /**
     * Add item to supplementUnitPrice value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function addToSupplementUnitPrice(\Maetva\ESeason\WebCampServices\StructType\Supplement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
            throw new InvalidArgumentException(sprintf('The supplementUnitPrice property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplementUnitPrice[] = $item;
        
        return $this;
    }
    /**
     * Get supplementIncluded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded[]
     */
    public function getSupplementIncluded(): ?array
    {
        return isset($this->supplementIncluded) ? $this->supplementIncluded : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplementIncluded method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplementIncluded method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementIncludedForArrayConstraintsFromSetSupplementIncluded(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgUnitPriceSupplementIncludedItem) {
            // validation for constraint: itemType
            if (!$responseCpgUnitPriceSupplementIncludedItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded) {
                $invalidValues[] = is_object($responseCpgUnitPriceSupplementIncludedItem) ? get_class($responseCpgUnitPriceSupplementIncludedItem) : sprintf('%s(%s)', gettype($responseCpgUnitPriceSupplementIncludedItem), var_export($responseCpgUnitPriceSupplementIncludedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplementIncluded property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplementIncluded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded[] $supplementIncluded
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function setSupplementIncluded(?array $supplementIncluded = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementIncludedArrayErrorMessage = self::validateSupplementIncludedForArrayConstraintsFromSetSupplementIncluded($supplementIncluded))) {
            throw new InvalidArgumentException($supplementIncludedArrayErrorMessage, __LINE__);
        }
        if (is_null($supplementIncluded) || (is_array($supplementIncluded) && empty($supplementIncluded))) {
            unset($this->supplementIncluded);
        } else {
            $this->supplementIncluded = $supplementIncluded;
        }
        
        return $this;
    }
    /**
     * Add item to supplementIncluded value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function addToSupplementIncluded(\Maetva\ESeason\WebCampServices\StructType\SupplementIncluded $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded) {
            throw new InvalidArgumentException(sprintf('The supplementIncluded property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplementIncluded[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
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
}
