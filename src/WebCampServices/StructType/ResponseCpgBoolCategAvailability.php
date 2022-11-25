<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgBoolCategAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgBoolCategAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The availability
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability[]
     */
    protected ?array $availability = null;
    /**
     * The error
     * @var int|null
     */
    protected ?int $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * Constructor method for ResponseCpgBoolCategAvailability
     * @uses ResponseCpgBoolCategAvailability::setIdUser()
     * @uses ResponseCpgBoolCategAvailability::setAvailability()
     * @uses ResponseCpgBoolCategAvailability::setError()
     * @uses ResponseCpgBoolCategAvailability::setMessError()
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability[] $availability
     * @param int $error
     * @param string $messError
     */
    public function __construct(?string $idUser = null, ?array $availability = null, ?int $error = null, ?string $messError = null)
    {
        $this
            ->setIdUser($idUser)
            ->setAvailability($availability)
            ->setError($error)
            ->setMessError($messError);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability
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
     * Get availability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability[]
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
        foreach ($values as $responseCpgBoolCategAvailabilityAvailabilityItem) {
            // validation for constraint: itemType
            if (!$responseCpgBoolCategAvailabilityAvailabilityItem instanceof \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability) {
                $invalidValues[] = is_object($responseCpgBoolCategAvailabilityAvailabilityItem) ? get_class($responseCpgBoolCategAvailabilityAvailabilityItem) : sprintf('%s(%s)', gettype($responseCpgBoolCategAvailabilityAvailabilityItem), var_export($responseCpgBoolCategAvailabilityAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The availability property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set availability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability[] $availability
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability
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
     * @param \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability
     */
    public function addToAvailability(\Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability) {
            throw new InvalidArgumentException(sprintf('The availability property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\BoolCategAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->availability[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return int|null
     */
    public function getError(): ?int
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param int $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability
     */
    public function setError(?int $error = null): self
    {
        // validation for constraint: int
        if (!is_null($error) && !(is_int($error) || ctype_digit($error))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($error, true), gettype($error)), __LINE__);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability
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
}
