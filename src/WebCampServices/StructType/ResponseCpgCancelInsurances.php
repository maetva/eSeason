<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgCancelInsurances StructType
 * @subpackage Structs
 */
class ResponseCpgCancelInsurances extends AbstractStructBase
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
     * The cancelInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    protected ?array $cancelInsurance = null;
    /**
     * Constructor method for ResponseCpgCancelInsurances
     * @uses ResponseCpgCancelInsurances::setIdUser()
     * @uses ResponseCpgCancelInsurances::setError()
     * @uses ResponseCpgCancelInsurances::setMessError()
     * @uses ResponseCpgCancelInsurances::setCancelInsurance()
     * @param string $idUser
     * @param int $error
     * @param string $messError
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $cancelInsurance
     */
    public function __construct(?string $idUser = null, ?int $error = null, ?string $messError = null, ?array $cancelInsurance = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setCancelInsurance($cancelInsurance);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances
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
     * Get cancelInsurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Supplement[]
     */
    public function getCancelInsurance(): ?array
    {
        return isset($this->cancelInsurance) ? $this->cancelInsurance : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelInsurance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelInsurance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelInsuranceForArrayConstraintsFromSetCancelInsurance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgCancelInsurancesCancelInsuranceItem) {
            // validation for constraint: itemType
            if (!$responseCpgCancelInsurancesCancelInsuranceItem instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
                $invalidValues[] = is_object($responseCpgCancelInsurancesCancelInsuranceItem) ? get_class($responseCpgCancelInsurancesCancelInsuranceItem) : sprintf('%s(%s)', gettype($responseCpgCancelInsurancesCancelInsuranceItem), var_export($responseCpgCancelInsurancesCancelInsuranceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancelInsurance property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cancelInsurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement[] $cancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances
     */
    public function setCancelInsurance(?array $cancelInsurance = null): self
    {
        // validation for constraint: array
        if ('' !== ($cancelInsuranceArrayErrorMessage = self::validateCancelInsuranceForArrayConstraintsFromSetCancelInsurance($cancelInsurance))) {
            throw new InvalidArgumentException($cancelInsuranceArrayErrorMessage, __LINE__);
        }
        if (is_null($cancelInsurance) || (is_array($cancelInsurance) && empty($cancelInsurance))) {
            unset($this->cancelInsurance);
        } else {
            $this->cancelInsurance = $cancelInsurance;
        }
        
        return $this;
    }
    /**
     * Add item to cancelInsurance value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Supplement $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances
     */
    public function addToCancelInsurance(\Maetva\ESeason\WebCampServices\StructType\Supplement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Supplement) {
            throw new InvalidArgumentException(sprintf('The cancelInsurance property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Supplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancelInsurance[] = $item;
        
        return $this;
    }
}
