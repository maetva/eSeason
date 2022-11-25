<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelayedPaymentType StructType
 * @subpackage Structs
 */
class DelayedPaymentType extends AbstractStructBase
{
    /**
     * The delayedPayment
     * @var string|null
     */
    protected ?string $delayedPayment = null;
    /**
     * The delayedPaymentCode
     * @var string|null
     */
    protected ?string $delayedPaymentCode = null;
    /**
     * Constructor method for DelayedPaymentType
     * @uses DelayedPaymentType::setDelayedPayment()
     * @uses DelayedPaymentType::setDelayedPaymentCode()
     * @param string $delayedPayment
     * @param string $delayedPaymentCode
     */
    public function __construct(?string $delayedPayment = null, ?string $delayedPaymentCode = null)
    {
        $this
            ->setDelayedPayment($delayedPayment)
            ->setDelayedPaymentCode($delayedPaymentCode);
    }
    /**
     * Get delayedPayment value
     * @return string|null
     */
    public function getDelayedPayment(): ?string
    {
        return $this->delayedPayment;
    }
    /**
     * Set delayedPayment value
     * @param string $delayedPayment
     * @return \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType
     */
    public function setDelayedPayment(?string $delayedPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($delayedPayment) && !is_string($delayedPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delayedPayment, true), gettype($delayedPayment)), __LINE__);
        }
        $this->delayedPayment = $delayedPayment;
        
        return $this;
    }
    /**
     * Get delayedPaymentCode value
     * @return string|null
     */
    public function getDelayedPaymentCode(): ?string
    {
        return $this->delayedPaymentCode;
    }
    /**
     * Set delayedPaymentCode value
     * @param string $delayedPaymentCode
     * @return \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType
     */
    public function setDelayedPaymentCode(?string $delayedPaymentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($delayedPaymentCode) && !is_string($delayedPaymentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delayedPaymentCode, true), gettype($delayedPaymentCode)), __LINE__);
        }
        $this->delayedPaymentCode = $delayedPaymentCode;
        
        return $this;
    }
}
