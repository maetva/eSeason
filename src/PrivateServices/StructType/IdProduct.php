<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdProduct StructType
 * @subpackage Structs
 */
class IdProduct extends AbstractStructBase
{
    /**
     * The id1
     * @var int|null
     */
    protected ?int $id1 = null;
    /**
     * The idProduct
     * @var int|null
     */
    protected ?int $idProduct = null;
    /**
     * Constructor method for IdProduct
     * @uses IdProduct::setId1()
     * @uses IdProduct::setIdProduct()
     * @param int $id1
     * @param int $idProduct
     */
    public function __construct(?int $id1 = null, ?int $idProduct = null)
    {
        $this
            ->setId1($id1)
            ->setIdProduct($idProduct);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\IdProduct
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
     * Get idProduct value
     * @return int|null
     */
    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param int $idProduct
     * @return \Maetva\ESeason\PrivateServices\StructType\IdProduct
     */
    public function setIdProduct(?int $idProduct = null): self
    {
        // validation for constraint: int
        if (!is_null($idProduct) && !(is_int($idProduct) || ctype_digit($idProduct))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProduct, true), gettype($idProduct)), __LINE__);
        }
        $this->idProduct = $idProduct;
        
        return $this;
    }
}
