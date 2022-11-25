<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscChargeOrder StructType
 * @subpackage Structs
 */
class MiscChargeOrder extends AbstractStructBase
{
    /**
     * The ticketNumber
     * @var string|null
     */
    protected ?string $ticketNumber = null;
    /**
     * Constructor method for MiscChargeOrder
     * @uses MiscChargeOrder::setTicketNumber()
     * @param string $ticketNumber
     */
    public function __construct(?string $ticketNumber = null)
    {
        $this
            ->setTicketNumber($ticketNumber);
    }
    /**
     * Get ticketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }
    /**
     * Set ticketNumber value
     * @param string $ticketNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->ticketNumber = $ticketNumber;
        
        return $this;
    }
}
