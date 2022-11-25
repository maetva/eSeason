<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DueDatePayment StructType
 * @subpackage Structs
 */
class DueDatePayment extends AbstractStructBase
{
    /**
     * The sequence
     * @var int|null
     */
    protected ?int $sequence = null;
    /**
     * The valueDate
     * @var string|null
     */
    protected ?string $valueDate = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for DueDatePayment
     * @uses DueDatePayment::setSequence()
     * @uses DueDatePayment::setValueDate()
     * @uses DueDatePayment::setAmount()
     * @param int $sequence
     * @param string $valueDate
     * @param float $amount
     */
    public function __construct(?int $sequence = null, ?string $valueDate = null, ?float $amount = null)
    {
        $this
            ->setSequence($sequence)
            ->setValueDate($valueDate)
            ->setAmount($amount);
    }
    /**
     * Get sequence value
     * @return int|null
     */
    public function getSequence(): ?int
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Maetva\ESeason\WebCampServices\StructType\DueDatePayment
     */
    public function setSequence(?int $sequence = null): self
    {
        // validation for constraint: int
        if (!is_null($sequence) && !(is_int($sequence) || ctype_digit($sequence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequence, true), gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        
        return $this;
    }
    /**
     * Get valueDate value
     * @return string|null
     */
    public function getValueDate(): ?string
    {
        return $this->valueDate;
    }
    /**
     * Set valueDate value
     * @param string $valueDate
     * @return \Maetva\ESeason\WebCampServices\StructType\DueDatePayment
     */
    public function setValueDate(?string $valueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($valueDate) && !is_string($valueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueDate, true), gettype($valueDate)), __LINE__);
        }
        $this->valueDate = $valueDate;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Maetva\ESeason\WebCampServices\StructType\DueDatePayment
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
