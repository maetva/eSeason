<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeographicalArea StructType
 * @subpackage Structs
 */
class GeographicalArea extends AbstractStructBase
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: [a-zA-Z]{2}
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * Constructor method for GeographicalArea
     * @uses GeographicalArea::setCountry()
     * @uses GeographicalArea::setDepartment()
     * @param string $country
     * @param string $department
     */
    public function __construct(?string $country = null, ?string $department = null)
    {
        $this
            ->setCountry($country)
            ->setDepartment($department);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Maetva\ESeason\WebCampServices\StructType\GeographicalArea
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z]{2})
        if (!is_null($country) && !preg_match('/[a-zA-Z]{2}/', $country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z]{2}/', var_export($country, true)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Maetva\ESeason\WebCampServices\StructType\GeographicalArea
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
        return $this;
    }
}
