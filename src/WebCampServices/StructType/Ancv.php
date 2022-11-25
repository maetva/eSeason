<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ancv StructType
 * @subpackage Structs
 */
class Ancv extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The remittance
     * @var string|null
     */
    protected ?string $remittance = null;
    /**
     * The transaction
     * @var string|null
     */
    protected ?string $transaction = null;
    /**
     * The sequence
     * @var int|null
     */
    protected ?int $sequence = null;
    /**
     * Constructor method for Ancv
     * @uses Ancv::setAmount()
     * @uses Ancv::setRemittance()
     * @uses Ancv::setTransaction()
     * @uses Ancv::setSequence()
     * @param float $amount
     * @param string $remittance
     * @param string $transaction
     * @param int $sequence
     */
    public function __construct(?float $amount = null, ?string $remittance = null, ?string $transaction = null, ?int $sequence = null)
    {
        $this
            ->setAmount($amount)
            ->setRemittance($remittance)
            ->setTransaction($transaction)
            ->setSequence($sequence);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Ancv
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
    /**
     * Get remittance value
     * @return string|null
     */
    public function getRemittance(): ?string
    {
        return $this->remittance;
    }
    /**
     * Set remittance value
     * @param string $remittance
     * @return \Maetva\ESeason\WebCampServices\StructType\Ancv
     */
    public function setRemittance(?string $remittance = null): self
    {
        // validation for constraint: string
        if (!is_null($remittance) && !is_string($remittance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remittance, true), gettype($remittance)), __LINE__);
        }
        $this->remittance = $remittance;
        
        return $this;
    }
    /**
     * Get transaction value
     * @return string|null
     */
    public function getTransaction(): ?string
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param string $transaction
     * @return \Maetva\ESeason\WebCampServices\StructType\Ancv
     */
    public function setTransaction(?string $transaction = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction) && !is_string($transaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction, true), gettype($transaction)), __LINE__);
        }
        $this->transaction = $transaction;
        
        return $this;
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Ancv
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
}
