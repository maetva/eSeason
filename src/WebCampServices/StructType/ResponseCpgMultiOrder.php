<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgMultiOrder StructType
 * @subpackage Structs
 */
class ResponseCpgMultiOrder extends AbstractStructBase
{
    /**
     * The idOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $idOrder;
    /**
     * The idPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $idPayment;
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
     * The idCustomer
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * Constructor method for ResponseCpgMultiOrder
     * @uses ResponseCpgMultiOrder::setIdOrder()
     * @uses ResponseCpgMultiOrder::setIdPayment()
     * @uses ResponseCpgMultiOrder::setIdUser()
     * @uses ResponseCpgMultiOrder::setError()
     * @uses ResponseCpgMultiOrder::setMessError()
     * @uses ResponseCpgMultiOrder::setIdCustomer()
     * @uses ResponseCpgMultiOrder::setDeposit()
     * @param string[] $idOrder
     * @param string[] $idPayment
     * @param string $idUser
     * @param string $error
     * @param string $messError
     * @param string $idCustomer
     * @param float $deposit
     */
    public function __construct(array $idOrder, array $idPayment, ?string $idUser = null, ?string $error = null, ?string $messError = null, ?string $idCustomer = null, ?float $deposit = null)
    {
        $this
            ->setIdOrder($idOrder)
            ->setIdPayment($idPayment)
            ->setIdUser($idUser)
            ->setError($error)
            ->setMessError($messError)
            ->setIdCustomer($idCustomer)
            ->setDeposit($deposit);
    }
    /**
     * Get idOrder value
     * @return string[]
     */
    public function getIdOrder(): array
    {
        return $this->idOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setIdOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdOrderForArrayConstraintsFromSetIdOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgMultiOrderIdOrderItem) {
            // validation for constraint: itemType
            if (!is_string($responseCpgMultiOrderIdOrderItem)) {
                $invalidValues[] = is_object($responseCpgMultiOrderIdOrderItem) ? get_class($responseCpgMultiOrderIdOrderItem) : sprintf('%s(%s)', gettype($responseCpgMultiOrderIdOrderItem), var_export($responseCpgMultiOrderIdOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idOrder property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idOrder value
     * @throws InvalidArgumentException
     * @param string[] $idOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
     */
    public function setIdOrder(array $idOrder): self
    {
        // validation for constraint: array
        if ('' !== ($idOrderArrayErrorMessage = self::validateIdOrderForArrayConstraintsFromSetIdOrder($idOrder))) {
            throw new InvalidArgumentException($idOrderArrayErrorMessage, __LINE__);
        }
        $this->idOrder = $idOrder;
        
        return $this;
    }
    /**
     * Add item to idOrder value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
     */
    public function addToIdOrder(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The idOrder property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idOrder[] = $item;
        
        return $this;
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
        foreach ($values as $responseCpgMultiOrderIdPaymentItem) {
            // validation for constraint: itemType
            if (!is_string($responseCpgMultiOrderIdPaymentItem)) {
                $invalidValues[] = is_object($responseCpgMultiOrderIdPaymentItem) ? get_class($responseCpgMultiOrderIdPaymentItem) : sprintf('%s(%s)', gettype($responseCpgMultiOrderIdPaymentItem), var_export($responseCpgMultiOrderIdPaymentItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
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
     * Get idCustomer value
     * @return string|null
     */
    public function getIdCustomer(): ?string
    {
        return $this->idCustomer;
    }
    /**
     * Set idCustomer value
     * @param string $idCustomer
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
     */
    public function setIdCustomer(?string $idCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($idCustomer) && !is_string($idCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCustomer, true), gettype($idCustomer)), __LINE__);
        }
        $this->idCustomer = $idCustomer;
        
        return $this;
    }
    /**
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
}
