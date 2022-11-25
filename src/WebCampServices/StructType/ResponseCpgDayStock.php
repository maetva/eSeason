<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgDayStock StructType
 * @subpackage Structs
 */
class ResponseCpgDayStock extends AbstractStructBase
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
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The daysStock
     * Meta information extracted from the WSDL
     * - maxOccurs: 31
     * - minOccurs: 28
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\DayStock[]
     */
    protected ?array $daysStock;
    /**
     * Constructor method for ResponseCpgDayStock
     * @uses ResponseCpgDayStock::setIdUser()
     * @uses ResponseCpgDayStock::setError()
     * @uses ResponseCpgDayStock::setMessError()
     * @uses ResponseCpgDayStock::setDaysStock()
     * @param string $idUser
     * @param int $error
     * @param string $messError
     * @param \Maetva\ESeason\WebCampServices\StructType\DayStock[] $daysStock
     */
    public function __construct(?string $idUser = null, ?int $error = null, ?string $messError = null, ?array $daysStock)
    {
        $this
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setDaysStock($daysStock);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock
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
     * Get daysStock value
     * @return \Maetva\ESeason\WebCampServices\StructType\DayStock[]
     */
    public function getDaysStock(): array
    {
        return $this->daysStock;
    }
    /**
     * This method is responsible for validating the values passed to the setDaysStock method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaysStock method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaysStockForArrayConstraintsFromSetDaysStock(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgDayStockDaysStockItem) {
            // validation for constraint: itemType
            if (!$responseCpgDayStockDaysStockItem instanceof \Maetva\ESeason\WebCampServices\StructType\DayStock) {
                $invalidValues[] = is_object($responseCpgDayStockDaysStockItem) ? get_class($responseCpgDayStockDaysStockItem) : sprintf('%s(%s)', gettype($responseCpgDayStockDaysStockItem), var_export($responseCpgDayStockDaysStockItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The daysStock property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\DayStock, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set daysStock value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\DayStock[] $daysStock
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock
     */
    public function setDaysStock(?array $daysStock): self
    {
        // validation for constraint: array
        if ('' !== ($daysStockArrayErrorMessage = self::validateDaysStockForArrayConstraintsFromSetDaysStock($daysStock))) {
            throw new InvalidArgumentException($daysStockArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(31)
        if (is_array($daysStock) && count($daysStock) > 31) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 31', count($daysStock)), __LINE__);
        }
        $this->daysStock = $daysStock;
        
        return $this;
    }
    /**
     * Add item to daysStock value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\DayStock $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock
     */
    public function addToDaysStock(\Maetva\ESeason\WebCampServices\StructType\DayStock $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\DayStock) {
            throw new InvalidArgumentException(sprintf('The daysStock property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\DayStock, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(31)
        if (is_array($this->daysStock) && count($this->daysStock) >= 31) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 31', count($this->daysStock)), __LINE__);
        }
        $this->daysStock[] = $item;
        
        return $this;
    }
}
