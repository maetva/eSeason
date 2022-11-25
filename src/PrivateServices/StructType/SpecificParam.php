<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecificParam StructType
 * @subpackage Structs
 */
class SpecificParam extends AbstractStructBase
{
    /**
     * The pName
     * @var string|null
     */
    protected ?string $pName = null;
    /**
     * The pValue
     * @var string|null
     */
    protected ?string $pValue = null;
    /**
     * Constructor method for SpecificParam
     * @uses SpecificParam::setPName()
     * @uses SpecificParam::setPValue()
     * @param string $pName
     * @param string $pValue
     */
    public function __construct(?string $pName = null, ?string $pValue = null)
    {
        $this
            ->setPName($pName)
            ->setPValue($pValue);
    }
    /**
     * Get pName value
     * @return string|null
     */
    public function getPName(): ?string
    {
        return $this->pName;
    }
    /**
     * Set pName value
     * @param string $pName
     * @return \Maetva\ESeason\PrivateServices\StructType\SpecificParam
     */
    public function setPName(?string $pName = null): self
    {
        // validation for constraint: string
        if (!is_null($pName) && !is_string($pName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pName, true), gettype($pName)), __LINE__);
        }
        $this->pName = $pName;
        
        return $this;
    }
    /**
     * Get pValue value
     * @return string|null
     */
    public function getPValue(): ?string
    {
        return $this->pValue;
    }
    /**
     * Set pValue value
     * @param string $pValue
     * @return \Maetva\ESeason\PrivateServices\StructType\SpecificParam
     */
    public function setPValue(?string $pValue = null): self
    {
        // validation for constraint: string
        if (!is_null($pValue) && !is_string($pValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pValue, true), gettype($pValue)), __LINE__);
        }
        $this->pValue = $pValue;
        
        return $this;
    }
}
