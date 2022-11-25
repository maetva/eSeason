<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectBill StructType
 * @subpackage Structs
 */
class DirectBill extends AbstractStructBase
{
    /**
     * The directBill_ID
     * @var string|null
     */
    protected ?string $directBill_ID = null;
    /**
     * Constructor method for DirectBill
     * @uses DirectBill::setDirectBill_ID()
     * @param string $directBill_ID
     */
    public function __construct(?string $directBill_ID = null)
    {
        $this
            ->setDirectBill_ID($directBill_ID);
    }
    /**
     * Get directBill_ID value
     * @return string|null
     */
    public function getDirectBill_ID(): ?string
    {
        return $this->directBill_ID;
    }
    /**
     * Set directBill_ID value
     * @param string $directBill_ID
     * @return \Maetva\ESeason\WebCampServices\StructType\DirectBill
     */
    public function setDirectBill_ID(?string $directBill_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($directBill_ID) && !is_string($directBill_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directBill_ID, true), gettype($directBill_ID)), __LINE__);
        }
        $this->directBill_ID = $directBill_ID;
        
        return $this;
    }
}
