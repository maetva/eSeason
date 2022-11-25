<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlaceInfo StructType
 * @subpackage Structs
 */
class PlaceInfo extends AbstractStructBase
{
    /**
     * The idPlace
     * @var int|null
     */
    protected ?int $idPlace = null;
    /**
     * The num
     * @var string|null
     */
    protected ?string $num = null;
    /**
     * The beginGap
     * @var string|null
     */
    protected ?string $beginGap = null;
    /**
     * The endGap
     * @var string|null
     */
    protected ?string $endGap = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for PlaceInfo
     * @uses PlaceInfo::setIdPlace()
     * @uses PlaceInfo::setNum()
     * @uses PlaceInfo::setBeginGap()
     * @uses PlaceInfo::setEndGap()
     * @uses PlaceInfo::setDescription()
     * @param int $idPlace
     * @param string $num
     * @param string $beginGap
     * @param string $endGap
     * @param string $description
     */
    public function __construct(?int $idPlace = null, ?string $num = null, ?string $beginGap = null, ?string $endGap = null, ?string $description = null)
    {
        $this
            ->setIdPlace($idPlace)
            ->setNum($num)
            ->setBeginGap($beginGap)
            ->setEndGap($endGap)
            ->setDescription($description);
    }
    /**
     * Get idPlace value
     * @return int|null
     */
    public function getIdPlace(): ?int
    {
        return $this->idPlace;
    }
    /**
     * Set idPlace value
     * @param int $idPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo
     */
    public function setIdPlace(?int $idPlace = null): self
    {
        // validation for constraint: int
        if (!is_null($idPlace) && !(is_int($idPlace) || ctype_digit($idPlace))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPlace, true), gettype($idPlace)), __LINE__);
        }
        $this->idPlace = $idPlace;
        
        return $this;
    }
    /**
     * Get num value
     * @return string|null
     */
    public function getNum(): ?string
    {
        return $this->num;
    }
    /**
     * Set num value
     * @param string $num
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo
     */
    public function setNum(?string $num = null): self
    {
        // validation for constraint: string
        if (!is_null($num) && !is_string($num)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($num, true), gettype($num)), __LINE__);
        }
        $this->num = $num;
        
        return $this;
    }
    /**
     * Get beginGap value
     * @return string|null
     */
    public function getBeginGap(): ?string
    {
        return $this->beginGap;
    }
    /**
     * Set beginGap value
     * @param string $beginGap
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo
     */
    public function setBeginGap(?string $beginGap = null): self
    {
        // validation for constraint: string
        if (!is_null($beginGap) && !is_string($beginGap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginGap, true), gettype($beginGap)), __LINE__);
        }
        $this->beginGap = $beginGap;
        
        return $this;
    }
    /**
     * Get endGap value
     * @return string|null
     */
    public function getEndGap(): ?string
    {
        return $this->endGap;
    }
    /**
     * Set endGap value
     * @param string $endGap
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo
     */
    public function setEndGap(?string $endGap = null): self
    {
        // validation for constraint: string
        if (!is_null($endGap) && !is_string($endGap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endGap, true), gettype($endGap)), __LINE__);
        }
        $this->endGap = $endGap;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo
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
}
