<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoolAvailability StructType
 * @subpackage Structs
 */
class BoolAvailability extends AbstractStructBase
{
    /**
     * The searchPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Maetva\ESeason\WebCampServices\StructType\SearchPlace
     */
    protected \Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace;
    /**
     * The bool
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    protected int $bool;
    /**
     * Constructor method for BoolAvailability
     * @uses BoolAvailability::setSearchPlace()
     * @uses BoolAvailability::setBool()
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace
     * @param int $bool
     */
    public function __construct(\Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace, int $bool)
    {
        $this
            ->setSearchPlace($searchPlace)
            ->setBool($bool);
    }
    /**
     * Get searchPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace
     */
    public function getSearchPlace(): \Maetva\ESeason\WebCampServices\StructType\SearchPlace
    {
        return $this->searchPlace;
    }
    /**
     * Set searchPlace value
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolAvailability
     */
    public function setSearchPlace(\Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace): self
    {
        $this->searchPlace = $searchPlace;
        
        return $this;
    }
    /**
     * Get bool value
     * @return int
     */
    public function getBool(): int
    {
        return $this->bool;
    }
    /**
     * Set bool value
     * @param int $bool
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolAvailability
     */
    public function setBool(int $bool): self
    {
        // validation for constraint: int
        if (!is_null($bool) && !(is_int($bool) || ctype_digit($bool))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bool, true), gettype($bool)), __LINE__);
        }
        $this->bool = $bool;
        
        return $this;
    }
}
