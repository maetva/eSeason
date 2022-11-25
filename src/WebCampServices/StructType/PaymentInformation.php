<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformation StructType
 * @subpackage Structs
 */
class PaymentInformation extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The idPaymentType
     * @var \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null;
    /**
     * The otaCardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $otaCardType = null;
    /**
     * The otaPaymentType
     * @var string|null
     */
    protected ?string $otaPaymentType = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The disabledBeforeArrival
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $disabledBeforeArrival = null;
    /**
     * The forBalance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $forBalance = null;
    /**
     * The forDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $forDeposit = null;
    /**
     * The provider
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $provider = null;
    /**
     * The limitedCountries
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $limitedCountries = null;
    /**
     * Constructor method for PaymentInformation
     * @uses PaymentInformation::setName()
     * @uses PaymentInformation::setIdPaymentType()
     * @uses PaymentInformation::setOtaCardType()
     * @uses PaymentInformation::setOtaPaymentType()
     * @uses PaymentInformation::setComment()
     * @uses PaymentInformation::setDisabledBeforeArrival()
     * @uses PaymentInformation::setForBalance()
     * @uses PaymentInformation::setForDeposit()
     * @uses PaymentInformation::setProvider()
     * @uses PaymentInformation::setLimitedCountries()
     * @param string $name
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @param string $otaCardType
     * @param string $otaPaymentType
     * @param string $comment
     * @param int $disabledBeforeArrival
     * @param bool $forBalance
     * @param bool $forDeposit
     * @param string $provider
     * @param string[] $limitedCountries
     */
    public function __construct(?string $name = null, ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null, ?string $otaCardType = null, ?string $otaPaymentType = null, ?string $comment = null, ?int $disabledBeforeArrival = null, ?bool $forBalance = null, ?bool $forDeposit = null, ?string $provider = null, ?array $limitedCountries = null)
    {
        $this
            ->setName($name)
            ->setIdPaymentType($idPaymentType)
            ->setOtaCardType($otaCardType)
            ->setOtaPaymentType($otaPaymentType)
            ->setComment($comment)
            ->setDisabledBeforeArrival($disabledBeforeArrival)
            ->setForBalance($forBalance)
            ->setForDeposit($forDeposit)
            ->setProvider($provider)
            ->setLimitedCountries($limitedCountries);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get idPaymentType value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    public function getIdPaymentType(): ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType
    {
        return $this->idPaymentType;
    }
    /**
     * Set idPaymentType value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setIdPaymentType(?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null): self
    {
        $this->idPaymentType = $idPaymentType;
        
        return $this;
    }
    /**
     * Get otaCardType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtaCardType(): ?string
    {
        return isset($this->otaCardType) ? $this->otaCardType : null;
    }
    /**
     * Set otaCardType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $otaCardType
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setOtaCardType(?string $otaCardType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\OtaCardType::valueIsValid($otaCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\OtaCardType', is_array($otaCardType) ? implode(', ', $otaCardType) : var_export($otaCardType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::getValidValues())), __LINE__);
        }
        if (is_null($otaCardType) || (is_array($otaCardType) && empty($otaCardType))) {
            unset($this->otaCardType);
        } else {
            $this->otaCardType = $otaCardType;
        }
        
        return $this;
    }
    /**
     * Get otaPaymentType value
     * @return string|null
     */
    public function getOtaPaymentType(): ?string
    {
        return $this->otaPaymentType;
    }
    /**
     * Set otaPaymentType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaPaymentType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $otaPaymentType
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setOtaPaymentType(?string $otaPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\OtaPaymentType::valueIsValid($otaPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\OtaPaymentType', is_array($otaPaymentType) ? implode(', ', $otaPaymentType) : var_export($otaPaymentType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\OtaPaymentType::getValidValues())), __LINE__);
        }
        $this->otaPaymentType = $otaPaymentType;
        
        return $this;
    }
    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->comment) ? $this->comment : null;
    }
    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get disabledBeforeArrival value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDisabledBeforeArrival(): ?int
    {
        return isset($this->disabledBeforeArrival) ? $this->disabledBeforeArrival : null;
    }
    /**
     * Set disabledBeforeArrival value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $disabledBeforeArrival
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setDisabledBeforeArrival(?int $disabledBeforeArrival = null): self
    {
        // validation for constraint: int
        if (!is_null($disabledBeforeArrival) && !(is_int($disabledBeforeArrival) || ctype_digit($disabledBeforeArrival))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($disabledBeforeArrival, true), gettype($disabledBeforeArrival)), __LINE__);
        }
        if (is_null($disabledBeforeArrival) || (is_array($disabledBeforeArrival) && empty($disabledBeforeArrival))) {
            unset($this->disabledBeforeArrival);
        } else {
            $this->disabledBeforeArrival = $disabledBeforeArrival;
        }
        
        return $this;
    }
    /**
     * Get forBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getForBalance(): ?bool
    {
        return isset($this->forBalance) ? $this->forBalance : null;
    }
    /**
     * Set forBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $forBalance
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setForBalance(?bool $forBalance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forBalance) && !is_bool($forBalance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forBalance, true), gettype($forBalance)), __LINE__);
        }
        if (is_null($forBalance) || (is_array($forBalance) && empty($forBalance))) {
            unset($this->forBalance);
        } else {
            $this->forBalance = $forBalance;
        }
        
        return $this;
    }
    /**
     * Get forDeposit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getForDeposit(): ?bool
    {
        return isset($this->forDeposit) ? $this->forDeposit : null;
    }
    /**
     * Set forDeposit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $forDeposit
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setForDeposit(?bool $forDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDeposit) && !is_bool($forDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDeposit, true), gettype($forDeposit)), __LINE__);
        }
        if (is_null($forDeposit) || (is_array($forDeposit) && empty($forDeposit))) {
            unset($this->forDeposit);
        } else {
            $this->forDeposit = $forDeposit;
        }
        
        return $this;
    }
    /**
     * Get provider value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return isset($this->provider) ? $this->provider : null;
    }
    /**
     * Set provider value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $provider
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setProvider(?string $provider = null): self
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provider, true), gettype($provider)), __LINE__);
        }
        if (is_null($provider) || (is_array($provider) && empty($provider))) {
            unset($this->provider);
        } else {
            $this->provider = $provider;
        }
        
        return $this;
    }
    /**
     * Get limitedCountries value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getLimitedCountries(): ?array
    {
        return isset($this->limitedCountries) ? $this->limitedCountries : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLimitedCountries method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLimitedCountries method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLimitedCountriesForArrayConstraintsFromSetLimitedCountries(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentInformationLimitedCountriesItem) {
            // validation for constraint: itemType
            if (!is_string($paymentInformationLimitedCountriesItem)) {
                $invalidValues[] = is_object($paymentInformationLimitedCountriesItem) ? get_class($paymentInformationLimitedCountriesItem) : sprintf('%s(%s)', gettype($paymentInformationLimitedCountriesItem), var_export($paymentInformationLimitedCountriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The limitedCountries property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set limitedCountries value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $limitedCountries
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function setLimitedCountries(?array $limitedCountries = null): self
    {
        // validation for constraint: array
        if ('' !== ($limitedCountriesArrayErrorMessage = self::validateLimitedCountriesForArrayConstraintsFromSetLimitedCountries($limitedCountries))) {
            throw new InvalidArgumentException($limitedCountriesArrayErrorMessage, __LINE__);
        }
        if (is_null($limitedCountries) || (is_array($limitedCountries) && empty($limitedCountries))) {
            unset($this->limitedCountries);
        } else {
            $this->limitedCountries = $limitedCountries;
        }
        
        return $this;
    }
    /**
     * Add item to limitedCountries value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentInformation
     */
    public function addToLimitedCountries(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The limitedCountries property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->limitedCountries[] = $item;
        
        return $this;
    }
}
