<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgCheckStay StructType
 * @subpackage Structs
 */
class ResponseCpgCheckStay extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The error
     * @var int|null
     */
    protected ?int $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The status
     * @var bool|null
     */
    protected ?bool $status = null;
    /**
     * The stock
     * @var int|null
     */
    protected ?int $stock = null;
    /**
     * Constructor method for ResponseCpgCheckStay
     * @uses ResponseCpgCheckStay::setIdUser()
     * @uses ResponseCpgCheckStay::setError()
     * @uses ResponseCpgCheckStay::setMessError()
     * @uses ResponseCpgCheckStay::setStatus()
     * @uses ResponseCpgCheckStay::setStock()
     * @param string $idUser
     * @param int $error
     * @param string $messError
     * @param bool $status
     * @param int $stock
     */
    public function __construct(?string $idUser = null, ?int $error = null, ?string $messError = null, ?bool $status = null, ?int $stock = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setStatus($status)
            ->setStock($stock);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay
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
     * @return int|null
     */
    public function getError(): ?int
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param int $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay
     */
    public function setError(?int $error = null): self
    {
        // validation for constraint: int
        if (!is_null($error) && !(is_int($error) || ctype_digit($error))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return $this->messError;
    }
    /**
     * Set messError value
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        $this->messError = $messError;
        
        return $this;
    }
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay
     */
    public function setStatus(?bool $status = null): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get stock value
     * @return int|null
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }
    /**
     * Set stock value
     * @param int $stock
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay
     */
    public function setStock(?int $stock = null): self
    {
        // validation for constraint: int
        if (!is_null($stock) && !(is_int($stock) || ctype_digit($stock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stock, true), gettype($stock)), __LINE__);
        }
        $this->stock = $stock;
        
        return $this;
    }
}
