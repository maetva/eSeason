<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestListCategoTariff StructType
 * @subpackage Structs
 */
class RequestListCategoTariff extends AbstractStructBase
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
     * The identreunicamp
     * @var string|null
     */
    protected ?string $identreunicamp = null;
    /**
     * Constructor method for RequestListCategoTariff
     * @uses RequestListCategoTariff::setIdUser()
     * @uses RequestListCategoTariff::setPassword()
     * @uses RequestListCategoTariff::setIdentreunicamp()
     * @param string $idUser
     * @param string $password
     * @param string $identreunicamp
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $identreunicamp = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdentreunicamp($identreunicamp);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff
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
     * Get identreunicamp value
     * @return string|null
     */
    public function getIdentreunicamp(): ?string
    {
        return $this->identreunicamp;
    }
    /**
     * Set identreunicamp value
     * @param string $identreunicamp
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff
     */
    public function setIdentreunicamp(?string $identreunicamp = null): self
    {
        // validation for constraint: string
        if (!is_null($identreunicamp) && !is_string($identreunicamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identreunicamp, true), gettype($identreunicamp)), __LINE__);
        }
        $this->identreunicamp = $identreunicamp;
        
        return $this;
    }
}
