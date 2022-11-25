<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoTariff StructType
 * @subpackage Structs
 */
class CategoTariff extends AbstractStructBase
{
    /**
     * The idcatego
     * @var int|null
     */
    protected ?int $idcatego = null;
    /**
     * The idtariff
     * @var int|null
     */
    protected ?int $idtariff = null;
    /**
     * Constructor method for CategoTariff
     * @uses CategoTariff::setIdcatego()
     * @uses CategoTariff::setIdtariff()
     * @param int $idcatego
     * @param int $idtariff
     */
    public function __construct(?int $idcatego = null, ?int $idtariff = null)
    {
        $this
            ->setIdcatego($idcatego)
            ->setIdtariff($idtariff);
    }
    /**
     * Get idcatego value
     * @return int|null
     */
    public function getIdcatego(): ?int
    {
        return $this->idcatego;
    }
    /**
     * Set idcatego value
     * @param int $idcatego
     * @return \Maetva\ESeason\PrivateServices\StructType\CategoTariff
     */
    public function setIdcatego(?int $idcatego = null): self
    {
        // validation for constraint: int
        if (!is_null($idcatego) && !(is_int($idcatego) || ctype_digit($idcatego))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idcatego, true), gettype($idcatego)), __LINE__);
        }
        $this->idcatego = $idcatego;
        
        return $this;
    }
    /**
     * Get idtariff value
     * @return int|null
     */
    public function getIdtariff(): ?int
    {
        return $this->idtariff;
    }
    /**
     * Set idtariff value
     * @param int $idtariff
     * @return \Maetva\ESeason\PrivateServices\StructType\CategoTariff
     */
    public function setIdtariff(?int $idtariff = null): self
    {
        // validation for constraint: int
        if (!is_null($idtariff) && !(is_int($idtariff) || ctype_digit($idtariff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idtariff, true), gettype($idtariff)), __LINE__);
        }
        $this->idtariff = $idtariff;
        
        return $this;
    }
}
