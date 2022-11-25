<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdStay StructType
 * @subpackage Structs
 */
class IdStay extends AbstractStructBase
{
    /**
     * The beginDate
     * @var string|null
     */
    protected ?string $beginDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The idProduct
     * @var \Maetva\ESeason\PrivateServices\StructType\IdProduct|null
     */
    protected ?\Maetva\ESeason\PrivateServices\StructType\IdProduct $idProduct = null;
    /**
     * The id2
     * @var int|null
     */
    protected ?int $id2 = null;
    /**
     * The idTariff
     * @var \Maetva\ESeason\PrivateServices\StructType\IdTariffProduct|null
     */
    protected ?\Maetva\ESeason\PrivateServices\StructType\IdTariffProduct $idTariff = null;
    /**
     * The hash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hash = null;
    /**
     * The wichStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wichStock = null;
    /**
     * Constructor method for IdStay
     * @uses IdStay::setBeginDate()
     * @uses IdStay::setEndDate()
     * @uses IdStay::setIdProduct()
     * @uses IdStay::setId2()
     * @uses IdStay::setIdTariff()
     * @uses IdStay::setHash()
     * @uses IdStay::setWichStock()
     * @param string $beginDate
     * @param string $endDate
     * @param \Maetva\ESeason\PrivateServices\StructType\IdProduct $idProduct
     * @param int $id2
     * @param \Maetva\ESeason\PrivateServices\StructType\IdTariffProduct $idTariff
     * @param string $hash
     * @param string $wichStock
     */
    public function __construct(?string $beginDate = null, ?string $endDate = null, ?\Maetva\ESeason\PrivateServices\StructType\IdProduct $idProduct = null, ?int $id2 = null, ?\Maetva\ESeason\PrivateServices\StructType\IdTariffProduct $idTariff = null, ?string $hash = null, ?string $wichStock = null)
    {
        $this
            ->setBeginDate($beginDate)
            ->setEndDate($endDate)
            ->setIdProduct($idProduct)
            ->setId2($id2)
            ->setIdTariff($idTariff)
            ->setHash($hash)
            ->setWichStock($wichStock);
    }
    /**
     * Get beginDate value
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return $this->beginDate;
    }
    /**
     * Set beginDate value
     * @param string $beginDate
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->beginDate = $beginDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get idProduct value
     * @return \Maetva\ESeason\PrivateServices\StructType\IdProduct|null
     */
    public function getIdProduct(): ?\Maetva\ESeason\PrivateServices\StructType\IdProduct
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param \Maetva\ESeason\PrivateServices\StructType\IdProduct $idProduct
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setIdProduct(?\Maetva\ESeason\PrivateServices\StructType\IdProduct $idProduct = null): self
    {
        $this->idProduct = $idProduct;
        
        return $this;
    }
    /**
     * Get id2 value
     * @return int|null
     */
    public function getId2(): ?int
    {
        return $this->id2;
    }
    /**
     * Set id2 value
     * @param int $id2
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setId2(?int $id2 = null): self
    {
        // validation for constraint: int
        if (!is_null($id2) && !(is_int($id2) || ctype_digit($id2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id2, true), gettype($id2)), __LINE__);
        }
        $this->id2 = $id2;
        
        return $this;
    }
    /**
     * Get idTariff value
     * @return \Maetva\ESeason\PrivateServices\StructType\IdTariffProduct|null
     */
    public function getIdTariff(): ?\Maetva\ESeason\PrivateServices\StructType\IdTariffProduct
    {
        return $this->idTariff;
    }
    /**
     * Set idTariff value
     * @param \Maetva\ESeason\PrivateServices\StructType\IdTariffProduct $idTariff
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setIdTariff(?\Maetva\ESeason\PrivateServices\StructType\IdTariffProduct $idTariff = null): self
    {
        $this->idTariff = $idTariff;
        
        return $this;
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setHash(?string $hash = null): self
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hash, true), gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
        
        return $this;
    }
    /**
     * Get wichStock value
     * @return string|null
     */
    public function getWichStock(): ?string
    {
        return $this->wichStock;
    }
    /**
     * Set wichStock value
     * @uses \Maetva\ESeason\PrivateServices\EnumType\Stock::valueIsValid()
     * @uses \Maetva\ESeason\PrivateServices\EnumType\Stock::getValidValues()
     * @throws InvalidArgumentException
     * @param string $wichStock
     * @return \Maetva\ESeason\PrivateServices\StructType\IdStay
     */
    public function setWichStock(?string $wichStock = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\PrivateServices\EnumType\Stock::valueIsValid($wichStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\PrivateServices\EnumType\Stock', is_array($wichStock) ? implode(', ', $wichStock) : var_export($wichStock, true), implode(', ', \Maetva\ESeason\PrivateServices\EnumType\Stock::getValidValues())), __LINE__);
        }
        $this->wichStock = $wichStock;
        
        return $this;
    }
}
