<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCheckStay StructType
 * @subpackage Structs
 */
class RequestCheckStay extends AbstractStructBase
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
     * The idcatego
     * @var int|null
     */
    protected ?int $idcatego = null;
    /**
     * The idtariff
     * @var int|null
     */
    protected ?int $idtariff = null;
    /**
     * The begin
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * Constructor method for RequestCheckStay
     * @uses RequestCheckStay::setIdUser()
     * @uses RequestCheckStay::setPassword()
     * @uses RequestCheckStay::setIdentreunicamp()
     * @uses RequestCheckStay::setIdcatego()
     * @uses RequestCheckStay::setIdtariff()
     * @uses RequestCheckStay::setBegin()
     * @uses RequestCheckStay::setEnd()
     * @param string $idUser
     * @param string $password
     * @param string $identreunicamp
     * @param int $idcatego
     * @param int $idtariff
     * @param string $begin
     * @param string $end
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $identreunicamp = null, ?int $idcatego = null, ?int $idtariff = null, ?string $begin = null, ?string $end = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdentreunicamp($identreunicamp)
            ->setIdcatego($idcatego)
            ->setIdtariff($idtariff)
            ->setBegin($begin)
            ->setEnd($end);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
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
    /**
     * Get idcatego value
     * @return int|null
     */
    public function getIdcatego(): ?int
    {
        return $this->idcatego;
    }
    /**
     * Set idcatego value
     * @param int $idcatego
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
     */
    public function setIdcatego(?int $idcatego = null): self
    {
        // validation for constraint: int
        if (!is_null($idcatego) && !(is_int($idcatego) || ctype_digit($idcatego))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idcatego, true), gettype($idcatego)), __LINE__);
        }
        $this->idcatego = $idcatego;
        
        return $this;
    }
    /**
     * Get idtariff value
     * @return int|null
     */
    public function getIdtariff(): ?int
    {
        return $this->idtariff;
    }
    /**
     * Set idtariff value
     * @param int $idtariff
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
     */
    public function setIdtariff(?int $idtariff = null): self
    {
        // validation for constraint: int
        if (!is_null($idtariff) && !(is_int($idtariff) || ctype_digit($idtariff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idtariff, true), gettype($idtariff)), __LINE__);
        }
        $this->idtariff = $idtariff;
        
        return $this;
    }
    /**
     * Get begin value
     * @return string|null
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }
    /**
     * Set begin value
     * @param string $begin
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
     */
    public function setBegin(?string $begin = null): self
    {
        // validation for constraint: string
        if (!is_null($begin) && !is_string($begin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin, true), gettype($begin)), __LINE__);
        }
        $this->begin = $begin;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
}
