<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgOrderStatus StructType
 * @subpackage Structs
 */
class RequestCpgOrderStatus extends AbstractStructBase
{
    /**
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
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
     * The withPendingChange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $withPendingChange = null;
    /**
     * The allFriends
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $allFriends = null;
    /**
     * Constructor method for RequestCpgOrderStatus
     * @uses RequestCpgOrderStatus::setIdOrder()
     * @uses RequestCpgOrderStatus::setIdUser()
     * @uses RequestCpgOrderStatus::setLanguage()
     * @uses RequestCpgOrderStatus::setPassword()
     * @uses RequestCpgOrderStatus::setWithPendingChange()
     * @uses RequestCpgOrderStatus::setAllFriends()
     * @param string $idOrder
     * @param string $idUser
     * @param string $language
     * @param string $password
     * @param bool $withPendingChange
     * @param bool $allFriends
     */
    public function __construct(?string $idOrder = null, ?string $idUser = null, ?string $language = null, ?string $password = null, ?bool $withPendingChange = null, ?bool $allFriends = null)
    {
        $this
            ->setIdOrder($idOrder)
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password)
            ->setWithPendingChange($withPendingChange)
            ->setAllFriends($allFriends);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
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
     * Get withPendingChange value
     * @return bool|null
     */
    public function getWithPendingChange(): ?bool
    {
        return $this->withPendingChange;
    }
    /**
     * Set withPendingChange value
     * @param bool $withPendingChange
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
     */
    public function setWithPendingChange(?bool $withPendingChange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withPendingChange) && !is_bool($withPendingChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withPendingChange, true), gettype($withPendingChange)), __LINE__);
        }
        $this->withPendingChange = $withPendingChange;
        
        return $this;
    }
    /**
     * Get allFriends value
     * @return bool|null
     */
    public function getAllFriends(): ?bool
    {
        return $this->allFriends;
    }
    /**
     * Set allFriends value
     * @param bool $allFriends
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus
     */
    public function setAllFriends(?bool $allFriends = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allFriends) && !is_bool($allFriends)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allFriends, true), gettype($allFriends)), __LINE__);
        }
        $this->allFriends = $allFriends;
        
        return $this;
    }
}
