<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgCategAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgCategAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The error
     * @var int|null
     */
    protected ?int $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messError = null;
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
     * The stay
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\PrivateServices\StructType\Stay[]
     */
    protected ?array $stay = null;
    /**
     * The hasMore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hasMore = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $status = null;
    /**
     * The flexDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexDate = null;
    /**
     * The flexCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexCapacity = null;
    /**
     * The nbStays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $nbStays = null;
    /**
     * The codeNoDispo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $codeNoDispo = null;
    /**
     * The messCodeNoDispo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messCodeNoDispo = null;
    /**
     * Constructor method for ResponseCpgCategAvailability
     * @uses ResponseCpgCategAvailability::setIdUser()
     * @uses ResponseCpgCategAvailability::setError()
     * @uses ResponseCpgCategAvailability::setMessError()
     * @uses ResponseCpgCategAvailability::setAvailabilityResponseType()
     * @uses ResponseCpgCategAvailability::setStay()
     * @uses ResponseCpgCategAvailability::setHasMore()
     * @uses ResponseCpgCategAvailability::setStatus()
     * @uses ResponseCpgCategAvailability::setFlexDate()
     * @uses ResponseCpgCategAvailability::setFlexCapacity()
     * @uses ResponseCpgCategAvailability::setNbStays()
     * @uses ResponseCpgCategAvailability::setCodeNoDispo()
     * @uses ResponseCpgCategAvailability::setMessCodeNoDispo()
     * @param string $idUser
     * @param int $error
     * @param string $messError
     * @param string[] $availabilityResponseType
     * @param \Maetva\ESeason\PrivateServices\StructType\Stay[] $stay
     * @param bool $hasMore
     * @param bool $status
     * @param bool $flexDate
     * @param bool $flexCapacity
     * @param int $nbStays
     * @param int $codeNoDispo
     * @param string $messCodeNoDispo
     */
    public function __construct(?string $idUser = null, ?int $error = null, ?string $messError = null, ?array $availabilityResponseType = null, ?array $stay = null, ?bool $hasMore = null, ?bool $status = null, ?bool $flexDate = null, ?bool $flexCapacity = null, ?int $nbStays = null, ?int $codeNoDispo = null, ?string $messCodeNoDispo = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setAvailabilityResponseType($availabilityResponseType)
            ->setStay($stay)
            ->setHasMore($hasMore)
            ->setStatus($status)
            ->setFlexDate($flexDate)
            ->setFlexCapacity($flexCapacity)
            ->setNbStays($nbStays)
            ->setCodeNoDispo($codeNoDispo)
            ->setMessCodeNoDispo($messCodeNoDispo);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
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
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return $this->messError;
    }
    /**
     * Set messError value
     * @param string $messError
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        $this->messError = $messError;
        
        return $this;
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
        foreach ($values as $responseCpgCategAvailabilityAvailabilityResponseTypeItem) {
            // validation for constraint: enumeration
            if (!\Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::valueIsValid($responseCpgCategAvailabilityAvailabilityResponseTypeItem)) {
                $invalidValues[] = is_object($responseCpgCategAvailabilityAvailabilityResponseTypeItem) ? get_class($responseCpgCategAvailabilityAvailabilityResponseTypeItem) : sprintf('%s(%s)', gettype($responseCpgCategAvailabilityAvailabilityResponseTypeItem), var_export($responseCpgCategAvailabilityAvailabilityResponseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set availabilityResponseType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::valueIsValid()
     * @uses \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $availabilityResponseType
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
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
     * @uses \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::valueIsValid()
     * @uses \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function addToAvailabilityResponseType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Maetva\ESeason\PrivateServices\EnumType\AvailabilityResponseType::getValidValues())), __LINE__);
        }
        $this->availabilityResponseType[] = $item;
        
        return $this;
    }
    /**
     * Get stay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\PrivateServices\StructType\Stay[]
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
        foreach ($values as $responseCpgCategAvailabilityStayItem) {
            // validation for constraint: itemType
            if (!$responseCpgCategAvailabilityStayItem instanceof \Maetva\ESeason\PrivateServices\StructType\Stay) {
                $invalidValues[] = is_object($responseCpgCategAvailabilityStayItem) ? get_class($responseCpgCategAvailabilityStayItem) : sprintf('%s(%s)', gettype($responseCpgCategAvailabilityStayItem), var_export($responseCpgCategAvailabilityStayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The stay property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\Stay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set stay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\Stay[] $stay
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
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
     * @param \Maetva\ESeason\PrivateServices\StructType\Stay $item
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function addToStay(\Maetva\ESeason\PrivateServices\StructType\Stay $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\PrivateServices\StructType\Stay) {
            throw new InvalidArgumentException(sprintf('The stay property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\Stay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->stay[] = $item;
        
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
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
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setStatus(?bool $status = null): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get flexDate value
     * @return bool|null
     */
    public function getFlexDate(): ?bool
    {
        return $this->flexDate;
    }
    /**
     * Set flexDate value
     * @param bool $flexDate
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setFlexDate(?bool $flexDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexDate) && !is_bool($flexDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexDate, true), gettype($flexDate)), __LINE__);
        }
        $this->flexDate = $flexDate;
        
        return $this;
    }
    /**
     * Get flexCapacity value
     * @return bool|null
     */
    public function getFlexCapacity(): ?bool
    {
        return $this->flexCapacity;
    }
    /**
     * Set flexCapacity value
     * @param bool $flexCapacity
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setFlexCapacity(?bool $flexCapacity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexCapacity) && !is_bool($flexCapacity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexCapacity, true), gettype($flexCapacity)), __LINE__);
        }
        $this->flexCapacity = $flexCapacity;
        
        return $this;
    }
    /**
     * Get nbStays value
     * @return int|null
     */
    public function getNbStays(): ?int
    {
        return $this->nbStays;
    }
    /**
     * Set nbStays value
     * @param int $nbStays
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setNbStays(?int $nbStays = null): self
    {
        // validation for constraint: int
        if (!is_null($nbStays) && !(is_int($nbStays) || ctype_digit($nbStays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbStays, true), gettype($nbStays)), __LINE__);
        }
        $this->nbStays = $nbStays;
        
        return $this;
    }
    /**
     * Get codeNoDispo value
     * @return int|null
     */
    public function getCodeNoDispo(): ?int
    {
        return $this->codeNoDispo;
    }
    /**
     * Set codeNoDispo value
     * @param int $codeNoDispo
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setCodeNoDispo(?int $codeNoDispo = null): self
    {
        // validation for constraint: int
        if (!is_null($codeNoDispo) && !(is_int($codeNoDispo) || ctype_digit($codeNoDispo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeNoDispo, true), gettype($codeNoDispo)), __LINE__);
        }
        $this->codeNoDispo = $codeNoDispo;
        
        return $this;
    }
    /**
     * Get messCodeNoDispo value
     * @return string|null
     */
    public function getMessCodeNoDispo(): ?string
    {
        return $this->messCodeNoDispo;
    }
    /**
     * Set messCodeNoDispo value
     * @param string $messCodeNoDispo
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability
     */
    public function setMessCodeNoDispo(?string $messCodeNoDispo = null): self
    {
        // validation for constraint: string
        if (!is_null($messCodeNoDispo) && !is_string($messCodeNoDispo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messCodeNoDispo, true), gettype($messCodeNoDispo)), __LINE__);
        }
        $this->messCodeNoDispo = $messCodeNoDispo;
        
        return $this;
    }
}
