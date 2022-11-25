<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DayStock StructType
 * @subpackage Structs
 */
class DayStock extends AbstractStructBase
{
    /**
     * The day
     * @var string|null
     */
    protected ?string $day = null;
    /**
     * The stock
     * @var int|null
     */
    protected ?int $stock = null;
    /**
     * Constructor method for DayStock
     * @uses DayStock::setDay()
     * @uses DayStock::setStock()
     * @param string $day
     * @param int $stock
     */
    public function __construct(?string $day = null, ?int $stock = null)
    {
        $this
            ->setDay($day)
            ->setStock($stock);
    }
    /**
     * Get day value
     * @return string|null
     */
    public function getDay(): ?string
    {
        return $this->day;
    }
    /**
     * Set day value
     * @param string $day
     * @return \Maetva\ESeason\WebCampServices\StructType\DayStock
     */
    public function setDay(?string $day = null): self
    {
        // validation for constraint: string
        if (!is_null($day) && !is_string($day)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($day, true), gettype($day)), __LINE__);
        }
        $this->day = $day;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\DayStock
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
