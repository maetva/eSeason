<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * @subpackage Structs
 */
class Vehicle extends AbstractStructBase
{
    /**
     * The licensePlate
     * @var string|null
     */
    protected ?string $licensePlate = null;
    /**
     * The idOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The hashVehicle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $hashVehicle = null;
    /**
     * The takePartToStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $takePartToStay = null;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setLicensePlate()
     * @uses Vehicle::setIdOrder()
     * @uses Vehicle::setHashVehicle()
     * @uses Vehicle::setTakePartToStay()
     * @param string $licensePlate
     * @param string $idOrder
     * @param string $hashVehicle
     * @param bool $takePartToStay
     */
    public function __construct(?string $licensePlate = null, ?string $idOrder = null, ?string $hashVehicle = null, ?bool $takePartToStay = null)
    {
        $this
            ->setLicensePlate($licensePlate)
            ->setIdOrder($idOrder)
            ->setHashVehicle($hashVehicle)
            ->setTakePartToStay($takePartToStay);
    }
    /**
     * Get licensePlate value
     * @return string|null
     */
    public function getLicensePlate(): ?string
    {
        return $this->licensePlate;
    }
    /**
     * Set licensePlate value
     * @param string $licensePlate
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle
     */
    public function setLicensePlate(?string $licensePlate = null): self
    {
        // validation for constraint: string
        if (!is_null($licensePlate) && !is_string($licensePlate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licensePlate, true), gettype($licensePlate)), __LINE__);
        }
        $this->licensePlate = $licensePlate;
        
        return $this;
    }
    /**
     * Get idOrder value
     * @return string|null
     */
    public function getIdOrder(): ?string
    {
        return $this->idOrder;
    }
    /**
     * Set idOrder value
     * @param string $idOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle
     */
    public function setIdOrder(?string $idOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($idOrder) && !is_string($idOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOrder, true), gettype($idOrder)), __LINE__);
        }
        $this->idOrder = $idOrder;
        
        return $this;
    }
    /**
     * Get hashVehicle value
     * @return string|null
     */
    public function getHashVehicle(): ?string
    {
        return $this->hashVehicle;
    }
    /**
     * Set hashVehicle value
     * @param string $hashVehicle
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle
     */
    public function setHashVehicle(?string $hashVehicle = null): self
    {
        // validation for constraint: string
        if (!is_null($hashVehicle) && !is_string($hashVehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hashVehicle, true), gettype($hashVehicle)), __LINE__);
        }
        $this->hashVehicle = $hashVehicle;
        
        return $this;
    }
    /**
     * Get takePartToStay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getTakePartToStay(): ?bool
    {
        return isset($this->takePartToStay) ? $this->takePartToStay : null;
    }
    /**
     * Set takePartToStay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $takePartToStay
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle
     */
    public function setTakePartToStay(?bool $takePartToStay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($takePartToStay) && !is_bool($takePartToStay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($takePartToStay, true), gettype($takePartToStay)), __LINE__);
        }
        if (is_null($takePartToStay) || (is_array($takePartToStay) && empty($takePartToStay))) {
            unset($this->takePartToStay);
        } else {
            $this->takePartToStay = $takePartToStay;
        }
        
        return $this;
    }
}
