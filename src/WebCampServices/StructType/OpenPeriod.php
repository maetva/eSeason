<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenPeriod StructType
 * @subpackage Structs
 */
class OpenPeriod extends AbstractStructBase
{
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
     * Constructor method for OpenPeriod
     * @uses OpenPeriod::setBegin()
     * @uses OpenPeriod::setEnd()
     * @param string $begin
     * @param string $end
     */
    public function __construct(?string $begin = null, ?string $end = null)
    {
        $this
            ->setBegin($begin)
            ->setEnd($end);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\OpenPeriod
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
     * @return \Maetva\ESeason\WebCampServices\StructType\OpenPeriod
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
