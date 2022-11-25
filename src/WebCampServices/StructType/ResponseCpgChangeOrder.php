<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgChangeOrder StructType
 * @subpackage Structs
 */
class ResponseCpgChangeOrder extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
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
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The revision
     * @var int|null
     */
    protected ?int $revision = null;
    /**
     * The idPayment
     * @var string|null
     */
    protected ?string $idPayment = null;
    /**
     * Constructor method for ResponseCpgChangeOrder
     * @uses ResponseCpgChangeOrder::setIdUser()
     * @uses ResponseCpgChangeOrder::setError()
     * @uses ResponseCpgChangeOrder::setMessError()
     * @uses ResponseCpgChangeOrder::setIdOrder()
     * @uses ResponseCpgChangeOrder::setRevision()
     * @uses ResponseCpgChangeOrder::setIdPayment()
     * @param string $idUser
     * @param string $error
     * @param string $messError
     * @param string $idOrder
     * @param int $revision
     * @param string $idPayment
     */
    public function __construct(?string $idUser = null, ?string $error = null, ?string $messError = null, ?string $idOrder = null, ?int $revision = null, ?string $idPayment = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setIdOrder($idOrder)
            ->setRevision($revision)
            ->setIdPayment($idPayment);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
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
     * Get revision value
     * @return int|null
     */
    public function getRevision(): ?int
    {
        return $this->revision;
    }
    /**
     * Set revision value
     * @param int $revision
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
     */
    public function setRevision(?int $revision = null): self
    {
        // validation for constraint: int
        if (!is_null($revision) && !(is_int($revision) || ctype_digit($revision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revision, true), gettype($revision)), __LINE__);
        }
        $this->revision = $revision;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder
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
}
