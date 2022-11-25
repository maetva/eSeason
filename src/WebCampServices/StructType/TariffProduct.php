<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TariffProduct StructType
 * @subpackage Structs
 */
class TariffProduct extends AbstractStructBase
{
    /**
     * The idTariff
     * @var \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null;
    /**
     * The idSite
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * The shortDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shortDescription = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    protected ?array $supplement = null;
    /**
     * The typeTariff
     * @var string|null
     */
    protected ?string $typeTariff = null;
    /**
     * The personSaleDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personSaleDescription = null;
    /**
     * The personSalePictures
     * Meta information extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    protected ?array $personSalePictures = null;
    /**
     * The personSale
     * @var bool|null
     */
    protected ?bool $personSale = null;
    /**
     * Constructor method for TariffProduct
     * @uses TariffProduct::setIdTariff()
     * @uses TariffProduct::setIdSite()
     * @uses TariffProduct::setShortDescription()
     * @uses TariffProduct::setSupplement()
     * @uses TariffProduct::setTypeTariff()
     * @uses TariffProduct::setPersonSaleDescription()
     * @uses TariffProduct::setPersonSalePictures()
     * @uses TariffProduct::setPersonSale()
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff
     * @param int $idSite
     * @param string $shortDescription
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplement
     * @param string $typeTariff
     * @param string $personSaleDescription
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $personSalePictures
     * @param bool $personSale
     */
    public function __construct(?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null, ?int $idSite = null, ?string $shortDescription = null, ?array $supplement = null, ?string $typeTariff = null, ?string $personSaleDescription = null, ?array $personSalePictures = null, ?bool $personSale = null)
    {
        $this
            ->setIdTariff($idTariff)
            ->setIdSite($idSite)
            ->setShortDescription($shortDescription)
            ->setSupplement($supplement)
            ->setTypeTariff($typeTariff)
            ->setPersonSaleDescription($personSaleDescription)
            ->setPersonSalePictures($personSalePictures)
            ->setPersonSale($personSale);
    }
    /**
     * Get idTariff value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    public function getIdTariff(): ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct
    {
        return $this->idTariff;
    }
    /**
     * Set idTariff value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setIdTariff(?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null): self
    {
        $this->idTariff = $idTariff;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
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
    /**
     * Get shortDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return isset($this->shortDescription) ? $this->shortDescription : null;
    }
    /**
     * Set shortDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shortDescription
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setShortDescription(?string $shortDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortDescription, true), gettype($shortDescription)), __LINE__);
        }
        if (is_null($shortDescription) || (is_array($shortDescription) && empty($shortDescription))) {
            unset($this->shortDescription);
        } else {
            $this->shortDescription = $shortDescription;
        }
        
        return $this;
    }
    /**
     * Get supplement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    public function getSupplement(): ?array
    {
        return isset($this->supplement) ? $this->supplement : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementForArrayConstraintsFromSetSupplement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tariffProductSupplementItem) {
            // validation for constraint: itemType
            if (!$tariffProductSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($tariffProductSupplementItem) ? get_class($tariffProductSupplementItem) : sprintf('%s(%s)', gettype($tariffProductSupplementItem), var_export($tariffProductSupplementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplement
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setSupplement(?array $supplement = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementArrayErrorMessage = self::validateSupplementForArrayConstraintsFromSetSupplement($supplement))) {
            throw new InvalidArgumentException($supplementArrayErrorMessage, __LINE__);
        }
        if (is_null($supplement) || (is_array($supplement) && empty($supplement))) {
            unset($this->supplement);
        } else {
            $this->supplement = $supplement;
        }
        
        return $this;
    }
    /**
     * Add item to supplement value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement $item
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function addToSupplement(\Maetva\ESeason\WebCampServices\StructType\Supplement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
            throw new InvalidArgumentException(sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplement[] = $item;
        
        return $this;
    }
    /**
     * Get typeTariff value
     * @return string|null
     */
    public function getTypeTariff(): ?string
    {
        return $this->typeTariff;
    }
    /**
     * Set typeTariff value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typeTariff
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setTypeTariff(?string $typeTariff = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\LodgingType::valueIsValid($typeTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\LodgingType', is_array($typeTariff) ? implode(', ', $typeTariff) : var_export($typeTariff, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\LodgingType::getValidValues())), __LINE__);
        }
        $this->typeTariff = $typeTariff;
        
        return $this;
    }
    /**
     * Get personSaleDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonSaleDescription(): ?string
    {
        return isset($this->personSaleDescription) ? $this->personSaleDescription : null;
    }
    /**
     * Set personSaleDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personSaleDescription
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setPersonSaleDescription(?string $personSaleDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($personSaleDescription) && !is_string($personSaleDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personSaleDescription, true), gettype($personSaleDescription)), __LINE__);
        }
        if (is_null($personSaleDescription) || (is_array($personSaleDescription) && empty($personSaleDescription))) {
            unset($this->personSaleDescription);
        } else {
            $this->personSaleDescription = $personSaleDescription;
        }
        
        return $this;
    }
    /**
     * Get personSalePictures value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    public function getPersonSalePictures(): ?array
    {
        return isset($this->personSalePictures) ? $this->personSalePictures : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPersonSalePictures method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonSalePictures method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonSalePicturesForArrayConstraintsFromSetPersonSalePictures(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tariffProductPersonSalePicturesItem) {
            // validation for constraint: itemType
            if (!$tariffProductPersonSalePicturesItem instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
                $invalidValues[] = is_object($tariffProductPersonSalePicturesItem) ? get_class($tariffProductPersonSalePicturesItem) : sprintf('%s(%s)', gettype($tariffProductPersonSalePicturesItem), var_export($tariffProductPersonSalePicturesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personSalePictures property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personSalePictures value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $personSalePictures
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setPersonSalePictures(?array $personSalePictures = null): self
    {
        // validation for constraint: array
        if ('' !== ($personSalePicturesArrayErrorMessage = self::validatePersonSalePicturesForArrayConstraintsFromSetPersonSalePictures($personSalePictures))) {
            throw new InvalidArgumentException($personSalePicturesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($personSalePictures) && count($personSalePictures) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 7', count($personSalePictures)), __LINE__);
        }
        if (is_null($personSalePictures) || (is_array($personSalePictures) && empty($personSalePictures))) {
            unset($this->personSalePictures);
        } else {
            $this->personSalePictures = $personSalePictures;
        }
        
        return $this;
    }
    /**
     * Add item to personSalePictures value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function addToPersonSalePictures(\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
            throw new InvalidArgumentException(sprintf('The personSalePictures property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($this->personSalePictures) && count($this->personSalePictures) >= 7) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 7', count($this->personSalePictures)), __LINE__);
        }
        $this->personSalePictures[] = $item;
        
        return $this;
    }
    /**
     * Get personSale value
     * @return bool|null
     */
    public function getPersonSale(): ?bool
    {
        return $this->personSale;
    }
    /**
     * Set personSale value
     * @param bool $personSale
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct
     */
    public function setPersonSale(?bool $personSale = null): self
    {
        // validation for constraint: boolean
        if (!is_null($personSale) && !is_bool($personSale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($personSale, true), gettype($personSale)), __LINE__);
        }
        $this->personSale = $personSale;
        
        return $this;
    }
}
