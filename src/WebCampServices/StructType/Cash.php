<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cash StructType
 * @subpackage Structs
 */
class Cash extends AbstractStructBase
{
    /**
     * The cashIndicator
     * @var bool|null
     */
    protected ?bool $cashIndicator = null;
    /**
     * Constructor method for Cash
     * @uses Cash::setCashIndicator()
     * @param bool $cashIndicator
     */
    public function __construct(?bool $cashIndicator = null)
    {
        $this
            ->setCashIndicator($cashIndicator);
    }
    /**
     * Get cashIndicator value
     * @return bool|null
     */
    public function getCashIndicator(): ?bool
    {
        return $this->cashIndicator;
    }
    /**
     * Set cashIndicator value
     * @param bool $cashIndicator
     * @return \Maetva\ESeason\WebCampServices\StructType\Cash
     */
    public function setCashIndicator(?bool $cashIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cashIndicator) && !is_bool($cashIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cashIndicator, true), gettype($cashIndicator)), __LINE__);
        }
        $this->cashIndicator = $cashIndicator;
        
        return $this;
    }
}
