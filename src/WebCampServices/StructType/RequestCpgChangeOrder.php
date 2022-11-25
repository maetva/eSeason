<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgChangeOrder StructType
 * @subpackage Structs
 */
class RequestCpgChangeOrder extends AbstractStructBase
{
    /**
     * The changeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $changeType;
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
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerOrder|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    protected ?array $supplement = null;
    /**
     * The cancelEnable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $cancelEnable = null;
    /**
     * The selectedCancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $selectedCancelInsurance = null;
    /**
     * The cancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $cancelInsurance = null;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The payAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $payAmount = null;
    /**
     * The idPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\PaymentFormType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null;
    /**
     * The idStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The vehicle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    protected ?array $vehicle = null;
    /**
     * The stayDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\StayDeposit|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * Constructor method for RequestCpgChangeOrder
     * @uses RequestCpgChangeOrder::setChangeType()
     * @uses RequestCpgChangeOrder::setLanguage()
     * @uses RequestCpgChangeOrder::setIdUser()
     * @uses RequestCpgChangeOrder::setPassword()
     * @uses RequestCpgChangeOrder::setIdOrder()
     * @uses RequestCpgChangeOrder::setCustomer()
     * @uses RequestCpgChangeOrder::setSupplement()
     * @uses RequestCpgChangeOrder::setCancelEnable()
     * @uses RequestCpgChangeOrder::setSelectedCancelInsurance()
     * @uses RequestCpgChangeOrder::setCancelInsurance()
     * @uses RequestCpgChangeOrder::setPrice()
     * @uses RequestCpgChangeOrder::setComment()
     * @uses RequestCpgChangeOrder::setPayAmount()
     * @uses RequestCpgChangeOrder::setIdPaymentType()
     * @uses RequestCpgChangeOrder::setPayment()
     * @uses RequestCpgChangeOrder::setIdStay()
     * @uses RequestCpgChangeOrder::setVehicle()
     * @uses RequestCpgChangeOrder::setStayDeposit()
     * @uses RequestCpgChangeOrder::setSelectPlace()
     * @param string[] $changeType
     * @param string $language
     * @param string $idUser
     * @param string $password
     * @param string $idOrder
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @param bool $cancelEnable
     * @param int $selectedCancelInsurance
     * @param float $cancelInsurance
     * @param float $price
     * @param string $comment
     * @param float $payAmount
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @param \Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     */
    public function __construct(array $changeType, ?string $language = null, ?string $idUser = null, ?string $password = null, ?string $idOrder = null, ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null, ?array $supplement = null, ?bool $cancelEnable = null, ?int $selectedCancelInsurance = null, ?float $cancelInsurance = null, ?float $price = null, ?string $comment = null, ?float $payAmount = null, ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null, ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?array $vehicle = null, ?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null)
    {
        $this
            ->setChangeType($changeType)
            ->setLanguage($language)
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdOrder($idOrder)
            ->setCustomer($customer)
            ->setSupplement($supplement)
            ->setCancelEnable($cancelEnable)
            ->setSelectedCancelInsurance($selectedCancelInsurance)
            ->setCancelInsurance($cancelInsurance)
            ->setPrice($price)
            ->setComment($comment)
            ->setPayAmount($payAmount)
            ->setIdPaymentType($idPaymentType)
            ->setPayment($payment)
            ->setIdStay($idStay)
            ->setVehicle($vehicle)
            ->setStayDeposit($stayDeposit)
            ->setSelectPlace($selectPlace);
    }
    /**
     * Get changeType value
     * @return string[]
     */
    public function getChangeType(): array
    {
        return $this->changeType;
    }
    /**
     * This method is responsible for validating the values passed to the setChangeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChangeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChangeTypeForArrayConstraintsFromSetChangeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgChangeOrderChangeTypeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgChangeOrderChangeTypeItem)) {
                $invalidValues[] = is_object($requestCpgChangeOrderChangeTypeItem) ? get_class($requestCpgChangeOrderChangeTypeItem) : sprintf('%s(%s)', gettype($requestCpgChangeOrderChangeTypeItem), var_export($requestCpgChangeOrderChangeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The changeType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set changeType value
     * @throws InvalidArgumentException
     * @param string[] $changeType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setChangeType(array $changeType): self
    {
        // validation for constraint: array
        if ('' !== ($changeTypeArrayErrorMessage = self::validateChangeTypeForArrayConstraintsFromSetChangeType($changeType))) {
            throw new InvalidArgumentException($changeTypeArrayErrorMessage, __LINE__);
        }
        $this->changeType = $changeType;
        
        return $this;
    }
    /**
     * Add item to changeType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function addToChangeType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The changeType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->changeType[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
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
     * Get idOrder value
     * @return string|null
     */
    public function getIdOrder(): ?string
    {
        return $this->idOrder;
    }
    /**
     * Set idOrder value
     * @param string $idOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setIdOrder(?string $idOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($idOrder) && !is_string($idOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOrder, true), gettype($idOrder)), __LINE__);
        }
        $this->idOrder = $idOrder;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setCustomer(?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null): self
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Get supplement value
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    public function getSupplement(): ?array
    {
        return $this->supplement;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementForArrayConstraintsFromSetSupplement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgChangeOrderSupplementItem) {
            // validation for constraint: itemType
            if (!$requestCpgChangeOrderSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
                $invalidValues[] = is_object($requestCpgChangeOrderSupplementItem) ? get_class($requestCpgChangeOrderSupplementItem) : sprintf('%s(%s)', gettype($requestCpgChangeOrderSupplementItem), var_export($requestCpgChangeOrderSupplementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementFilled, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplement value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setSupplement(?array $supplement = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementArrayErrorMessage = self::validateSupplementForArrayConstraintsFromSetSupplement($supplement))) {
            throw new InvalidArgumentException($supplementArrayErrorMessage, __LINE__);
        }
        $this->supplement = $supplement;
        
        return $this;
    }
    /**
     * Add item to supplement value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function addToSupplement(\Maetva\ESeason\WebCampServices\StructType\SupplementFilled $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
            throw new InvalidArgumentException(sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementFilled, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplement[] = $item;
        
        return $this;
    }
    /**
     * Get cancelEnable value
     * @return bool|null
     */
    public function getCancelEnable(): ?bool
    {
        return $this->cancelEnable;
    }
    /**
     * Set cancelEnable value
     * @param bool $cancelEnable
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setCancelEnable(?bool $cancelEnable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelEnable) && !is_bool($cancelEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelEnable, true), gettype($cancelEnable)), __LINE__);
        }
        $this->cancelEnable = $cancelEnable;
        
        return $this;
    }
    /**
     * Get selectedCancelInsurance value
     * @return int|null
     */
    public function getSelectedCancelInsurance(): ?int
    {
        return $this->selectedCancelInsurance;
    }
    /**
     * Set selectedCancelInsurance value
     * @param int $selectedCancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setSelectedCancelInsurance(?int $selectedCancelInsurance = null): self
    {
        // validation for constraint: int
        if (!is_null($selectedCancelInsurance) && !(is_int($selectedCancelInsurance) || ctype_digit($selectedCancelInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($selectedCancelInsurance, true), gettype($selectedCancelInsurance)), __LINE__);
        }
        $this->selectedCancelInsurance = $selectedCancelInsurance;
        
        return $this;
    }
    /**
     * Get cancelInsurance value
     * @return float|null
     */
    public function getCancelInsurance(): ?float
    {
        return $this->cancelInsurance;
    }
    /**
     * Set cancelInsurance value
     * @param float $cancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setCancelInsurance(?float $cancelInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($cancelInsurance) && !(is_float($cancelInsurance) || is_numeric($cancelInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancelInsurance, true), gettype($cancelInsurance)), __LINE__);
        }
        $this->cancelInsurance = $cancelInsurance;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get payAmount value
     * @return float|null
     */
    public function getPayAmount(): ?float
    {
        return $this->payAmount;
    }
    /**
     * Set payAmount value
     * @param float $payAmount
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setPayAmount(?float $payAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payAmount) && !(is_float($payAmount) || is_numeric($payAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payAmount, true), gettype($payAmount)), __LINE__);
        }
        $this->payAmount = $payAmount;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setIdPaymentType(?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null): self
    {
        $this->idPaymentType = $idPaymentType;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setPayment(?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get idStay value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    public function getIdStay(): ?\Maetva\ESeason\WebCampServices\StructType\IdStay
    {
        return $this->idStay;
    }
    /**
     * Set idStay value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
        return $this;
    }
    /**
     * Get vehicle value
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    public function getVehicle(): ?array
    {
        return $this->vehicle;
    }
    /**
     * This method is responsible for validating the values passed to the setVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleForArrayConstraintsFromSetVehicle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgChangeOrderVehicleItem) {
            // validation for constraint: itemType
            if (!$requestCpgChangeOrderVehicleItem instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
                $invalidValues[] = is_object($requestCpgChangeOrderVehicleItem) ? get_class($requestCpgChangeOrderVehicleItem) : sprintf('%s(%s)', gettype($requestCpgChangeOrderVehicleItem), var_export($requestCpgChangeOrderVehicleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vehicle property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Vehicle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set vehicle value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setVehicle(?array $vehicle = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleArrayErrorMessage = self::validateVehicleForArrayConstraintsFromSetVehicle($vehicle))) {
            throw new InvalidArgumentException($vehicleArrayErrorMessage, __LINE__);
        }
        $this->vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Add item to vehicle value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function addToVehicle(\Maetva\ESeason\WebCampServices\StructType\Vehicle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
            throw new InvalidArgumentException(sprintf('The vehicle property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Vehicle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vehicle[] = $item;
        
        return $this;
    }
    /**
     * Get stayDeposit value
     * @return \Maetva\ESeason\WebCampServices\StructType\StayDeposit|null
     */
    public function getStayDeposit(): ?\Maetva\ESeason\WebCampServices\StructType\StayDeposit
    {
        return $this->stayDeposit;
    }
    /**
     * Set stayDeposit value
     * @param \Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setStayDeposit(?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null): self
    {
        $this->stayDeposit = $stayDeposit;
        
        return $this;
    }
    /**
     * Get selectPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    public function getSelectPlace(): ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace
    {
        return $this->selectPlace;
    }
    /**
     * Set selectPlace value
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        $this->selectPlace = $selectPlace;
        
        return $this;
    }
}
