<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardType StructType
 * @subpackage Structs
 */
class PaymentCardType extends AbstractStructBase
{
    /**
     * The cardCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cardCode = null;
    /**
     * The cardNumber
     * @var string|null
     */
    protected ?string $cardNumber = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The effectiveDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $effectiveDate = null;
    /**
     * The expireDate
     * @var string|null
     */
    protected ?string $expireDate = null;
    /**
     * The maskedCardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maskedCardNumber = null;
    /**
     * The seriesCode
     * @var string|null
     */
    protected ?string $seriesCode = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authorization = null;
    /**
     * The certification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $certification = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transaction = null;
    /**
     * The integration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $integration = null;
    /**
     * The dueDates
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\DueDatePayment[]
     */
    protected ?array $dueDates = null;
    /**
     * The addInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $addInfo = null;
    /**
     * The xNoFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $xNoFees = null;
    /**
     * Constructor method for PaymentCardType
     * @uses PaymentCardType::setCardCode()
     * @uses PaymentCardType::setCardNumber()
     * @uses PaymentCardType::setCardType()
     * @uses PaymentCardType::setEffectiveDate()
     * @uses PaymentCardType::setExpireDate()
     * @uses PaymentCardType::setMaskedCardNumber()
     * @uses PaymentCardType::setSeriesCode()
     * @uses PaymentCardType::setAuthorization()
     * @uses PaymentCardType::setCertification()
     * @uses PaymentCardType::setTransaction()
     * @uses PaymentCardType::setIntegration()
     * @uses PaymentCardType::setDueDates()
     * @uses PaymentCardType::setAddInfo()
     * @uses PaymentCardType::setXNoFees()
     * @param string $cardCode
     * @param string $cardNumber
     * @param string $cardType
     * @param string $effectiveDate
     * @param string $expireDate
     * @param string $maskedCardNumber
     * @param string $seriesCode
     * @param string $authorization
     * @param string $certification
     * @param string $transaction
     * @param string $integration
     * @param \Maetva\ESeason\WebCampServices\StructType\DueDatePayment[] $dueDates
     * @param string $addInfo
     * @param bool $xNoFees
     */
    public function __construct(?string $cardCode = null, ?string $cardNumber = null, ?string $cardType = null, ?string $effectiveDate = null, ?string $expireDate = null, ?string $maskedCardNumber = null, ?string $seriesCode = null, ?string $authorization = null, ?string $certification = null, ?string $transaction = null, ?string $integration = null, ?array $dueDates = null, ?string $addInfo = null, ?bool $xNoFees = null)
    {
        $this
            ->setCardCode($cardCode)
            ->setCardNumber($cardNumber)
            ->setCardType($cardType)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setMaskedCardNumber($maskedCardNumber)
            ->setSeriesCode($seriesCode)
            ->setAuthorization($authorization)
            ->setCertification($certification)
            ->setTransaction($transaction)
            ->setIntegration($integration)
            ->setDueDates($dueDates)
            ->setAddInfo($addInfo)
            ->setXNoFees($xNoFees);
    }
    /**
     * Get cardCode value
     * @return string|null
     */
    public function getCardCode(): ?string
    {
        return $this->cardCode;
    }
    /**
     * Set cardCode value
     * @param string $cardCode
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setCardCode(?string $cardCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCode) && !is_string($cardCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCode, true), gettype($cardCode)), __LINE__);
        }
        $this->cardCode = $cardCode;
        
        return $this;
    }
    /**
     * Get cardNumber value
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }
    /**
     * Set cardNumber value
     * @param string $cardNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setCardNumber(?string $cardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->cardNumber = $cardNumber;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cardType
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\OtaCardType::valueIsValid($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\OtaCardType', is_array($cardType) ? implode(', ', $cardType) : var_export($cardType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\OtaCardType::getValidValues())), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get effectiveDate value
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }
    /**
     * Set effectiveDate value
     * @param string $effectiveDate
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->effectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get expireDate value
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }
    /**
     * Set expireDate value
     * @param string $expireDate
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
        $this->expireDate = $expireDate;
        
        return $this;
    }
    /**
     * Get maskedCardNumber value
     * @return string|null
     */
    public function getMaskedCardNumber(): ?string
    {
        return $this->maskedCardNumber;
    }
    /**
     * Set maskedCardNumber value
     * @param string $maskedCardNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setMaskedCardNumber(?string $maskedCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($maskedCardNumber) && !is_string($maskedCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maskedCardNumber, true), gettype($maskedCardNumber)), __LINE__);
        }
        $this->maskedCardNumber = $maskedCardNumber;
        
        return $this;
    }
    /**
     * Get seriesCode value
     * @return string|null
     */
    public function getSeriesCode(): ?string
    {
        return $this->seriesCode;
    }
    /**
     * Set seriesCode value
     * @param string $seriesCode
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setSeriesCode(?string $seriesCode = null): self
    {
        // validation for constraint: string
        if (!is_null($seriesCode) && !is_string($seriesCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seriesCode, true), gettype($seriesCode)), __LINE__);
        }
        $this->seriesCode = $seriesCode;
        
        return $this;
    }
    /**
     * Get authorization value
     * @return string|null
     */
    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }
    /**
     * Set authorization value
     * @param string $authorization
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setAuthorization(?string $authorization = null): self
    {
        // validation for constraint: string
        if (!is_null($authorization) && !is_string($authorization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorization, true), gettype($authorization)), __LINE__);
        }
        $this->authorization = $authorization;
        
        return $this;
    }
    /**
     * Get certification value
     * @return string|null
     */
    public function getCertification(): ?string
    {
        return $this->certification;
    }
    /**
     * Set certification value
     * @param string $certification
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setCertification(?string $certification = null): self
    {
        // validation for constraint: string
        if (!is_null($certification) && !is_string($certification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certification, true), gettype($certification)), __LINE__);
        }
        $this->certification = $certification;
        
        return $this;
    }
    /**
     * Get transaction value
     * @return string|null
     */
    public function getTransaction(): ?string
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param string $transaction
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setTransaction(?string $transaction = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction) && !is_string($transaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction, true), gettype($transaction)), __LINE__);
        }
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get integration value
     * @return string|null
     */
    public function getIntegration(): ?string
    {
        return $this->integration;
    }
    /**
     * Set integration value
     * @param string $integration
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setIntegration(?string $integration = null): self
    {
        // validation for constraint: string
        if (!is_null($integration) && !is_string($integration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($integration, true), gettype($integration)), __LINE__);
        }
        $this->integration = $integration;
        
        return $this;
    }
    /**
     * Get dueDates value
     * @return \Maetva\ESeason\WebCampServices\StructType\DueDatePayment[]
     */
    public function getDueDates(): ?array
    {
        return $this->dueDates;
    }
    /**
     * This method is responsible for validating the values passed to the setDueDates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDueDates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDueDatesForArrayConstraintsFromSetDueDates(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentCardTypeDueDatesItem) {
            // validation for constraint: itemType
            if (!$paymentCardTypeDueDatesItem instanceof \Maetva\ESeason\WebCampServices\StructType\DueDatePayment) {
                $invalidValues[] = is_object($paymentCardTypeDueDatesItem) ? get_class($paymentCardTypeDueDatesItem) : sprintf('%s(%s)', gettype($paymentCardTypeDueDatesItem), var_export($paymentCardTypeDueDatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dueDates property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\DueDatePayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dueDates value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\DueDatePayment[] $dueDates
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setDueDates(?array $dueDates = null): self
    {
        // validation for constraint: array
        if ('' !== ($dueDatesArrayErrorMessage = self::validateDueDatesForArrayConstraintsFromSetDueDates($dueDates))) {
            throw new InvalidArgumentException($dueDatesArrayErrorMessage, __LINE__);
        }
        $this->dueDates = $dueDates;
        
        return $this;
    }
    /**
     * Add item to dueDates value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\DueDatePayment $item
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function addToDueDates(\Maetva\ESeason\WebCampServices\StructType\DueDatePayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\DueDatePayment) {
            throw new InvalidArgumentException(sprintf('The dueDates property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\DueDatePayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dueDates[] = $item;
        
        return $this;
    }
    /**
     * Get addInfo value
     * @return string|null
     */
    public function getAddInfo(): ?string
    {
        return $this->addInfo;
    }
    /**
     * Set addInfo value
     * @param string $addInfo
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setAddInfo(?string $addInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($addInfo) && !is_string($addInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addInfo, true), gettype($addInfo)), __LINE__);
        }
        $this->addInfo = $addInfo;
        
        return $this;
    }
    /**
     * Get xNoFees value
     * @return bool|null
     */
    public function getXNoFees(): ?bool
    {
        return $this->xNoFees;
    }
    /**
     * Set xNoFees value
     * @param bool $xNoFees
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType
     */
    public function setXNoFees(?bool $xNoFees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($xNoFees) && !is_bool($xNoFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($xNoFees, true), gettype($xNoFees)), __LINE__);
        }
        $this->xNoFees = $xNoFees;
        
        return $this;
    }
}
