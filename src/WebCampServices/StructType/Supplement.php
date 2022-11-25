<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Supplement StructType
 * @subpackage Structs
 */
class Supplement extends AbstractStructBase
{
    /**
     * The idSupp
     * @var int|null
     */
    protected ?int $idSupp = null;
    /**
     * The maxValue
     * @var int|null
     */
    protected ?int $maxValue = null;
    /**
     * The minValue
     * @var int|null
     */
    protected ?int $minValue = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $unitPrice = null;
    /**
     * The promo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $promo = null;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The unitPromo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $unitPromo = null;
    /**
     * Constructor method for Supplement
     * @uses Supplement::setIdSupp()
     * @uses Supplement::setMaxValue()
     * @uses Supplement::setMinValue()
     * @uses Supplement::setName()
     * @uses Supplement::setDescription()
     * @uses Supplement::setType()
     * @uses Supplement::setUnitPrice()
     * @uses Supplement::setPromo()
     * @uses Supplement::setPrice()
     * @uses Supplement::setQuantity()
     * @uses Supplement::setUnitPromo()
     * @param int $idSupp
     * @param int $maxValue
     * @param int $minValue
     * @param string $name
     * @param string $description
     * @param string $type
     * @param float $unitPrice
     * @param float $promo
     * @param float $price
     * @param int $quantity
     * @param float $unitPromo
     */
    public function __construct(?int $idSupp = null, ?int $maxValue = null, ?int $minValue = null, ?string $name = null, ?string $description = null, ?string $type = null, ?float $unitPrice = null, ?float $promo = null, ?float $price = null, ?int $quantity = null, ?float $unitPromo = null)
    {
        $this
            ->setIdSupp($idSupp)
            ->setMaxValue($maxValue)
            ->setMinValue($minValue)
            ->setName($name)
            ->setDescription($description)
            ->setType($type)
            ->setUnitPrice($unitPrice)
            ->setPromo($promo)
            ->setPrice($price)
            ->setQuantity($quantity)
            ->setUnitPromo($unitPromo);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
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
     * Get maxValue value
     * @return int|null
     */
    public function getMaxValue(): ?int
    {
        return $this->maxValue;
    }
    /**
     * Set maxValue value
     * @param int $maxValue
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setMaxValue(?int $maxValue = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValue) && !(is_int($maxValue) || ctype_digit($maxValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValue, true), gettype($maxValue)), __LINE__);
        }
        $this->maxValue = $maxValue;
        
        return $this;
    }
    /**
     * Get minValue value
     * @return int|null
     */
    public function getMinValue(): ?int
    {
        return $this->minValue;
    }
    /**
     * Set minValue value
     * @param int $minValue
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setMinValue(?int $minValue = null): self
    {
        // validation for constraint: int
        if (!is_null($minValue) && !(is_int($minValue) || ctype_digit($minValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minValue, true), gettype($minValue)), __LINE__);
        }
        $this->minValue = $minValue;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
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
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\SupplementType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
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
     * Get unitPrice value
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }
    /**
     * Set unitPrice value
     * @param float $unitPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->unitPrice = $unitPrice;
        
        return $this;
    }
    /**
     * Get promo value
     * @return float|null
     */
    public function getPromo(): ?float
    {
        return $this->promo;
    }
    /**
     * Set promo value
     * @param float $promo
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setPromo(?float $promo = null): self
    {
        // validation for constraint: float
        if (!is_null($promo) && !(is_float($promo) || is_numeric($promo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($promo, true), gettype($promo)), __LINE__);
        }
        $this->promo = $promo;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
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
    /**
     * Get unitPromo value
     * @return float|null
     */
    public function getUnitPromo(): ?float
    {
        return $this->unitPromo;
    }
    /**
     * Set unitPromo value
     * @param float $unitPromo
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement
     */
    public function setUnitPromo(?float $unitPromo = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPromo) && !(is_float($unitPromo) || is_numeric($unitPromo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPromo, true), gettype($unitPromo)), __LINE__);
        }
        $this->unitPromo = $unitPromo;
        
        return $this;
    }
}
