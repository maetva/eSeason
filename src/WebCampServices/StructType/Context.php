<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Context StructType
 * @subpackage Structs
 */
class Context extends AbstractStructBase
{
    /**
     * The camping
     * @var int|null
     */
    protected ?int $camping = null;
    /**
     * The product
     * @var \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $product = null;
    /**
     * The tariffProduct
     * @var \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $tariffProduct = null;
    /**
     * The personmin
     * @var int|null
     */
    protected ?int $personmin = null;
    /**
     * The personmax
     * @var int|null
     */
    protected ?int $personmax = null;
    /**
     * The animal
     * @var bool|null
     */
    protected ?bool $animal = null;
    /**
     * Constructor method for Context
     * @uses Context::setCamping()
     * @uses Context::setProduct()
     * @uses Context::setTariffProduct()
     * @uses Context::setPersonmin()
     * @uses Context::setPersonmax()
     * @uses Context::setAnimal()
     * @param int $camping
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $product
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $tariffProduct
     * @param int $personmin
     * @param int $personmax
     * @param bool $animal
     */
    public function __construct(?int $camping = null, ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $product = null, ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $tariffProduct = null, ?int $personmin = null, ?int $personmax = null, ?bool $animal = null)
    {
        $this
            ->setCamping($camping)
            ->setProduct($product)
            ->setTariffProduct($tariffProduct)
            ->setPersonmin($personmin)
            ->setPersonmax($personmax)
            ->setAnimal($animal);
    }
    /**
     * Get camping value
     * @return int|null
     */
    public function getCamping(): ?int
    {
        return $this->camping;
    }
    /**
     * Set camping value
     * @param int $camping
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setCamping(?int $camping = null): self
    {
        // validation for constraint: int
        if (!is_null($camping) && !(is_int($camping) || ctype_digit($camping))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($camping, true), gettype($camping)), __LINE__);
        }
        $this->camping = $camping;
        
        return $this;
    }
    /**
     * Get product value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    public function getProduct(): ?\Maetva\ESeason\WebCampServices\StructType\IdProduct
    {
        return $this->product;
    }
    /**
     * Set product value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $product
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setProduct(?\Maetva\ESeason\WebCampServices\StructType\IdProduct $product = null): self
    {
        $this->product = $product;
        
        return $this;
    }
    /**
     * Get tariffProduct value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    public function getTariffProduct(): ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct
    {
        return $this->tariffProduct;
    }
    /**
     * Set tariffProduct value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $tariffProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setTariffProduct(?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $tariffProduct = null): self
    {
        $this->tariffProduct = $tariffProduct;
        
        return $this;
    }
    /**
     * Get personmin value
     * @return int|null
     */
    public function getPersonmin(): ?int
    {
        return $this->personmin;
    }
    /**
     * Set personmin value
     * @param int $personmin
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setPersonmin(?int $personmin = null): self
    {
        // validation for constraint: int
        if (!is_null($personmin) && !(is_int($personmin) || ctype_digit($personmin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personmin, true), gettype($personmin)), __LINE__);
        }
        $this->personmin = $personmin;
        
        return $this;
    }
    /**
     * Get personmax value
     * @return int|null
     */
    public function getPersonmax(): ?int
    {
        return $this->personmax;
    }
    /**
     * Set personmax value
     * @param int $personmax
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setPersonmax(?int $personmax = null): self
    {
        // validation for constraint: int
        if (!is_null($personmax) && !(is_int($personmax) || ctype_digit($personmax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personmax, true), gettype($personmax)), __LINE__);
        }
        $this->personmax = $personmax;
        
        return $this;
    }
    /**
     * Get animal value
     * @return bool|null
     */
    public function getAnimal(): ?bool
    {
        return $this->animal;
    }
    /**
     * Set animal value
     * @param bool $animal
     * @return \Maetva\ESeason\WebCampServices\StructType\Context
     */
    public function setAnimal(?bool $animal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($animal) && !is_bool($animal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($animal, true), gettype($animal)), __LINE__);
        }
        $this->animal = $animal;
        
        return $this;
    }
}
