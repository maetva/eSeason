<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseListCategoTariff StructType
 * @subpackage Structs
 */
class ResponseListCategoTariff extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The categoTariff
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\PrivateServices\StructType\CategoTariff[]
     */
    protected ?array $categoTariff = null;
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
     * Constructor method for ResponseListCategoTariff
     * @uses ResponseListCategoTariff::setIdUser()
     * @uses ResponseListCategoTariff::setCategoTariff()
     * @uses ResponseListCategoTariff::setError()
     * @uses ResponseListCategoTariff::setMessError()
     * @param string $idUser
     * @param \Maetva\ESeason\PrivateServices\StructType\CategoTariff[] $categoTariff
     * @param int $error
     * @param string $messError
     */
    public function __construct(?string $idUser = null, ?array $categoTariff = null, ?int $error = null, ?string $messError = null)
    {
        $this
            ->setIdUser($idUser)
            ->setCategoTariff($categoTariff)
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff
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
     * Get categoTariff value
     * @return \Maetva\ESeason\PrivateServices\StructType\CategoTariff[]
     */
    public function getCategoTariff(): ?array
    {
        return $this->categoTariff;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoTariff method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoTariff method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoTariffForArrayConstraintsFromSetCategoTariff(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseListCategoTariffCategoTariffItem) {
            // validation for constraint: itemType
            if (!$responseListCategoTariffCategoTariffItem instanceof \Maetva\ESeason\PrivateServices\StructType\CategoTariff) {
                $invalidValues[] = is_object($responseListCategoTariffCategoTariffItem) ? get_class($responseListCategoTariffCategoTariffItem) : sprintf('%s(%s)', gettype($responseListCategoTariffCategoTariffItem), var_export($responseListCategoTariffCategoTariffItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The categoTariff property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\CategoTariff, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set categoTariff value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\CategoTariff[] $categoTariff
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff
     */
    public function setCategoTariff(?array $categoTariff = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoTariffArrayErrorMessage = self::validateCategoTariffForArrayConstraintsFromSetCategoTariff($categoTariff))) {
            throw new InvalidArgumentException($categoTariffArrayErrorMessage, __LINE__);
        }
        $this->categoTariff = $categoTariff;
        
        return $this;
    }
    /**
     * Add item to categoTariff value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\CategoTariff $item
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff
     */
    public function addToCategoTariff(\Maetva\ESeason\PrivateServices\StructType\CategoTariff $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\PrivateServices\StructType\CategoTariff) {
            throw new InvalidArgumentException(sprintf('The categoTariff property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\CategoTariff, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->categoTariff[] = $item;
        
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff
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
}
