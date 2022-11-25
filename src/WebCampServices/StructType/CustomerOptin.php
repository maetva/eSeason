<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerOptin StructType
 * @subpackage Structs
 */
class CustomerOptin extends AbstractStructBase
{
    /**
     * The idType
     * @var string|null
     */
    protected ?string $idType = null;
    /**
     * The value
     * @var bool|null
     */
    protected ?bool $value = null;
    /**
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * Constructor method for CustomerOptin
     * @uses CustomerOptin::setIdType()
     * @uses CustomerOptin::setValue()
     * @uses CustomerOptin::setDate()
     * @param string $idType
     * @param bool $value
     * @param string $date
     */
    public function __construct(?string $idType = null, ?bool $value = null, ?string $date = null)
    {
        $this
            ->setIdType($idType)
            ->setValue($value)
            ->setDate($date);
    }
    /**
     * Get idType value
     * @return string|null
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }
    /**
     * Set idType value
     * @param string $idType
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOptin
     */
    public function setIdType(?string $idType = null): self
    {
        // validation for constraint: string
        if (!is_null($idType) && !is_string($idType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idType, true), gettype($idType)), __LINE__);
        }
        $this->idType = $idType;
        
        return $this;
    }
    /**
     * Get value value
     * @return bool|null
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param bool $value
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOptin
     */
    public function setValue(?bool $value = null): self
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOptin
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
}
