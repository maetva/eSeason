<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampsiteStatus StructType
 * @subpackage Structs
 */
class CampsiteStatus extends AbstractStructBase
{
    /**
     * The idsite
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $idsite;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $status;
    /**
     * The begin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * Constructor method for CampsiteStatus
     * @uses CampsiteStatus::setIdsite()
     * @uses CampsiteStatus::setStatus()
     * @uses CampsiteStatus::setBegin()
     * @uses CampsiteStatus::setEnd()
     * @param int $idsite
     * @param bool $status
     * @param string $begin
     * @param string $end
     */
    public function __construct(int $idsite, bool $status, ?string $begin = null, ?string $end = null)
    {
        $this
            ->setIdsite($idsite)
            ->setStatus($status)
            ->setBegin($begin)
            ->setEnd($end);
    }
    /**
     * Get idsite value
     * @return int
     */
    public function getIdsite(): int
    {
        return $this->idsite;
    }
    /**
     * Set idsite value
     * @param int $idsite
     * @return \Maetva\ESeason\PrivateServices\StructType\CampsiteStatus
     */
    public function setIdsite(int $idsite): self
    {
        // validation for constraint: int
        if (!is_null($idsite) && !(is_int($idsite) || ctype_digit($idsite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idsite, true), gettype($idsite)), __LINE__);
        }
        $this->idsite = $idsite;
        
        return $this;
    }
    /**
     * Get status value
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Maetva\ESeason\PrivateServices\StructType\CampsiteStatus
     */
    public function setStatus(bool $status): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Maetva\ESeason\PrivateServices\StructType\CampsiteStatus
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
     * @return \Maetva\ESeason\PrivateServices\StructType\CampsiteStatus
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
