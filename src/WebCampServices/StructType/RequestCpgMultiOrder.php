<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgMultiOrder StructType
 * @subpackage Structs
 */
class RequestCpgMultiOrder extends AbstractStructBase
{
    /**
     * The orders
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Maetva\ESeason\WebCampServices\StructType\Order[]
     */
    protected array $orders;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The customer
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerOrder|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null;
    /**
     * The preAutorisation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $preAutorisation = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\PaymentFormType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null;
    /**
     * The idPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null;
    /**
     * The tracking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tracking = null;
    /**
     * The simulation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $simulation = null;
    /**
     * The tmpOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $tmpOption = null;
    /**
     * The idAgent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idAgent = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * The enableExpenseReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $enableExpenseReservation = null;
    /**
     * The delayed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType $delayed = null;
    /**
     * Constructor method for RequestCpgMultiOrder
     * @uses RequestCpgMultiOrder::setOrders()
     * @uses RequestCpgMultiOrder::setLanguage()
     * @uses RequestCpgMultiOrder::setIdUser()
     * @uses RequestCpgMultiOrder::setPassword()
     * @uses RequestCpgMultiOrder::setValue()
     * @uses RequestCpgMultiOrder::setCustomer()
     * @uses RequestCpgMultiOrder::setPreAutorisation()
     * @uses RequestCpgMultiOrder::setPayment()
     * @uses RequestCpgMultiOrder::setIdPaymentType()
     * @uses RequestCpgMultiOrder::setTracking()
     * @uses RequestCpgMultiOrder::setSimulation()
     * @uses RequestCpgMultiOrder::setTmpOption()
     * @uses RequestCpgMultiOrder::setIdAgent()
     * @uses RequestCpgMultiOrder::setIdCustomer()
     * @uses RequestCpgMultiOrder::setEnableExpenseReservation()
     * @uses RequestCpgMultiOrder::setDelayed()
     * @param \Maetva\ESeason\WebCampServices\StructType\Order[] $orders
     * @param string $language
     * @param string $idUser
     * @param string $password
     * @param float $value
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer
     * @param bool $preAutorisation
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @param string $tracking
     * @param bool $simulation
     * @param bool $tmpOption
     * @param string $idAgent
     * @param string $idCustomer
     * @param bool $enableExpenseReservation
     * @param \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType $delayed
     */
    public function __construct(array $orders, ?string $language = null, ?string $idUser = null, ?string $password = null, ?float $value = null, ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null, ?bool $preAutorisation = null, ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null, ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null, ?string $tracking = null, ?bool $simulation = null, ?bool $tmpOption = null, ?string $idAgent = null, ?string $idCustomer = null, ?bool $enableExpenseReservation = null, ?\Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType $delayed = null)
    {
        $this
            ->setOrders($orders)
            ->setLanguage($language)
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setValue($value)
            ->setCustomer($customer)
            ->setPreAutorisation($preAutorisation)
            ->setPayment($payment)
            ->setIdPaymentType($idPaymentType)
            ->setTracking($tracking)
            ->setSimulation($simulation)
            ->setTmpOption($tmpOption)
            ->setIdAgent($idAgent)
            ->setIdCustomer($idCustomer)
            ->setEnableExpenseReservation($enableExpenseReservation)
            ->setDelayed($delayed);
    }
    /**
     * Get orders value
     * @return \Maetva\ESeason\WebCampServices\StructType\Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
    /**
     * This method is responsible for validating the values passed to the setOrders method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrders method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrdersForArrayConstraintsFromSetOrders(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgMultiOrderOrdersItem) {
            // validation for constraint: itemType
            if (!$requestCpgMultiOrderOrdersItem instanceof \Maetva\ESeason\WebCampServices\StructType\Order) {
                $invalidValues[] = is_object($requestCpgMultiOrderOrdersItem) ? get_class($requestCpgMultiOrderOrdersItem) : sprintf('%s(%s)', gettype($requestCpgMultiOrderOrdersItem), var_export($requestCpgMultiOrderOrdersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orders property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Order, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orders value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Order[] $orders
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setOrders(array $orders): self
    {
        // validation for constraint: array
        if ('' !== ($ordersArrayErrorMessage = self::validateOrdersForArrayConstraintsFromSetOrders($orders))) {
            throw new InvalidArgumentException($ordersArrayErrorMessage, __LINE__);
        }
        $this->orders = $orders;
        
        return $this;
    }
    /**
     * Add item to orders value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Order $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function addToOrders(\Maetva\ESeason\WebCampServices\StructType\Order $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Order) {
            throw new InvalidArgumentException(sprintf('The orders property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Order, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orders[] = $item;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
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
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get customer value
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder|null
     */
    public function getCustomer(): ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setCustomer(?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null): self
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Get preAutorisation value
     * @return bool|null
     */
    public function getPreAutorisation(): ?bool
    {
        return $this->preAutorisation;
    }
    /**
     * Set preAutorisation value
     * @param bool $preAutorisation
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setPreAutorisation(?bool $preAutorisation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preAutorisation) && !is_bool($preAutorisation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preAutorisation, true), gettype($preAutorisation)), __LINE__);
        }
        $this->preAutorisation = $preAutorisation;
        
        return $this;
    }
    /**
     * Get payment value
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType|null
     */
    public function getPayment(): ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setPayment(?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get idPaymentType value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    public function getIdPaymentType(): ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType
    {
        return $this->idPaymentType;
    }
    /**
     * Set idPaymentType value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setIdPaymentType(?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null): self
    {
        $this->idPaymentType = $idPaymentType;
        
        return $this;
    }
    /**
     * Get tracking value
     * @return string|null
     */
    public function getTracking(): ?string
    {
        return $this->tracking;
    }
    /**
     * Set tracking value
     * @param string $tracking
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setTracking(?string $tracking = null): self
    {
        // validation for constraint: string
        if (!is_null($tracking) && !is_string($tracking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tracking, true), gettype($tracking)), __LINE__);
        }
        $this->tracking = $tracking;
        
        return $this;
    }
    /**
     * Get simulation value
     * @return bool|null
     */
    public function getSimulation(): ?bool
    {
        return $this->simulation;
    }
    /**
     * Set simulation value
     * @param bool $simulation
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setSimulation(?bool $simulation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($simulation) && !is_bool($simulation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($simulation, true), gettype($simulation)), __LINE__);
        }
        $this->simulation = $simulation;
        
        return $this;
    }
    /**
     * Get tmpOption value
     * @return bool|null
     */
    public function getTmpOption(): ?bool
    {
        return $this->tmpOption;
    }
    /**
     * Set tmpOption value
     * @param bool $tmpOption
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setTmpOption(?bool $tmpOption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tmpOption) && !is_bool($tmpOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tmpOption, true), gettype($tmpOption)), __LINE__);
        }
        $this->tmpOption = $tmpOption;
        
        return $this;
    }
    /**
     * Get idAgent value
     * @return string|null
     */
    public function getIdAgent(): ?string
    {
        return $this->idAgent;
    }
    /**
     * Set idAgent value
     * @param string $idAgent
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setIdAgent(?string $idAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($idAgent) && !is_string($idAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idAgent, true), gettype($idAgent)), __LINE__);
        }
        $this->idAgent = $idAgent;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
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
     * Get enableExpenseReservation value
     * @return bool|null
     */
    public function getEnableExpenseReservation(): ?bool
    {
        return $this->enableExpenseReservation;
    }
    /**
     * Set enableExpenseReservation value
     * @param bool $enableExpenseReservation
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setEnableExpenseReservation(?bool $enableExpenseReservation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enableExpenseReservation) && !is_bool($enableExpenseReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableExpenseReservation, true), gettype($enableExpenseReservation)), __LINE__);
        }
        $this->enableExpenseReservation = $enableExpenseReservation;
        
        return $this;
    }
    /**
     * Get delayed value
     * @return \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType|null
     */
    public function getDelayed(): ?\Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType
    {
        return $this->delayed;
    }
    /**
     * Set delayed value
     * @param \Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType $delayed
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder
     */
    public function setDelayed(?\Maetva\ESeason\WebCampServices\StructType\DelayedPaymentType $delayed = null): self
    {
        $this->delayed = $delayed;
        
        return $this;
    }
}
