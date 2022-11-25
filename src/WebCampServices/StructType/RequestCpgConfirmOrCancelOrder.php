<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgConfirmOrCancelOrder StructType
 * @subpackage Structs
 */
class RequestCpgConfirmOrCancelOrder extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The confirm
     * @var bool|null
     */
    protected ?bool $confirm = null;
    /**
     * Constructor method for RequestCpgConfirmOrCancelOrder
     * @uses RequestCpgConfirmOrCancelOrder::setIdUser()
     * @uses RequestCpgConfirmOrCancelOrder::setPassword()
     * @uses RequestCpgConfirmOrCancelOrder::setIdOrder()
     * @uses RequestCpgConfirmOrCancelOrder::setConfirm()
     * @param string $idUser
     * @param string $password
     * @param string $idOrder
     * @param bool $confirm
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $idOrder = null, ?bool $confirm = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdOrder($idOrder)
            ->setConfirm($confirm);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder
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
     * Get confirm value
     * @return bool|null
     */
    public function getConfirm(): ?bool
    {
        return $this->confirm;
    }
    /**
     * Set confirm value
     * @param bool $confirm
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder
     */
    public function setConfirm(?bool $confirm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($confirm) && !is_bool($confirm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($confirm, true), gettype($confirm)), __LINE__);
        }
        $this->confirm = $confirm;
        
        return $this;
    }
}
