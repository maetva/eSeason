<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgAvailableCEStock StructType
 * @subpackage Structs
 */
class ResponseCpgAvailableCEStock extends AbstractStructBase
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The availableStock
     * @var int|null
     */
    protected ?int $availableStock = null;
    /**
     * The unitChoice
     * @var string|null
     */
    protected ?string $unitChoice = null;
    /**
     * Constructor method for ResponseCpgAvailableCEStock
     * @uses ResponseCpgAvailableCEStock::setIdUser()
     * @uses ResponseCpgAvailableCEStock::setError()
     * @uses ResponseCpgAvailableCEStock::setMessError()
     * @uses ResponseCpgAvailableCEStock::setAvailableStock()
     * @uses ResponseCpgAvailableCEStock::setUnitChoice()
     * @param string $idUser
     * @param string $error
     * @param string $messError
     * @param int $availableStock
     * @param string $unitChoice
     */
    public function __construct(?string $idUser = null, ?string $error = null, ?string $messError = null, ?int $availableStock = null, ?string $unitChoice = null)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setAvailableStock($availableStock)
            ->setUnitChoice($unitChoice);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock
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
     * Get availableStock value
     * @return int|null
     */
    public function getAvailableStock(): ?int
    {
        return $this->availableStock;
    }
    /**
     * Set availableStock value
     * @param int $availableStock
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock
     */
    public function setAvailableStock(?int $availableStock = null): self
    {
        // validation for constraint: int
        if (!is_null($availableStock) && !(is_int($availableStock) || ctype_digit($availableStock))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableStock, true), gettype($availableStock)), __LINE__);
        }
        $this->availableStock = $availableStock;
        
        return $this;
    }
    /**
     * Get unitChoice value
     * @return string|null
     */
    public function getUnitChoice(): ?string
    {
        return $this->unitChoice;
    }
    /**
     * Set unitChoice value
     * @param string $unitChoice
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock
     */
    public function setUnitChoice(?string $unitChoice = null): self
    {
        // validation for constraint: string
        if (!is_null($unitChoice) && !is_string($unitChoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitChoice, true), gettype($unitChoice)), __LINE__);
        }
        $this->unitChoice = $unitChoice;
        
        return $this;
    }
}
