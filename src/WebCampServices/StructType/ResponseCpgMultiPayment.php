<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgMultiPayment StructType
 * @subpackage Structs
 */
class ResponseCpgMultiPayment extends AbstractStructBase
{
    /**
     * The idPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $idPayment;
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
     * Constructor method for ResponseCpgMultiPayment
     * @uses ResponseCpgMultiPayment::setIdPayment()
     * @uses ResponseCpgMultiPayment::setError()
     * @uses ResponseCpgMultiPayment::setMessError()
     * @uses ResponseCpgMultiPayment::setIdUser()
     * @param string[] $idPayment
     * @param string $error
     * @param string $messError
     * @param string $idUser
     */
    public function __construct(array $idPayment, ?string $error = null, ?string $messError = null, ?string $idUser = null)
    {
        $this
            ->setIdPayment($idPayment)
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser);
    }
    /**
     * Get idPayment value
     * @return string[]
     */
    public function getIdPayment(): array
    {
        return $this->idPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setIdPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdPaymentForArrayConstraintsFromSetIdPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgMultiPaymentIdPaymentItem) {
            // validation for constraint: itemType
            if (!is_string($responseCpgMultiPaymentIdPaymentItem)) {
                $invalidValues[] = is_object($responseCpgMultiPaymentIdPaymentItem) ? get_class($responseCpgMultiPaymentIdPaymentItem) : sprintf('%s(%s)', gettype($responseCpgMultiPaymentIdPaymentItem), var_export($responseCpgMultiPaymentIdPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idPayment property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idPayment value
     * @throws InvalidArgumentException
     * @param string[] $idPayment
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment
     */
    public function setIdPayment(array $idPayment): self
    {
        // validation for constraint: array
        if ('' !== ($idPaymentArrayErrorMessage = self::validateIdPaymentForArrayConstraintsFromSetIdPayment($idPayment))) {
            throw new InvalidArgumentException($idPaymentArrayErrorMessage, __LINE__);
        }
        $this->idPayment = $idPayment;
        
        return $this;
    }
    /**
     * Add item to idPayment value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment
     */
    public function addToIdPayment(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The idPayment property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idPayment[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment
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
