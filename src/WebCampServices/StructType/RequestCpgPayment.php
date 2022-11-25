<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgPayment StructType
 * @subpackage Structs
 */
class RequestCpgPayment extends AbstractStructBase
{
    /**
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The idPaymentType
     * @var \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The payment
     * @var \Maetva\ESeason\WebCampServices\StructType\PaymentFormType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The fidelityCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidelityCard = null;
    /**
     * The fidelityUse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidelityUse = null;
    /**
     * Constructor method for RequestCpgPayment
     * @uses RequestCpgPayment::setIdOrder()
     * @uses RequestCpgPayment::setIdPaymentType()
     * @uses RequestCpgPayment::setIdUser()
     * @uses RequestCpgPayment::setLanguage()
     * @uses RequestCpgPayment::setPassword()
     * @uses RequestCpgPayment::setPayment()
     * @uses RequestCpgPayment::setPaymentType()
     * @uses RequestCpgPayment::setValue()
     * @uses RequestCpgPayment::setFidelityCard()
     * @uses RequestCpgPayment::setFidelityUse()
     * @param string $idOrder
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @param string $idUser
     * @param string $language
     * @param string $password
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @param string $paymentType
     * @param float $value
     * @param string $fidelityCard
     * @param string $fidelityUse
     */
    public function __construct(?string $idOrder = null, ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null, ?string $idUser = null, ?string $language = null, ?string $password = null, ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null, ?string $paymentType = null, ?float $value = null, ?string $fidelityCard = null, ?string $fidelityUse = null)
    {
        $this
            ->setIdOrder($idOrder)
            ->setIdPaymentType($idPaymentType)
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password)
            ->setPayment($payment)
            ->setPaymentType($paymentType)
            ->setValue($value)
            ->setFidelityCard($fidelityCard)
            ->setFidelityUse($fidelityUse);
    }
    /**
     * Get idOrder value
     * @return string|null
     */
    public function getIdOrder(): ?string
    {
        return $this->idOrder;
    }
    /**
     * Set idOrder value
     * @param string $idOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setIdOrder(?string $idOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($idOrder) && !is_string($idOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOrder, true), gettype($idOrder)), __LINE__);
        }
        $this->idOrder = $idOrder;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setIdPaymentType(?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null): self
    {
        $this->idPaymentType = $idPaymentType;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
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
     * Get payment value
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType|null
     */
    public function getPayment(): ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setPayment(?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PaymentTypeOrder::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PaymentTypeOrder::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\PaymentTypeOrder::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\PaymentTypeOrder', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\PaymentTypeOrder::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get fidelityCard value
     * @return string|null
     */
    public function getFidelityCard(): ?string
    {
        return $this->fidelityCard;
    }
    /**
     * Set fidelityCard value
     * @param string $fidelityCard
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setFidelityCard(?string $fidelityCard = null): self
    {
        // validation for constraint: string
        if (!is_null($fidelityCard) && !is_string($fidelityCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidelityCard, true), gettype($fidelityCard)), __LINE__);
        }
        $this->fidelityCard = $fidelityCard;
        
        return $this;
    }
    /**
     * Get fidelityUse value
     * @return string|null
     */
    public function getFidelityUse(): ?string
    {
        return $this->fidelityUse;
    }
    /**
     * Set fidelityUse value
     * @param string $fidelityUse
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment
     */
    public function setFidelityUse(?string $fidelityUse = null): self
    {
        // validation for constraint: string
        if (!is_null($fidelityUse) && !is_string($fidelityUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidelityUse, true), gettype($fidelityUse)), __LINE__);
        }
        $this->fidelityUse = $fidelityUse;
        
        return $this;
    }
}
