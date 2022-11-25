<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgAvailability extends AbstractStructBase
{
    /**
     * The availabilityResponseType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $availabilityResponseType = null;
    /**
     * The camping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Camping[]
     */
    protected ?array $camping = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The product
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Product[]
     */
    protected ?array $product = null;
    /**
     * The stay
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Stay[]
     */
    protected ?array $stay = null;
    /**
     * The tariffProduct
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\TariffProduct[]
     */
    protected ?array $tariffProduct = null;
    /**
     * The hasMore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hasMore = null;
    /**
     * Constructor method for ResponseCpgAvailability
     * @uses ResponseCpgAvailability::setAvailabilityResponseType()
     * @uses ResponseCpgAvailability::setCamping()
     * @uses ResponseCpgAvailability::setError()
     * @uses ResponseCpgAvailability::setMessError()
     * @uses ResponseCpgAvailability::setIdUser()
     * @uses ResponseCpgAvailability::setProduct()
     * @uses ResponseCpgAvailability::setStay()
     * @uses ResponseCpgAvailability::setTariffProduct()
     * @uses ResponseCpgAvailability::setHasMore()
     * @param string[] $availabilityResponseType
     * @param \Maetva\ESeason\WebCampServices\StructType\Camping[] $camping
     * @param string $error
     * @param string $messError
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\Product[] $product
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay[] $stay
     * @param \Maetva\ESeason\WebCampServices\StructType\TariffProduct[] $tariffProduct
     * @param bool $hasMore
     */
    public function __construct(?array $availabilityResponseType = null, ?array $camping = null, ?string $error = null, ?string $messError = null, ?string $idUser = null, ?array $product = null, ?array $stay = null, ?array $tariffProduct = null, ?bool $hasMore = null)
    {
        $this
            ->setAvailabilityResponseType($availabilityResponseType)
            ->setCamping($camping)
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser)
            ->setProduct($product)
            ->setStay($stay)
            ->setTariffProduct($tariffProduct)
            ->setHasMore($hasMore);
    }
    /**
     * Get availabilityResponseType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getAvailabilityResponseType(): ?array
    {
        return isset($this->availabilityResponseType) ? $this->availabilityResponseType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAvailabilityResponseType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailabilityResponseType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailabilityResponseTypeForArrayConstraintsFromSetAvailabilityResponseType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgAvailabilityAvailabilityResponseTypeItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid($responseCpgAvailabilityAvailabilityResponseTypeItem)) {
                $invalidValues[] = is_object($responseCpgAvailabilityAvailabilityResponseTypeItem) ? get_class($responseCpgAvailabilityAvailabilityResponseTypeItem) : sprintf('%s(%s)', gettype($responseCpgAvailabilityAvailabilityResponseTypeItem), var_export($responseCpgAvailabilityAvailabilityResponseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set availabilityResponseType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $availabilityResponseType
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setAvailabilityResponseType(?array $availabilityResponseType = null): self
    {
        // validation for constraint: array
        if ('' !== ($availabilityResponseTypeArrayErrorMessage = self::validateAvailabilityResponseTypeForArrayConstraintsFromSetAvailabilityResponseType($availabilityResponseType))) {
            throw new InvalidArgumentException($availabilityResponseTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($availabilityResponseType) || (is_array($availabilityResponseType) && empty($availabilityResponseType))) {
            unset($this->availabilityResponseType);
        } else {
            $this->availabilityResponseType = $availabilityResponseType;
        }
        
        return $this;
    }
    /**
     * Add item to availabilityResponseType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function addToAvailabilityResponseType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\AvailabilityResponseType::getValidValues())), __LINE__);
        }
        $this->availabilityResponseType[] = $item;
        
        return $this;
    }
    /**
     * Get camping value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Camping[]
     */
    public function getCamping(): ?array
    {
        return isset($this->camping) ? $this->camping : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCamping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCamping method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCampingForArrayConstraintsFromSetCamping(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgAvailabilityCampingItem) {
            // validation for constraint: itemType
            if (!$responseCpgAvailabilityCampingItem instanceof \Maetva\ESeason\WebCampServices\StructType\Camping) {
                $invalidValues[] = is_object($responseCpgAvailabilityCampingItem) ? get_class($responseCpgAvailabilityCampingItem) : sprintf('%s(%s)', gettype($responseCpgAvailabilityCampingItem), var_export($responseCpgAvailabilityCampingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The camping property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Camping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set camping value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Camping[] $camping
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setCamping(?array $camping = null): self
    {
        // validation for constraint: array
        if ('' !== ($campingArrayErrorMessage = self::validateCampingForArrayConstraintsFromSetCamping($camping))) {
            throw new InvalidArgumentException($campingArrayErrorMessage, __LINE__);
        }
        if (is_null($camping) || (is_array($camping) && empty($camping))) {
            unset($this->camping);
        } else {
            $this->camping = $camping;
        }
        
        return $this;
    }
    /**
     * Add item to camping value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Camping $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function addToCamping(\Maetva\ESeason\WebCampServices\StructType\Camping $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Camping) {
            throw new InvalidArgumentException(sprintf('The camping property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Camping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->camping[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues()
     * @throws InvalidArgumentException
     * @param string $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Errors', is_array($error) ? implode(', ', $error) : var_export($error, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues())), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return isset($this->messError) ? $this->messError : null;
    }
    /**
     * Set messError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        if (is_null($messError) || (is_array($messError) && empty($messError))) {
            unset($this->messError);
        } else {
            $this->messError = $messError;
        }
        
        return $this;
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
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
     * Get product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Product[]
     */
    public function getProduct(): ?array
    {
        return isset($this->product) ? $this->product : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgAvailabilityProductItem) {
            // validation for constraint: itemType
            if (!$responseCpgAvailabilityProductItem instanceof \Maetva\ESeason\WebCampServices\StructType\Product) {
                $invalidValues[] = is_object($responseCpgAvailabilityProductItem) ? get_class($responseCpgAvailabilityProductItem) : sprintf('%s(%s)', gettype($responseCpgAvailabilityProductItem), var_export($responseCpgAvailabilityProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The product property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Product, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Product[] $product
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setProduct(?array $product = null): self
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->product);
        } else {
            $this->product = $product;
        }
        
        return $this;
    }
    /**
     * Add item to product value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Product $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function addToProduct(\Maetva\ESeason\WebCampServices\StructType\Product $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Product) {
            throw new InvalidArgumentException(sprintf('The product property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Product, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->product[] = $item;
        
        return $this;
    }
    /**
     * Get stay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay[]
     */
    public function getStay(): ?array
    {
        return isset($this->stay) ? $this->stay : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStay method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStay method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStayForArrayConstraintsFromSetStay(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgAvailabilityStayItem) {
            // validation for constraint: itemType
            if (!$responseCpgAvailabilityStayItem instanceof \Maetva\ESeason\WebCampServices\StructType\Stay) {
                $invalidValues[] = is_object($responseCpgAvailabilityStayItem) ? get_class($responseCpgAvailabilityStayItem) : sprintf('%s(%s)', gettype($responseCpgAvailabilityStayItem), var_export($responseCpgAvailabilityStayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The stay property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Stay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set stay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay[] $stay
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setStay(?array $stay = null): self
    {
        // validation for constraint: array
        if ('' !== ($stayArrayErrorMessage = self::validateStayForArrayConstraintsFromSetStay($stay))) {
            throw new InvalidArgumentException($stayArrayErrorMessage, __LINE__);
        }
        if (is_null($stay) || (is_array($stay) && empty($stay))) {
            unset($this->stay);
        } else {
            $this->stay = $stay;
        }
        
        return $this;
    }
    /**
     * Add item to stay value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function addToStay(\Maetva\ESeason\WebCampServices\StructType\Stay $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Stay) {
            throw new InvalidArgumentException(sprintf('The stay property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Stay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->stay[] = $item;
        
        return $this;
    }
    /**
     * Get tariffProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\TariffProduct[]
     */
    public function getTariffProduct(): ?array
    {
        return isset($this->tariffProduct) ? $this->tariffProduct : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTariffProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTariffProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTariffProductForArrayConstraintsFromSetTariffProduct(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgAvailabilityTariffProductItem) {
            // validation for constraint: itemType
            if (!$responseCpgAvailabilityTariffProductItem instanceof \Maetva\ESeason\WebCampServices\StructType\TariffProduct) {
                $invalidValues[] = is_object($responseCpgAvailabilityTariffProductItem) ? get_class($responseCpgAvailabilityTariffProductItem) : sprintf('%s(%s)', gettype($responseCpgAvailabilityTariffProductItem), var_export($responseCpgAvailabilityTariffProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tariffProduct property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\TariffProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tariffProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\TariffProduct[] $tariffProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setTariffProduct(?array $tariffProduct = null): self
    {
        // validation for constraint: array
        if ('' !== ($tariffProductArrayErrorMessage = self::validateTariffProductForArrayConstraintsFromSetTariffProduct($tariffProduct))) {
            throw new InvalidArgumentException($tariffProductArrayErrorMessage, __LINE__);
        }
        if (is_null($tariffProduct) || (is_array($tariffProduct) && empty($tariffProduct))) {
            unset($this->tariffProduct);
        } else {
            $this->tariffProduct = $tariffProduct;
        }
        
        return $this;
    }
    /**
     * Add item to tariffProduct value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\TariffProduct $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function addToTariffProduct(\Maetva\ESeason\WebCampServices\StructType\TariffProduct $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\TariffProduct) {
            throw new InvalidArgumentException(sprintf('The tariffProduct property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\TariffProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tariffProduct[] = $item;
        
        return $this;
    }
    /**
     * Get hasMore value
     * @return bool|null
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }
    /**
     * Set hasMore value
     * @param bool $hasMore
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability
     */
    public function setHasMore(?bool $hasMore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMore) && !is_bool($hasMore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMore, true), gettype($hasMore)), __LINE__);
        }
        $this->hasMore = $hasMore;
        
        return $this;
    }
}
