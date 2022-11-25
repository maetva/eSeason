<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgBoolSiteAvailability StructType
 * @subpackage Structs
 */
class RequestCpgBoolSiteAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The idsite
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $idsite = null;
    /**
     * The begin
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The nbPers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $nbPers = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The wichStock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $wichStock = null;
    /**
     * The criterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $criterion = null;
    /**
     * The categoryType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $categoryType = null;
    /**
     * The surface
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $surface = null;
    /**
     * The room
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $room = null;
    /**
     * The bathroom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $bathroom = null;
    /**
     * The responseType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $responseType = null;
    /**
     * The externalCriterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion[]
     */
    protected ?array $externalCriterion = null;
    /**
     * Constructor method for RequestCpgBoolSiteAvailability
     * @uses RequestCpgBoolSiteAvailability::setIdUser()
     * @uses RequestCpgBoolSiteAvailability::setPassword()
     * @uses RequestCpgBoolSiteAvailability::setIdsite()
     * @uses RequestCpgBoolSiteAvailability::setBegin()
     * @uses RequestCpgBoolSiteAvailability::setEnd()
     * @uses RequestCpgBoolSiteAvailability::setNbPers()
     * @uses RequestCpgBoolSiteAvailability::setProductType()
     * @uses RequestCpgBoolSiteAvailability::setWichStock()
     * @uses RequestCpgBoolSiteAvailability::setCriterion()
     * @uses RequestCpgBoolSiteAvailability::setCategoryType()
     * @uses RequestCpgBoolSiteAvailability::setSurface()
     * @uses RequestCpgBoolSiteAvailability::setRoom()
     * @uses RequestCpgBoolSiteAvailability::setBathroom()
     * @uses RequestCpgBoolSiteAvailability::setResponseType()
     * @uses RequestCpgBoolSiteAvailability::setExternalCriterion()
     * @param string $idUser
     * @param string $password
     * @param int[] $idsite
     * @param string $begin
     * @param string $end
     * @param int $nbPers
     * @param string $productType
     * @param string $wichStock
     * @param int[] $criterion
     * @param string[] $categoryType
     * @param int $surface
     * @param int $room
     * @param int $bathroom
     * @param int $responseType
     * @param \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion[] $externalCriterion
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?array $idsite = null, ?string $begin = null, ?string $end = null, ?int $nbPers = null, ?string $productType = null, ?string $wichStock = null, ?array $criterion = null, ?array $categoryType = null, ?int $surface = null, ?int $room = null, ?int $bathroom = null, ?int $responseType = null, ?array $externalCriterion = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdsite($idsite)
            ->setBegin($begin)
            ->setEnd($end)
            ->setNbPers($nbPers)
            ->setProductType($productType)
            ->setWichStock($wichStock)
            ->setCriterion($criterion)
            ->setCategoryType($categoryType)
            ->setSurface($surface)
            ->setRoom($room)
            ->setBathroom($bathroom)
            ->setResponseType($responseType)
            ->setExternalCriterion($externalCriterion);
    }
    /**
     * Get idUser value
     * @return string|null
     */
    public function getIdUser(): ?string
    {
        return $this->idUser;
    }
    /**
     * Set idUser value
     * @param string $idUser
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setIdUser(?string $idUser = null): self
    {
        // validation for constraint: string
        if (!is_null($idUser) && !is_string($idUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idUser, true), gettype($idUser)), __LINE__);
        }
        $this->idUser = $idUser;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get idsite value
     * @return int[]
     */
    public function getIdsite(): ?array
    {
        return $this->idsite;
    }
    /**
     * This method is responsible for validating the values passed to the setIdsite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdsite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsiteForArrayConstraintsFromSetIdsite(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgBoolSiteAvailabilityIdsiteItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgBoolSiteAvailabilityIdsiteItem) || ctype_digit($requestCpgBoolSiteAvailabilityIdsiteItem))) {
                $invalidValues[] = is_object($requestCpgBoolSiteAvailabilityIdsiteItem) ? get_class($requestCpgBoolSiteAvailabilityIdsiteItem) : sprintf('%s(%s)', gettype($requestCpgBoolSiteAvailabilityIdsiteItem), var_export($requestCpgBoolSiteAvailabilityIdsiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idsite property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idsite value
     * @throws InvalidArgumentException
     * @param int[] $idsite
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setIdsite(?array $idsite = null): self
    {
        // validation for constraint: array
        if ('' !== ($idsiteArrayErrorMessage = self::validateIdsiteForArrayConstraintsFromSetIdsite($idsite))) {
            throw new InvalidArgumentException($idsiteArrayErrorMessage, __LINE__);
        }
        $this->idsite = $idsite;
        
        return $this;
    }
    /**
     * Add item to idsite value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function addToIdsite(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The idsite property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idsite[] = $item;
        
        return $this;
    }
    /**
     * Get begin value
     * @return string|null
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }
    /**
     * Set begin value
     * @param string $begin
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setBegin(?string $begin = null): self
    {
        // validation for constraint: string
        if (!is_null($begin) && !is_string($begin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin, true), gettype($begin)), __LINE__);
        }
        $this->begin = $begin;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
    /**
     * Get nbPers value
     * @return int|null
     */
    public function getNbPers(): ?int
    {
        return $this->nbPers;
    }
    /**
     * Set nbPers value
     * @param int $nbPers
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setNbPers(?int $nbPers = null): self
    {
        // validation for constraint: int
        if (!is_null($nbPers) && !(is_int($nbPers) || ctype_digit($nbPers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbPers, true), gettype($nbPers)), __LINE__);
        }
        $this->nbPers = $nbPers;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @uses \Maetva\ESeason\PrivateServices\EnumType\LodgingType::valueIsValid()
     * @uses \Maetva\ESeason\PrivateServices\EnumType\LodgingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productType
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\PrivateServices\EnumType\LodgingType::valueIsValid($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\PrivateServices\EnumType\LodgingType', is_array($productType) ? implode(', ', $productType) : var_export($productType, true), implode(', ', \Maetva\ESeason\PrivateServices\EnumType\LodgingType::getValidValues())), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get wichStock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWichStock(): ?string
    {
        return isset($this->wichStock) ? $this->wichStock : null;
    }
    /**
     * Set wichStock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\PrivateServices\EnumType\Stock::valueIsValid()
     * @uses \Maetva\ESeason\PrivateServices\EnumType\Stock::getValidValues()
     * @throws InvalidArgumentException
     * @param string $wichStock
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setWichStock(?string $wichStock = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\PrivateServices\EnumType\Stock::valueIsValid($wichStock)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\PrivateServices\EnumType\Stock', is_array($wichStock) ? implode(', ', $wichStock) : var_export($wichStock, true), implode(', ', \Maetva\ESeason\PrivateServices\EnumType\Stock::getValidValues())), __LINE__);
        }
        if (is_null($wichStock) || (is_array($wichStock) && empty($wichStock))) {
            unset($this->wichStock);
        } else {
            $this->wichStock = $wichStock;
        }
        
        return $this;
    }
    /**
     * Get criterion value
     * @return int[]
     */
    public function getCriterion(): ?array
    {
        return $this->criterion;
    }
    /**
     * This method is responsible for validating the values passed to the setCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriterionForArrayConstraintsFromSetCriterion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgBoolSiteAvailabilityCriterionItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgBoolSiteAvailabilityCriterionItem) || ctype_digit($requestCpgBoolSiteAvailabilityCriterionItem))) {
                $invalidValues[] = is_object($requestCpgBoolSiteAvailabilityCriterionItem) ? get_class($requestCpgBoolSiteAvailabilityCriterionItem) : sprintf('%s(%s)', gettype($requestCpgBoolSiteAvailabilityCriterionItem), var_export($requestCpgBoolSiteAvailabilityCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The criterion property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set criterion value
     * @throws InvalidArgumentException
     * @param int[] $criterion
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setCriterion(?array $criterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($criterionArrayErrorMessage = self::validateCriterionForArrayConstraintsFromSetCriterion($criterion))) {
            throw new InvalidArgumentException($criterionArrayErrorMessage, __LINE__);
        }
        $this->criterion = $criterion;
        
        return $this;
    }
    /**
     * Add item to criterion value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function addToCriterion(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The criterion property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->criterion[] = $item;
        
        return $this;
    }
    /**
     * Get categoryType value
     * @return string[]
     */
    public function getCategoryType(): ?array
    {
        return $this->categoryType;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryTypeForArrayConstraintsFromSetCategoryType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgBoolSiteAvailabilityCategoryTypeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgBoolSiteAvailabilityCategoryTypeItem)) {
                $invalidValues[] = is_object($requestCpgBoolSiteAvailabilityCategoryTypeItem) ? get_class($requestCpgBoolSiteAvailabilityCategoryTypeItem) : sprintf('%s(%s)', gettype($requestCpgBoolSiteAvailabilityCategoryTypeItem), var_export($requestCpgBoolSiteAvailabilityCategoryTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The categoryType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set categoryType value
     * @throws InvalidArgumentException
     * @param string[] $categoryType
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setCategoryType(?array $categoryType = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryTypeArrayErrorMessage = self::validateCategoryTypeForArrayConstraintsFromSetCategoryType($categoryType))) {
            throw new InvalidArgumentException($categoryTypeArrayErrorMessage, __LINE__);
        }
        $this->categoryType = $categoryType;
        
        return $this;
    }
    /**
     * Add item to categoryType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function addToCategoryType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The categoryType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->categoryType[] = $item;
        
        return $this;
    }
    /**
     * Get surface value
     * @return int|null
     */
    public function getSurface(): ?int
    {
        return $this->surface;
    }
    /**
     * Set surface value
     * @param int $surface
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setSurface(?int $surface = null): self
    {
        // validation for constraint: int
        if (!is_null($surface) && !(is_int($surface) || ctype_digit($surface))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($surface, true), gettype($surface)), __LINE__);
        }
        $this->surface = $surface;
        
        return $this;
    }
    /**
     * Get room value
     * @return int|null
     */
    public function getRoom(): ?int
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param int $room
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setRoom(?int $room = null): self
    {
        // validation for constraint: int
        if (!is_null($room) && !(is_int($room) || ctype_digit($room))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($room, true), gettype($room)), __LINE__);
        }
        $this->room = $room;
        
        return $this;
    }
    /**
     * Get bathroom value
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathroom;
    }
    /**
     * Set bathroom value
     * @param int $bathroom
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setBathroom(?int $bathroom = null): self
    {
        // validation for constraint: int
        if (!is_null($bathroom) && !(is_int($bathroom) || ctype_digit($bathroom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bathroom, true), gettype($bathroom)), __LINE__);
        }
        $this->bathroom = $bathroom;
        
        return $this;
    }
    /**
     * Get responseType value
     * @return int|null
     */
    public function getResponseType(): ?int
    {
        return $this->responseType;
    }
    /**
     * Set responseType value
     * @param int $responseType
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setResponseType(?int $responseType = null): self
    {
        // validation for constraint: int
        if (!is_null($responseType) && !(is_int($responseType) || ctype_digit($responseType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseType, true), gettype($responseType)), __LINE__);
        }
        $this->responseType = $responseType;
        
        return $this;
    }
    /**
     * Get externalCriterion value
     * @return \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion[]
     */
    public function getExternalCriterion(): ?array
    {
        return $this->externalCriterion;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalCriterionForArrayConstraintsFromSetExternalCriterion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgBoolSiteAvailabilityExternalCriterionItem) {
            // validation for constraint: itemType
            if (!$requestCpgBoolSiteAvailabilityExternalCriterionItem instanceof \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion) {
                $invalidValues[] = is_object($requestCpgBoolSiteAvailabilityExternalCriterionItem) ? get_class($requestCpgBoolSiteAvailabilityExternalCriterionItem) : sprintf('%s(%s)', gettype($requestCpgBoolSiteAvailabilityExternalCriterionItem), var_export($requestCpgBoolSiteAvailabilityExternalCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The externalCriterion property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set externalCriterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion[] $externalCriterion
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function setExternalCriterion(?array $externalCriterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalCriterionArrayErrorMessage = self::validateExternalCriterionForArrayConstraintsFromSetExternalCriterion($externalCriterion))) {
            throw new InvalidArgumentException($externalCriterionArrayErrorMessage, __LINE__);
        }
        $this->externalCriterion = $externalCriterion;
        
        return $this;
    }
    /**
     * Add item to externalCriterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion $item
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability
     */
    public function addToExternalCriterion(\Maetva\ESeason\PrivateServices\StructType\ExternalCriterion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion) {
            throw new InvalidArgumentException(sprintf('The externalCriterion property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\ExternalCriterion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->externalCriterion[] = $item;
        
        return $this;
    }
}
