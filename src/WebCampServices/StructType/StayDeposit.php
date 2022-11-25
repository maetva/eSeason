<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayDeposit StructType
 * @subpackage Structs
 */
class StayDeposit extends AbstractStructBase
{
    /**
     * The external
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $external = null;
    /**
     * Constructor method for StayDeposit
     * @uses StayDeposit::setExternal()
     * @param bool $external
     */
    public function __construct(?bool $external = null)
    {
        $this
            ->setExternal($external);
    }
    /**
     * Get external value
     * @return bool|null
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }
    /**
     * Set external value
     * @param bool $external
     * @return \Maetva\ESeason\WebCampServices\StructType\StayDeposit
     */
    public function setExternal(?bool $external = null): self
    {
        // validation for constraint: boolean
        if (!is_null($external) && !is_bool($external)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($external, true), gettype($external)), __LINE__);
        }
        $this->external = $external;
        
        return $this;
    }
}
