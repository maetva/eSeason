<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgPayment StructType
 * @subpackage Structs
 */
class ResponseCpgPayment extends AbstractStructBase
{
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
     * The idPayment
     * @var string|null
     */
    protected ?string $idPayment = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The paymentValue
     * @var float|null
     */
    protected ?float $paymentValue = null;
    /**
     * Constructor method for ResponseCpgPayment
     * @uses ResponseCpgPayment::setError()
     * @uses ResponseCpgPayment::setMessError()
     * @uses ResponseCpgPayment::setIdPayment()
     * @uses ResponseCpgPayment::setIdUser()
     * @uses ResponseCpgPayment::setPaymentValue()
     * @param string $error
     * @param string $messError
     * @param string $idPayment
     * @param string $idUser
     * @param float $paymentValue
     */
    public function __construct(?string $error = null, ?string $messError = null, ?string $idPayment = null, ?string $idUser = null, ?float $paymentValue = null)
    {
        $this
            ->setError($error)
            ->setMessError($messError)
            ->setIdPayment($idPayment)
            ->setIdUser($idUser)
            ->setPaymentValue($paymentValue);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment
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
     * Get idPayment value
     * @return string|null
     */
    public function getIdPayment(): ?string
    {
        return $this->idPayment;
    }
    /**
     * Set idPayment value
     * @param string $idPayment
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment
     */
    public function setIdPayment(?string $idPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($idPayment) && !is_string($idPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idPayment, true), gettype($idPayment)), __LINE__);
        }
        $this->idPayment = $idPayment;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment
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
     * Get paymentValue value
     * @return float|null
     */
    public function getPaymentValue(): ?float
    {
        return $this->paymentValue;
    }
    /**
     * Set paymentValue value
     * @param float $paymentValue
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment
     */
    public function setPaymentValue(?float $paymentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($paymentValue) && !(is_float($paymentValue) || is_numeric($paymentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paymentValue, true), gettype($paymentValue)), __LINE__);
        }
        $this->paymentValue = $paymentValue;
        
        return $this;
    }
}
