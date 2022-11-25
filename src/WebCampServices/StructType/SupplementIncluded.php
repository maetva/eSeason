<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplementIncluded StructType
 * @subpackage Structs
 */
class SupplementIncluded extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * Constructor method for SupplementIncluded
     * @uses SupplementIncluded::setType()
     * @uses SupplementIncluded::setQuantity()
     * @param string $type
     * @param int $quantity
     */
    public function __construct(?string $type = null, ?int $quantity = null)
    {
        $this
            ->setType($type)
            ->setQuantity($quantity);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\SupplementType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\SupplementType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\SupplementType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementIncluded
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
}
