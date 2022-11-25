<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLine StructType
 * @subpackage Structs
 */
class OrderLine extends AbstractStructBase
{
    /**
     * The begin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The designation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $designation = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The unitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $unitPrice = null;
    /**
     * Constructor method for OrderLine
     * @uses OrderLine::setBegin()
     * @uses OrderLine::setDesignation()
     * @uses OrderLine::setEnd()
     * @uses OrderLine::setPrice()
     * @uses OrderLine::setQuantity()
     * @uses OrderLine::setUnitPrice()
     * @param string $begin
     * @param string $designation
     * @param string $end
     * @param float $price
     * @param int $quantity
     * @param float $unitPrice
     */
    public function __construct(?string $begin = null, ?string $designation = null, ?string $end = null, ?float $price = null, ?int $quantity = null, ?float $unitPrice = null)
    {
        $this
            ->setBegin($begin)
            ->setDesignation($designation)
            ->setEnd($end)
            ->setPrice($price)
            ->setQuantity($quantity)
            ->setUnitPrice($unitPrice);
    }
    /**
     * Get begin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBegin(): ?string
    {
        return isset($this->begin) ? $this->begin : null;
    }
    /**
     * Set begin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $begin
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setBegin(?string $begin = null): self
    {
        // validation for constraint: string
        if (!is_null($begin) && !is_string($begin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin, true), gettype($begin)), __LINE__);
        }
        if (is_null($begin) || (is_array($begin) && empty($begin))) {
            unset($this->begin);
        } else {
            $this->begin = $begin;
        }
        
        return $this;
    }
    /**
     * Get designation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDesignation(): ?string
    {
        return isset($this->designation) ? $this->designation : null;
    }
    /**
     * Set designation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $designation
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setDesignation(?string $designation = null): self
    {
        // validation for constraint: string
        if (!is_null($designation) && !is_string($designation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($designation, true), gettype($designation)), __LINE__);
        }
        if (is_null($designation) || (is_array($designation) && empty($designation))) {
            unset($this->designation);
        } else {
            $this->designation = $designation;
        }
        
        return $this;
    }
    /**
     * Get end value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return isset($this->end) ? $this->end : null;
    }
    /**
     * Set end value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $end
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        if (is_null($end) || (is_array($end) && empty($end))) {
            unset($this->end);
        } else {
            $this->end = $end;
        }
        
        return $this;
    }
    /**
     * Get price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return isset($this->price) ? $this->price : null;
    }
    /**
     * Set price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $price
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->price);
        } else {
            $this->price = $price;
        }
        
        return $this;
    }
    /**
     * Get quantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return isset($this->quantity) ? $this->quantity : null;
    }
    /**
     * Set quantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $quantity
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        if (is_null($quantity) || (is_array($quantity) && empty($quantity))) {
            unset($this->quantity);
        } else {
            $this->quantity = $quantity;
        }
        
        return $this;
    }
    /**
     * Get unitPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return isset($this->unitPrice) ? $this->unitPrice : null;
    }
    /**
     * Set unitPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $unitPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\OrderLine
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        if (is_null($unitPrice) || (is_array($unitPrice) && empty($unitPrice))) {
            unset($this->unitPrice);
        } else {
            $this->unitPrice = $unitPrice;
        }
        
        return $this;
    }
}
