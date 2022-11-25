<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgBoolAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgBoolAvailability extends AbstractStructBase
{
    /**
     * The availability
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\BoolAvailability[]
     */
    protected ?array $availability = null;
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
     * Constructor method for ResponseCpgBoolAvailability
     * @uses ResponseCpgBoolAvailability::setAvailability()
     * @uses ResponseCpgBoolAvailability::setError()
     * @uses ResponseCpgBoolAvailability::setMessError()
     * @uses ResponseCpgBoolAvailability::setIdUser()
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolAvailability[] $availability
     * @param string $error
     * @param string $messError
     * @param string $idUser
     */
    public function __construct(?array $availability = null, ?string $error = null, ?string $messError = null, ?string $idUser = null)
    {
        $this
            ->setAvailability($availability)
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser);
    }
    /**
     * Get availability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolAvailability[]
     */
    public function getAvailability(): ?array
    {
        return isset($this->availability) ? $this->availability : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailabilityForArrayConstraintsFromSetAvailability(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgBoolAvailabilityAvailabilityItem) {
            // validation for constraint: itemType
            if (!$responseCpgBoolAvailabilityAvailabilityItem instanceof \Maetva\ESeason\WebCampServices\StructType\BoolAvailability) {
                $invalidValues[] = is_object($responseCpgBoolAvailabilityAvailabilityItem) ? get_class($responseCpgBoolAvailabilityAvailabilityItem) : sprintf('%s(%s)', gettype($responseCpgBoolAvailabilityAvailabilityItem), var_export($responseCpgBoolAvailabilityAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The availability property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\BoolAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set availability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolAvailability[] $availability
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability
     */
    public function setAvailability(?array $availability = null): self
    {
        // validation for constraint: array
        if ('' !== ($availabilityArrayErrorMessage = self::validateAvailabilityForArrayConstraintsFromSetAvailability($availability))) {
            throw new InvalidArgumentException($availabilityArrayErrorMessage, __LINE__);
        }
        if (is_null($availability) || (is_array($availability) && empty($availability))) {
            unset($this->availability);
        } else {
            $this->availability = $availability;
        }
        
        return $this;
    }
    /**
     * Add item to availability value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolAvailability $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability
     */
    public function addToAvailability(\Maetva\ESeason\WebCampServices\StructType\BoolAvailability $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\BoolAvailability) {
            throw new InvalidArgumentException(sprintf('The availability property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\BoolAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->availability[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability
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
}
