<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgArrivalDate StructType
 * @subpackage Structs
 */
class ResponseCpgArrivalDate extends AbstractStructBase
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
     * The arrivalDate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $arrivalDate = null;
    /**
     * Constructor method for ResponseCpgArrivalDate
     * @uses ResponseCpgArrivalDate::setIdUser()
     * @uses ResponseCpgArrivalDate::setError()
     * @uses ResponseCpgArrivalDate::setMessError()
     * @uses ResponseCpgArrivalDate::setArrivalDate()
     * @param string $idUser
     * @param int $error
     * @param string $messError
     * @param string[] $arrivalDate
     */
    public function __construct(?string $idUser = null, ?int $error = null, ?string $messError = null, ?array $arrivalDate = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setArrivalDate($arrivalDate);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate
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
     * Get arrivalDate value
     * @return string[]
     */
    public function getArrivalDate(): ?array
    {
        return $this->arrivalDate;
    }
    /**
     * This method is responsible for validating the values passed to the setArrivalDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrivalDate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrivalDateForArrayConstraintsFromSetArrivalDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgArrivalDateArrivalDateItem) {
            // validation for constraint: itemType
            if (!is_string($responseCpgArrivalDateArrivalDateItem)) {
                $invalidValues[] = is_object($responseCpgArrivalDateArrivalDateItem) ? get_class($responseCpgArrivalDateArrivalDateItem) : sprintf('%s(%s)', gettype($responseCpgArrivalDateArrivalDateItem), var_export($responseCpgArrivalDateArrivalDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The arrivalDate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set arrivalDate value
     * @throws InvalidArgumentException
     * @param string[] $arrivalDate
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate
     */
    public function setArrivalDate(?array $arrivalDate = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrivalDateArrayErrorMessage = self::validateArrivalDateForArrayConstraintsFromSetArrivalDate($arrivalDate))) {
            throw new InvalidArgumentException($arrivalDateArrayErrorMessage, __LINE__);
        }
        $this->arrivalDate = $arrivalDate;
        
        return $this;
    }
    /**
     * Add item to arrivalDate value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate
     */
    public function addToArrivalDate(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The arrivalDate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->arrivalDate[] = $item;
        
        return $this;
    }
}
