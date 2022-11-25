<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Promo StructType
 * @subpackage Structs
 */
class Promo extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The gain
     * @var float|null
     */
    protected ?float $gain = null;
    /**
     * The promoPlace
     * @var int|null
     */
    protected ?int $promoPlace = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for Promo
     * @uses Promo::setType()
     * @uses Promo::setDescription()
     * @uses Promo::setActive()
     * @uses Promo::setGain()
     * @uses Promo::setPromoPlace()
     * @uses Promo::setName()
     * @param string $type
     * @param string $description
     * @param bool $active
     * @param float $gain
     * @param int $promoPlace
     * @param string $name
     */
    public function __construct(?string $type = null, ?string $description = null, ?bool $active = null, ?float $gain = null, ?int $promoPlace = null, ?string $name = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setActive($active)
            ->setGain($gain)
            ->setPromoPlace($promoPlace)
            ->setName($name);
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PromoType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\PromoType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\PromoType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\PromoType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\PromoType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get gain value
     * @return float|null
     */
    public function getGain(): ?float
    {
        return $this->gain;
    }
    /**
     * Set gain value
     * @param float $gain
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
     */
    public function setGain(?float $gain = null): self
    {
        // validation for constraint: float
        if (!is_null($gain) && !(is_float($gain) || is_numeric($gain))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($gain, true), gettype($gain)), __LINE__);
        }
        $this->gain = $gain;
        
        return $this;
    }
    /**
     * Get promoPlace value
     * @return int|null
     */
    public function getPromoPlace(): ?int
    {
        return $this->promoPlace;
    }
    /**
     * Set promoPlace value
     * @param int $promoPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
     */
    public function setPromoPlace(?int $promoPlace = null): self
    {
        // validation for constraint: int
        if (!is_null($promoPlace) && !(is_int($promoPlace) || ctype_digit($promoPlace))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promoPlace, true), gettype($promoPlace)), __LINE__);
        }
        $this->promoPlace = $promoPlace;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Promo
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
}
