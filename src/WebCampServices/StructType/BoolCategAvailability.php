<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoolCategAvailability StructType
 * @subpackage Structs
 */
class BoolCategAvailability extends AbstractStructBase
{
    /**
     * The idProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Maetva\ESeason\WebCampServices\StructType\IdProduct
     */
    protected \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct;
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $externalId;
    /**
     * The availability
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $availability;
    /**
     * Constructor method for BoolCategAvailability
     * @uses BoolCategAvailability::setIdProduct()
     * @uses BoolCategAvailability::setExternalId()
     * @uses BoolCategAvailability::setAvailability()
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @param string $externalId
     * @param string $availability
     */
    public function __construct(\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct, string $externalId, string $availability)
    {
        $this
            ->setIdProduct($idProduct)
            ->setExternalId($externalId)
            ->setAvailability($availability);
    }
    /**
     * Get idProduct value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdProduct
     */
    public function getIdProduct(): \Maetva\ESeason\WebCampServices\StructType\IdProduct
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability
     */
    public function setIdProduct(\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct): self
    {
        $this->idProduct = $idProduct;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability
     */
    public function setExternalId(string $externalId): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
    /**
     * Get availability value
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }
    /**
     * Set availability value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $availability
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability
     */
    public function setAvailability(string $availability): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid($availability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType', is_array($availability) ? implode(', ', $availability) : var_export($availability, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues())), __LINE__);
        }
        $this->availability = $availability;
        
        return $this;
    }
}
