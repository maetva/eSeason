<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgCheckStay StructType
 * @subpackage Structs
 */
class RequestCpgCheckStay extends AbstractStructBase
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
     * The idStay
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * Constructor method for RequestCpgCheckStay
     * @uses RequestCpgCheckStay::setIdUser()
     * @uses RequestCpgCheckStay::setPassword()
     * @uses RequestCpgCheckStay::setIdStay()
     * @param string $idUser
     * @param string $password
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdStay($idStay);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay
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
     * Get idStay value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    public function getIdStay(): ?\Maetva\ESeason\WebCampServices\StructType\IdStay
    {
        return $this->idStay;
    }
    /**
     * Set idStay value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
        return $this;
    }
}
