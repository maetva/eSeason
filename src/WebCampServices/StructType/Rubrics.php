<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rubrics StructType
 * @subpackage Structs
 */
class Rubrics extends AbstractStructBase
{
    /**
     * The label
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The number
     * @var int|null
     */
    protected ?int $number = null;
    /**
     * The idSupp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idSupp = null;
    /**
     * The supplementType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplementType = null;
    /**
     * The updatable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $updatable = null;
    /**
     * The modified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $modified = null;
    /**
     * The minNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $minNumber = null;
    /**
     * Constructor method for Rubrics
     * @uses Rubrics::setLabel()
     * @uses Rubrics::setNumber()
     * @uses Rubrics::setIdSupp()
     * @uses Rubrics::setSupplementType()
     * @uses Rubrics::setUpdatable()
     * @uses Rubrics::setModified()
     * @uses Rubrics::setMinNumber()
     * @param string $label
     * @param int $number
     * @param int $idSupp
     * @param string $supplementType
     * @param bool $updatable
     * @param bool $modified
     * @param int $minNumber
     */
    public function __construct(?string $label = null, ?int $number = null, ?int $idSupp = null, ?string $supplementType = null, ?bool $updatable = null, ?bool $modified = null, ?int $minNumber = null)
    {
        $this
            ->setLabel($label)
            ->setNumber($number)
            ->setIdSupp($idSupp)
            ->setSupplementType($supplementType)
            ->setUpdatable($updatable)
            ->setModified($modified)
            ->setMinNumber($minNumber);
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setNumber(?int $number = null): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get idSupp value
     * @return int|null
     */
    public function getIdSupp(): ?int
    {
        return $this->idSupp;
    }
    /**
     * Set idSupp value
     * @param int $idSupp
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setIdSupp(?int $idSupp = null): self
    {
        // validation for constraint: int
        if (!is_null($idSupp) && !(is_int($idSupp) || ctype_digit($idSupp))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSupp, true), gettype($idSupp)), __LINE__);
        }
        $this->idSupp = $idSupp;
        
        return $this;
    }
    /**
     * Get supplementType value
     * @return string|null
     */
    public function getSupplementType(): ?string
    {
        return $this->supplementType;
    }
    /**
     * Set supplementType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $supplementType
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setSupplementType(?string $supplementType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\SupplementType::valueIsValid($supplementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\SupplementType', is_array($supplementType) ? implode(', ', $supplementType) : var_export($supplementType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\SupplementType::getValidValues())), __LINE__);
        }
        $this->supplementType = $supplementType;
        
        return $this;
    }
    /**
     * Get updatable value
     * @return bool|null
     */
    public function getUpdatable(): ?bool
    {
        return $this->updatable;
    }
    /**
     * Set updatable value
     * @param bool $updatable
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setUpdatable(?bool $updatable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updatable) && !is_bool($updatable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updatable, true), gettype($updatable)), __LINE__);
        }
        $this->updatable = $updatable;
        
        return $this;
    }
    /**
     * Get modified value
     * @return bool|null
     */
    public function getModified(): ?bool
    {
        return $this->modified;
    }
    /**
     * Set modified value
     * @param bool $modified
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setModified(?bool $modified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($modified) && !is_bool($modified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modified, true), gettype($modified)), __LINE__);
        }
        $this->modified = $modified;
        
        return $this;
    }
    /**
     * Get minNumber value
     * @return int|null
     */
    public function getMinNumber(): ?int
    {
        return $this->minNumber;
    }
    /**
     * Set minNumber value
     * @param int $minNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics
     */
    public function setMinNumber(?int $minNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($minNumber) && !(is_int($minNumber) || ctype_digit($minNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minNumber, true), gettype($minNumber)), __LINE__);
        }
        $this->minNumber = $minNumber;
        
        return $this;
    }
}
