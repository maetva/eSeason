<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdTariffProduct StructType
 * @subpackage Structs
 */
class IdTariffProduct extends AbstractStructBase
{
    /**
     * The id1
     * @var int|null
     */
    protected ?int $id1 = null;
    /**
     * The idTariffProduct
     * @var int|null
     */
    protected ?int $idTariffProduct = null;
    /**
     * Constructor method for IdTariffProduct
     * @uses IdTariffProduct::setId1()
     * @uses IdTariffProduct::setIdTariffProduct()
     * @param int $id1
     * @param int $idTariffProduct
     */
    public function __construct(?int $id1 = null, ?int $idTariffProduct = null)
    {
        $this
            ->setId1($id1)
            ->setIdTariffProduct($idTariffProduct);
    }
    /**
     * Get id1 value
     * @return int|null
     */
    public function getId1(): ?int
    {
        return $this->id1;
    }
    /**
     * Set id1 value
     * @param int $id1
     * @return \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct
     */
    public function setId1(?int $id1 = null): self
    {
        // validation for constraint: int
        if (!is_null($id1) && !(is_int($id1) || ctype_digit($id1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id1, true), gettype($id1)), __LINE__);
        }
        $this->id1 = $id1;
        
        return $this;
    }
    /**
     * Get idTariffProduct value
     * @return int|null
     */
    public function getIdTariffProduct(): ?int
    {
        return $this->idTariffProduct;
    }
    /**
     * Set idTariffProduct value
     * @param int $idTariffProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct
     */
    public function setIdTariffProduct(?int $idTariffProduct = null): self
    {
        // validation for constraint: int
        if (!is_null($idTariffProduct) && !(is_int($idTariffProduct) || ctype_digit($idTariffProduct))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idTariffProduct, true), gettype($idTariffProduct)), __LINE__);
        }
        $this->idTariffProduct = $idTariffProduct;
        
        return $this;
    }
}
