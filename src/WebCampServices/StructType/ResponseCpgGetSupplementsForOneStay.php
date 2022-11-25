<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgGetSupplementsForOneStay StructType
 * @subpackage Structs
 */
class ResponseCpgGetSupplementsForOneStay extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The supplements
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    protected ?array $supplements = null;
    /**
     * Constructor method for ResponseCpgGetSupplementsForOneStay
     * @uses ResponseCpgGetSupplementsForOneStay::setIdUser()
     * @uses ResponseCpgGetSupplementsForOneStay::setError()
     * @uses ResponseCpgGetSupplementsForOneStay::setMessError()
     * @uses ResponseCpgGetSupplementsForOneStay::setSupplements()
     * @param string $idUser
     * @param string $error
     * @param string $messError
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplements
     */
    public function __construct(?string $idUser = null, ?string $error = null, ?string $messError = null, ?array $supplements = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setSupplements($supplements);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay
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
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return $this->messError;
    }
    /**
     * Set messError value
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay
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
     * Get supplements value
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    public function getSupplements(): ?array
    {
        return $this->supplements;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplements method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementsForArrayConstraintsFromSetSupplements(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgGetSupplementsForOneStaySupplementsItem) {
            // validation for constraint: itemType
            if (!$responseCpgGetSupplementsForOneStaySupplementsItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($responseCpgGetSupplementsForOneStaySupplementsItem) ? get_class($responseCpgGetSupplementsForOneStaySupplementsItem) : sprintf('%s(%s)', gettype($responseCpgGetSupplementsForOneStaySupplementsItem), var_export($responseCpgGetSupplementsForOneStaySupplementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplements property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplements value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $supplements
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay
     */
    public function setSupplements(?array $supplements = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementsArrayErrorMessage = self::validateSupplementsForArrayConstraintsFromSetSupplements($supplements))) {
            throw new InvalidArgumentException($supplementsArrayErrorMessage, __LINE__);
        }
        $this->supplements = $supplements;
        
        return $this;
    }
    /**
     * Add item to supplements value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay
     */
    public function addToSupplements(\Maetva\ESeason\WebCampServices\StructType\Supplement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
            throw new InvalidArgumentException(sprintf('The supplements property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplements[] = $item;
        
        return $this;
    }
}
