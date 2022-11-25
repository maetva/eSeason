<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgSimpleSearch StructType
 * @subpackage Structs
 */
class ResponseCpgSimpleSearch extends AbstractStructBase
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
     * The stay
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Stay[]
     */
    protected ?array $stay = null;
    /**
     * Constructor method for ResponseCpgSimpleSearch
     * @uses ResponseCpgSimpleSearch::setCamping()
     * @uses ResponseCpgSimpleSearch::setError()
     * @uses ResponseCpgSimpleSearch::setMessError()
     * @uses ResponseCpgSimpleSearch::setIdUser()
     * @uses ResponseCpgSimpleSearch::setStay()
     * @param \Maetva\ESeason\WebCampServices\StructType\Camping[] $camping
     * @param string $error
     * @param string $messError
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay[] $stay
     */
    public function __construct(?array $camping = null, ?string $error = null, ?string $messError = null, ?string $idUser = null, ?array $stay = null)
    {
        $this
            ->setCamping($camping)
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser)
            ->setStay($stay);
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
        foreach ($values as $responseCpgSimpleSearchCampingItem) {
            // validation for constraint: itemType
            if (!$responseCpgSimpleSearchCampingItem instanceof \Maetva\ESeason\WebCampServices\StructType\Camping) {
                $invalidValues[] = is_object($responseCpgSimpleSearchCampingItem) ? get_class($responseCpgSimpleSearchCampingItem) : sprintf('%s(%s)', gettype($responseCpgSimpleSearchCampingItem), var_export($responseCpgSimpleSearchCampingItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
        foreach ($values as $responseCpgSimpleSearchStayItem) {
            // validation for constraint: itemType
            if (!$responseCpgSimpleSearchStayItem instanceof \Maetva\ESeason\WebCampServices\StructType\Stay) {
                $invalidValues[] = is_object($responseCpgSimpleSearchStayItem) ? get_class($responseCpgSimpleSearchStayItem) : sprintf('%s(%s)', gettype($responseCpgSimpleSearchStayItem), var_export($responseCpgSimpleSearchStayItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch
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
}
