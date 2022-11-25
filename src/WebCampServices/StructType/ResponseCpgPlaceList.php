<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgPlaceList StructType
 * @subpackage Structs
 */
class ResponseCpgPlaceList extends AbstractStructBase
{
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
     * The place
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\PlaceInfo[]
     */
    protected ?array $place = null;
    /**
     * Constructor method for ResponseCpgPlaceList
     * @uses ResponseCpgPlaceList::setError()
     * @uses ResponseCpgPlaceList::setMessError()
     * @uses ResponseCpgPlaceList::setIdUser()
     * @uses ResponseCpgPlaceList::setPlace()
     * @param string $error
     * @param string $messError
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\PlaceInfo[] $place
     */
    public function __construct(?string $error = null, ?string $messError = null, ?string $idUser = null, ?array $place = null)
    {
        $this
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser)
            ->setPlace($place);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList
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
     * Get place value
     * @return \Maetva\ESeason\WebCampServices\StructType\PlaceInfo[]
     */
    public function getPlace(): ?array
    {
        return $this->place;
    }
    /**
     * This method is responsible for validating the values passed to the setPlace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlaceForArrayConstraintsFromSetPlace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgPlaceListPlaceItem) {
            // validation for constraint: itemType
            if (!$responseCpgPlaceListPlaceItem instanceof \Maetva\ESeason\WebCampServices\StructType\PlaceInfo) {
                $invalidValues[] = is_object($responseCpgPlaceListPlaceItem) ? get_class($responseCpgPlaceListPlaceItem) : sprintf('%s(%s)', gettype($responseCpgPlaceListPlaceItem), var_export($responseCpgPlaceListPlaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The place property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\PlaceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set place value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\PlaceInfo[] $place
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList
     */
    public function setPlace(?array $place = null): self
    {
        // validation for constraint: array
        if ('' !== ($placeArrayErrorMessage = self::validatePlaceForArrayConstraintsFromSetPlace($place))) {
            throw new InvalidArgumentException($placeArrayErrorMessage, __LINE__);
        }
        $this->place = $place;
        
        return $this;
    }
    /**
     * Add item to place value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\PlaceInfo $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList
     */
    public function addToPlace(\Maetva\ESeason\WebCampServices\StructType\PlaceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\PlaceInfo) {
            throw new InvalidArgumentException(sprintf('The place property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\PlaceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->place[] = $item;
        
        return $this;
    }
}
