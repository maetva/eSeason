<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GPSCoordinates StructType
 * @subpackage Structs
 */
class GPSCoordinates extends AbstractStructBase
{
    /**
     * The latitude
     * @var string|null
     */
    protected ?string $latitude = null;
    /**
     * The longitude
     * @var string|null
     */
    protected ?string $longitude = null;
    /**
     * Constructor method for GPSCoordinates
     * @uses GPSCoordinates::setLatitude()
     * @uses GPSCoordinates::setLongitude()
     * @param string $latitude
     * @param string $longitude
     */
    public function __construct(?string $latitude = null, ?string $longitude = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \Maetva\ESeason\WebCampServices\StructType\GPSCoordinates
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
}
