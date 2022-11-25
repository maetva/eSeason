<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPlace StructType
 * @subpackage Structs
 */
class SearchPlace extends AbstractStructBase
{
    /**
     * The idProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null;
    /**
     * The idSite
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * Constructor method for SearchPlace
     * @uses SearchPlace::setIdProduct()
     * @uses SearchPlace::setIdSite()
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @param int $idSite
     */
    public function __construct(?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null, ?int $idSite = null)
    {
        $this
            ->setIdProduct($idProduct)
            ->setIdSite($idSite);
    }
    /**
     * Get idProduct value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    public function getIdProduct(): ?\Maetva\ESeason\WebCampServices\StructType\IdProduct
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace
     */
    public function setIdProduct(?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null): self
    {
        $this->idProduct = $idProduct;
        
        return $this;
    }
    /**
     * Get idSite value
     * @return int|null
     */
    public function getIdSite(): ?int
    {
        return $this->idSite;
    }
    /**
     * Set idSite value
     * @param int $idSite
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace
     */
    public function setIdSite(?int $idSite = null): self
    {
        // validation for constraint: int
        if (!is_null($idSite) && !(is_int($idSite) || ctype_digit($idSite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSite, true), gettype($idSite)), __LINE__);
        }
        $this->idSite = $idSite;
        
        return $this;
    }
}
