<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalCriterion StructType
 * @subpackage Structs
 */
class ExternalCriterion extends AbstractStructBase
{
    /**
     * The critName
     * @var string|null
     */
    protected ?string $critName = null;
    /**
     * The critValue
     * @var string|null
     */
    protected ?string $critValue = null;
    /**
     * Constructor method for ExternalCriterion
     * @uses ExternalCriterion::setCritName()
     * @uses ExternalCriterion::setCritValue()
     * @param string $critName
     * @param string $critValue
     */
    public function __construct(?string $critName = null, ?string $critValue = null)
    {
        $this
            ->setCritName($critName)
            ->setCritValue($critValue);
    }
    /**
     * Get critName value
     * @return string|null
     */
    public function getCritName(): ?string
    {
        return $this->critName;
    }
    /**
     * Set critName value
     * @param string $critName
     * @return \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion
     */
    public function setCritName(?string $critName = null): self
    {
        // validation for constraint: string
        if (!is_null($critName) && !is_string($critName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($critName, true), gettype($critName)), __LINE__);
        }
        $this->critName = $critName;
        
        return $this;
    }
    /**
     * Get critValue value
     * @return string|null
     */
    public function getCritValue(): ?string
    {
        return $this->critValue;
    }
    /**
     * Set critValue value
     * @param string $critValue
     * @return \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion
     */
    public function setCritValue(?string $critValue = null): self
    {
        // validation for constraint: string
        if (!is_null($critValue) && !is_string($critValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($critValue, true), gettype($critValue)), __LINE__);
        }
        $this->critValue = $critValue;
        
        return $this;
    }
}
