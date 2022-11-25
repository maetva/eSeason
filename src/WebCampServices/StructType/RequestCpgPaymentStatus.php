<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgPaymentStatus StructType
 * @subpackage Structs
 */
class RequestCpgPaymentStatus extends AbstractStructBase
{
    /**
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
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
     * Constructor method for RequestCpgPaymentStatus
     * @uses RequestCpgPaymentStatus::setIdOrder()
     * @uses RequestCpgPaymentStatus::setIdPayment()
     * @uses RequestCpgPaymentStatus::setIdUser()
     * @uses RequestCpgPaymentStatus::setLanguage()
     * @uses RequestCpgPaymentStatus::setPassword()
     * @param string $idOrder
     * @param string $idPayment
     * @param string $idUser
     * @param string $language
     * @param string $password
     */
    public function __construct(?string $idOrder = null, ?string $idPayment = null, ?string $idUser = null, ?string $language = null, ?string $password = null)
    {
        $this
            ->setIdOrder($idOrder)
            ->setIdPayment($idPayment)
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus
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
}
