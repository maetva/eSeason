<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setCode()
     * @uses CategoryType::setName()
     * @uses CategoryType::setType()
     * @param string $code
     * @param string $name
     * @param string $type
     */
    public function __construct(?string $code = null, ?string $name = null, ?string $type = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setType($type);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Maetva\ESeason\WebCampServices\StructType\CategoryType
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maetva\ESeason\WebCampServices\StructType\CategoryType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Maetva\ESeason\WebCampServices\StructType\CategoryType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\LodgingType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
