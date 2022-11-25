<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCheckStay StructType
 * @subpackage Structs
 */
class ResponseCheckStay extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The status
     * @var bool|null
     */
    protected ?bool $status = null;
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
     * Constructor method for ResponseCheckStay
     * @uses ResponseCheckStay::setIdUser()
     * @uses ResponseCheckStay::setStatus()
     * @uses ResponseCheckStay::setError()
     * @uses ResponseCheckStay::setMessError()
     * @param string $idUser
     * @param bool $status
     * @param int $error
     * @param string $messError
     */
    public function __construct(?string $idUser = null, ?bool $status = null, ?int $error = null, ?string $messError = null)
    {
        $this
            ->setIdUser($idUser)
            ->setStatus($status)
            ->setError($error)
            ->setMessError($messError);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay
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
}
