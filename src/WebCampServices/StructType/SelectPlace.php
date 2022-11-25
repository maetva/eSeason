<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectPlace StructType
 * @subpackage Structs
 */
class SelectPlace extends AbstractStructBase
{
    /**
     * The actif
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $actif = null;
    /**
     * The selectedZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $selectedZone = null;
    /**
     * The locationNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationNum = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for SelectPlace
     * @uses SelectPlace::setActif()
     * @uses SelectPlace::setSelectedZone()
     * @uses SelectPlace::setLocationNum()
     * @uses SelectPlace::setAmount()
     * @param bool $actif
     * @param string $selectedZone
     * @param string $locationNum
     * @param float $amount
     */
    public function __construct(?bool $actif = null, ?string $selectedZone = null, ?string $locationNum = null, ?float $amount = null)
    {
        $this
            ->setActif($actif)
            ->setSelectedZone($selectedZone)
            ->setLocationNum($locationNum)
            ->setAmount($amount);
    }
    /**
     * Get actif value
     * @return bool|null
     */
    public function getActif(): ?bool
    {
        return $this->actif;
    }
    /**
     * Set actif value
     * @param bool $actif
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace
     */
    public function setActif(?bool $actif = null): self
    {
        // validation for constraint: boolean
        if (!is_null($actif) && !is_bool($actif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($actif, true), gettype($actif)), __LINE__);
        }
        $this->actif = $actif;
        
        return $this;
    }
    /**
     * Get selectedZone value
     * @return string|null
     */
    public function getSelectedZone(): ?string
    {
        return $this->selectedZone;
    }
    /**
     * Set selectedZone value
     * @param string $selectedZone
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace
     */
    public function setSelectedZone(?string $selectedZone = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedZone) && !is_string($selectedZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedZone, true), gettype($selectedZone)), __LINE__);
        }
        $this->selectedZone = $selectedZone;
        
        return $this;
    }
    /**
     * Get locationNum value
     * @return string|null
     */
    public function getLocationNum(): ?string
    {
        return $this->locationNum;
    }
    /**
     * Set locationNum value
     * @param string $locationNum
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace
     */
    public function setLocationNum(?string $locationNum = null): self
    {
        // validation for constraint: string
        if (!is_null($locationNum) && !is_string($locationNum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationNum, true), gettype($locationNum)), __LINE__);
        }
        $this->locationNum = $locationNum;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
