<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgContext StructType
 * @subpackage Structs
 */
class ResponseCpgContext extends AbstractStructBase
{
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
     * The context
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Context[]
     */
    protected ?array $context = null;
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
     * The tariffProduct
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\TariffProduct[]
     */
    protected ?array $tariffProduct = null;
    /**
     * The season
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Season[]
     */
    protected ?array $season = null;
    /**
     * The optinContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\OptinContext|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\OptinContext $optinContext = null;
    /**
     * The edmEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $edmEnabled = null;
    /**
     * Constructor method for ResponseCpgContext
     * @uses ResponseCpgContext::setCamping()
     * @uses ResponseCpgContext::setContext()
     * @uses ResponseCpgContext::setError()
     * @uses ResponseCpgContext::setMessError()
     * @uses ResponseCpgContext::setIdUser()
     * @uses ResponseCpgContext::setProduct()
     * @uses ResponseCpgContext::setTariffProduct()
     * @uses ResponseCpgContext::setSeason()
     * @uses ResponseCpgContext::setOptinContext()
     * @uses ResponseCpgContext::setEdmEnabled()
     * @param \Maetva\ESeason\WebCampServices\StructType\Camping[] $camping
     * @param \Maetva\ESeason\WebCampServices\StructType\Context[] $context
     * @param string $error
     * @param string $messError
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\Product[] $product
     * @param \Maetva\ESeason\WebCampServices\StructType\TariffProduct[] $tariffProduct
     * @param \Maetva\ESeason\WebCampServices\StructType\Season[] $season
     * @param \Maetva\ESeason\WebCampServices\StructType\OptinContext $optinContext
     * @param bool $edmEnabled
     */
    public function __construct(?array $camping = null, ?array $context = null, ?string $error = null, ?string $messError = null, ?string $idUser = null, ?array $product = null, ?array $tariffProduct = null, ?array $season = null, ?\Maetva\ESeason\WebCampServices\StructType\OptinContext $optinContext = null, ?bool $edmEnabled = null)
    {
        $this
            ->setCamping($camping)
            ->setContext($context)
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser)
            ->setProduct($product)
            ->setTariffProduct($tariffProduct)
            ->setSeason($season)
            ->setOptinContext($optinContext)
            ->setEdmEnabled($edmEnabled);
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
        foreach ($values as $responseCpgContextCampingItem) {
            // validation for constraint: itemType
            if (!$responseCpgContextCampingItem instanceof \Maetva\ESeason\WebCampServices\StructType\Camping) {
                $invalidValues[] = is_object($responseCpgContextCampingItem) ? get_class($responseCpgContextCampingItem) : sprintf('%s(%s)', gettype($responseCpgContextCampingItem), var_export($responseCpgContextCampingItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * Get context value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Context[]
     */
    public function getContext(): ?array
    {
        return isset($this->context) ? $this->context : null;
    }
    /**
     * This method is responsible for validating the values passed to the setContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextForArrayConstraintsFromSetContext(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgContextContextItem) {
            // validation for constraint: itemType
            if (!$responseCpgContextContextItem instanceof \Maetva\ESeason\WebCampServices\StructType\Context) {
                $invalidValues[] = is_object($responseCpgContextContextItem) ? get_class($responseCpgContextContextItem) : sprintf('%s(%s)', gettype($responseCpgContextContextItem), var_export($responseCpgContextContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The context property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Context, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set context value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Context[] $context
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function setContext(?array $context = null): self
    {
        // validation for constraint: array
        if ('' !== ($contextArrayErrorMessage = self::validateContextForArrayConstraintsFromSetContext($context))) {
            throw new InvalidArgumentException($contextArrayErrorMessage, __LINE__);
        }
        if (is_null($context) || (is_array($context) && empty($context))) {
            unset($this->context);
        } else {
            $this->context = $context;
        }
        
        return $this;
    }
    /**
     * Add item to context value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Context $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function addToContext(\Maetva\ESeason\WebCampServices\StructType\Context $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Context) {
            throw new InvalidArgumentException(sprintf('The context property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Context, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->context[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
        foreach ($values as $responseCpgContextProductItem) {
            // validation for constraint: itemType
            if (!$responseCpgContextProductItem instanceof \Maetva\ESeason\WebCampServices\StructType\Product) {
                $invalidValues[] = is_object($responseCpgContextProductItem) ? get_class($responseCpgContextProductItem) : sprintf('%s(%s)', gettype($responseCpgContextProductItem), var_export($responseCpgContextProductItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
        foreach ($values as $responseCpgContextTariffProductItem) {
            // validation for constraint: itemType
            if (!$responseCpgContextTariffProductItem instanceof \Maetva\ESeason\WebCampServices\StructType\TariffProduct) {
                $invalidValues[] = is_object($responseCpgContextTariffProductItem) ? get_class($responseCpgContextTariffProductItem) : sprintf('%s(%s)', gettype($responseCpgContextTariffProductItem), var_export($responseCpgContextTariffProductItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
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
     * Get season value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Season[]
     */
    public function getSeason(): ?array
    {
        return isset($this->season) ? $this->season : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSeason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeasonForArrayConstraintsFromSetSeason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgContextSeasonItem) {
            // validation for constraint: itemType
            if (!$responseCpgContextSeasonItem instanceof \Maetva\ESeason\WebCampServices\StructType\Season) {
                $invalidValues[] = is_object($responseCpgContextSeasonItem) ? get_class($responseCpgContextSeasonItem) : sprintf('%s(%s)', gettype($responseCpgContextSeasonItem), var_export($responseCpgContextSeasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The season property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Season, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set season value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Season[] $season
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function setSeason(?array $season = null): self
    {
        // validation for constraint: array
        if ('' !== ($seasonArrayErrorMessage = self::validateSeasonForArrayConstraintsFromSetSeason($season))) {
            throw new InvalidArgumentException($seasonArrayErrorMessage, __LINE__);
        }
        if (is_null($season) || (is_array($season) && empty($season))) {
            unset($this->season);
        } else {
            $this->season = $season;
        }
        
        return $this;
    }
    /**
     * Add item to season value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Season $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function addToSeason(\Maetva\ESeason\WebCampServices\StructType\Season $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Season) {
            throw new InvalidArgumentException(sprintf('The season property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Season, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->season[] = $item;
        
        return $this;
    }
    /**
     * Get optinContext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinContext|null
     */
    public function getOptinContext(): ?\Maetva\ESeason\WebCampServices\StructType\OptinContext
    {
        return isset($this->optinContext) ? $this->optinContext : null;
    }
    /**
     * Set optinContext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\OptinContext $optinContext
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function setOptinContext(?\Maetva\ESeason\WebCampServices\StructType\OptinContext $optinContext = null): self
    {
        if (is_null($optinContext) || (is_array($optinContext) && empty($optinContext))) {
            unset($this->optinContext);
        } else {
            $this->optinContext = $optinContext;
        }
        
        return $this;
    }
    /**
     * Get edmEnabled value
     * @return bool|null
     */
    public function getEdmEnabled(): ?bool
    {
        return $this->edmEnabled;
    }
    /**
     * Set edmEnabled value
     * @param bool $edmEnabled
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext
     */
    public function setEdmEnabled(?bool $edmEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($edmEnabled) && !is_bool($edmEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($edmEnabled, true), gettype($edmEnabled)), __LINE__);
        }
        $this->edmEnabled = $edmEnabled;
        
        return $this;
    }
}
