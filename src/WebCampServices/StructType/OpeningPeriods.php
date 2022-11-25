<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpeningPeriods StructType
 * @subpackage Structs
 */
class OpeningPeriods extends AbstractStructBase
{
    /**
     * The openingDate
     * @var string|null
     */
    protected ?string $openingDate = null;
    /**
     * The closingDate
     * @var string|null
     */
    protected ?string $closingDate = null;
    /**
     * Constructor method for OpeningPeriods
     * @uses OpeningPeriods::setOpeningDate()
     * @uses OpeningPeriods::setClosingDate()
     * @param string $openingDate
     * @param string $closingDate
     */
    public function __construct(?string $openingDate = null, ?string $closingDate = null)
    {
        $this
            ->setOpeningDate($openingDate)
            ->setClosingDate($closingDate);
    }
    /**
     * Get openingDate value
     * @return string|null
     */
    public function getOpeningDate(): ?string
    {
        return $this->openingDate;
    }
    /**
     * Set openingDate value
     * @param string $openingDate
     * @return \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods
     */
    public function setOpeningDate(?string $openingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($openingDate) && !is_string($openingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openingDate, true), gettype($openingDate)), __LINE__);
        }
        $this->openingDate = $openingDate;
        
        return $this;
    }
    /**
     * Get closingDate value
     * @return string|null
     */
    public function getClosingDate(): ?string
    {
        return $this->closingDate;
    }
    /**
     * Set closingDate value
     * @param string $closingDate
     * @return \Maetva\ESeason\WebCampServices\StructType\OpeningPeriods
     */
    public function setClosingDate(?string $closingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDate) && !is_string($closingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDate, true), gettype($closingDate)), __LINE__);
        }
        $this->closingDate = $closingDate;
        
        return $this;
    }
}
