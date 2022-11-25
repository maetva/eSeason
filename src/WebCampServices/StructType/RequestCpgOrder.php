<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgOrder StructType
 * @subpackage Structs
 */
class RequestCpgOrder extends AbstractStructBase
{
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The callCenterComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callCenterComment = null;
    /**
     * The customer
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerOrder|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null;
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The expenseReservation
     * @var float|null
     */
    protected ?float $expenseReservation = null;
    /**
     * The idPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdPaymentType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null;
    /**
     * The idStay
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The cancelEnable
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
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
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
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    protected ?array $supplement = null;
    /**
     * The tracking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tracking = null;
    /**
     * The cp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $cp = null;
    /**
     * The promoCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $promoCode = null;
    /**
     * The promoCash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoCash = null;
    /**
     * The fidelityUse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidelityUse = null;
    /**
     * The fidMap
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidMap = null;
    /**
     * The idPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idPlace = null;
    /**
     * The promoPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoPlace = null;
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
     * The callbackYES
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callbackYES = null;
    /**
     * The callbackNO
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $callbackNO = null;
    /**
     * The resaFerme
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $resaFerme = null;
    /**
     * The vehicle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    protected ?array $vehicle = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
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
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * The optionalStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $optionalStay = null;
    /**
     * The idOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * Constructor method for RequestCpgOrder
     * @uses RequestCpgOrder::setExternalId()
     * @uses RequestCpgOrder::setComment()
     * @uses RequestCpgOrder::setCallCenterComment()
     * @uses RequestCpgOrder::setCustomer()
     * @uses RequestCpgOrder::setDeposit()
     * @uses RequestCpgOrder::setExpenseReservation()
     * @uses RequestCpgOrder::setIdPaymentType()
     * @uses RequestCpgOrder::setIdStay()
     * @uses RequestCpgOrder::setIdUser()
     * @uses RequestCpgOrder::setCancelEnable()
     * @uses RequestCpgOrder::setSelectedCancelInsurance()
     * @uses RequestCpgOrder::setCancelInsurance()
     * @uses RequestCpgOrder::setLanguage()
     * @uses RequestCpgOrder::setPassword()
     * @uses RequestCpgOrder::setPreAutorisation()
     * @uses RequestCpgOrder::setPayment()
     * @uses RequestCpgOrder::setPrice()
     * @uses RequestCpgOrder::setSupplement()
     * @uses RequestCpgOrder::setTracking()
     * @uses RequestCpgOrder::setCp()
     * @uses RequestCpgOrder::setPromoCode()
     * @uses RequestCpgOrder::setPromoCash()
     * @uses RequestCpgOrder::setFidelityUse()
     * @uses RequestCpgOrder::setFidMap()
     * @uses RequestCpgOrder::setIdPlace()
     * @uses RequestCpgOrder::setPromoPlace()
     * @uses RequestCpgOrder::setSimulation()
     * @uses RequestCpgOrder::setTmpOption()
     * @uses RequestCpgOrder::setCallbackYES()
     * @uses RequestCpgOrder::setCallbackNO()
     * @uses RequestCpgOrder::setResaFerme()
     * @uses RequestCpgOrder::setVehicle()
     * @uses RequestCpgOrder::setIdCustomer()
     * @uses RequestCpgOrder::setStayDeposit()
     * @uses RequestCpgOrder::setSelectPlace()
     * @uses RequestCpgOrder::setOptionalStay()
     * @uses RequestCpgOrder::setIdOrder()
     * @param string $externalId
     * @param string $comment
     * @param string $callCenterComment
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer
     * @param float $deposit
     * @param float $expenseReservation
     * @param \Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param string $idUser
     * @param bool $cancelEnable
     * @param int $selectedCancelInsurance
     * @param float $cancelInsurance
     * @param string $language
     * @param string $password
     * @param bool $preAutorisation
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment
     * @param float $price
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @param string $tracking
     * @param int $cp
     * @param string[] $promoCode
     * @param bool $promoCash
     * @param string $fidelityUse
     * @param string $fidMap
     * @param int $idPlace
     * @param bool $promoPlace
     * @param bool $simulation
     * @param bool $tmpOption
     * @param string $callbackYES
     * @param string $callbackNO
     * @param bool $resaFerme
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @param string $idCustomer
     * @param \Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @param bool $optionalStay
     * @param string $idOrder
     */
    public function __construct(?string $externalId = null, ?string $comment = null, ?string $callCenterComment = null, ?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null, ?float $deposit = null, ?float $expenseReservation = null, ?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?string $idUser = null, ?bool $cancelEnable = null, ?int $selectedCancelInsurance = null, ?float $cancelInsurance = null, ?string $language = null, ?string $password = null, ?bool $preAutorisation = null, ?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null, ?float $price = null, ?array $supplement = null, ?string $tracking = null, ?int $cp = null, ?array $promoCode = null, ?bool $promoCash = null, ?string $fidelityUse = null, ?string $fidMap = null, ?int $idPlace = null, ?bool $promoPlace = null, ?bool $simulation = null, ?bool $tmpOption = null, ?string $callbackYES = null, ?string $callbackNO = null, ?bool $resaFerme = null, ?array $vehicle = null, ?string $idCustomer = null, ?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null, ?bool $optionalStay = null, ?string $idOrder = null)
    {
        $this
            ->setExternalId($externalId)
            ->setComment($comment)
            ->setCallCenterComment($callCenterComment)
            ->setCustomer($customer)
            ->setDeposit($deposit)
            ->setExpenseReservation($expenseReservation)
            ->setIdPaymentType($idPaymentType)
            ->setIdStay($idStay)
            ->setIdUser($idUser)
            ->setCancelEnable($cancelEnable)
            ->setSelectedCancelInsurance($selectedCancelInsurance)
            ->setCancelInsurance($cancelInsurance)
            ->setLanguage($language)
            ->setPassword($password)
            ->setPreAutorisation($preAutorisation)
            ->setPayment($payment)
            ->setPrice($price)
            ->setSupplement($supplement)
            ->setTracking($tracking)
            ->setCp($cp)
            ->setPromoCode($promoCode)
            ->setPromoCash($promoCash)
            ->setFidelityUse($fidelityUse)
            ->setFidMap($fidMap)
            ->setIdPlace($idPlace)
            ->setPromoPlace($promoPlace)
            ->setSimulation($simulation)
            ->setTmpOption($tmpOption)
            ->setCallbackYES($callbackYES)
            ->setCallbackNO($callbackNO)
            ->setResaFerme($resaFerme)
            ->setVehicle($vehicle)
            ->setIdCustomer($idCustomer)
            ->setStayDeposit($stayDeposit)
            ->setSelectPlace($selectPlace)
            ->setOptionalStay($optionalStay)
            ->setIdOrder($idOrder);
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * Get callCenterComment value
     * @return string|null
     */
    public function getCallCenterComment(): ?string
    {
        return $this->callCenterComment;
    }
    /**
     * Set callCenterComment value
     * @param string $callCenterComment
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setCallCenterComment(?string $callCenterComment = null): self
    {
        // validation for constraint: string
        if (!is_null($callCenterComment) && !is_string($callCenterComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callCenterComment, true), gettype($callCenterComment)), __LINE__);
        }
        $this->callCenterComment = $callCenterComment;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setCustomer(?\Maetva\ESeason\WebCampServices\StructType\CustomerOrder $customer = null): self
    {
        $this->customer = $customer;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
    /**
     * Get expenseReservation value
     * @return float|null
     */
    public function getExpenseReservation(): ?float
    {
        return $this->expenseReservation;
    }
    /**
     * Set expenseReservation value
     * @param float $expenseReservation
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setExpenseReservation(?float $expenseReservation = null): self
    {
        // validation for constraint: float
        if (!is_null($expenseReservation) && !(is_float($expenseReservation) || is_numeric($expenseReservation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expenseReservation, true), gettype($expenseReservation)), __LINE__);
        }
        $this->expenseReservation = $expenseReservation;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setIdPaymentType(?\Maetva\ESeason\WebCampServices\StructType\IdPaymentType $idPaymentType = null): self
    {
        $this->idPaymentType = $idPaymentType;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setPayment(?\Maetva\ESeason\WebCampServices\StructType\PaymentFormType $payment = null): self
    {
        $this->payment = $payment;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
        foreach ($values as $requestCpgOrderSupplementItem) {
            // validation for constraint: itemType
            if (!$requestCpgOrderSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
                $invalidValues[] = is_object($requestCpgOrderSupplementItem) ? get_class($requestCpgOrderSupplementItem) : sprintf('%s(%s)', gettype($requestCpgOrderSupplementItem), var_export($requestCpgOrderSupplementItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * Get cp value
     * @return int|null
     */
    public function getCp(): ?int
    {
        return $this->cp;
    }
    /**
     * Set cp value
     * @param int $cp
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setCp(?int $cp = null): self
    {
        // validation for constraint: int
        if (!is_null($cp) && !(is_int($cp) || ctype_digit($cp))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cp, true), gettype($cp)), __LINE__);
        }
        $this->cp = $cp;
        
        return $this;
    }
    /**
     * Get promoCode value
     * @return string[]
     */
    public function getPromoCode(): ?array
    {
        return $this->promoCode;
    }
    /**
     * This method is responsible for validating the values passed to the setPromoCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromoCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromoCodeForArrayConstraintsFromSetPromoCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgOrderPromoCodeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgOrderPromoCodeItem)) {
                $invalidValues[] = is_object($requestCpgOrderPromoCodeItem) ? get_class($requestCpgOrderPromoCodeItem) : sprintf('%s(%s)', gettype($requestCpgOrderPromoCodeItem), var_export($requestCpgOrderPromoCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The promoCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set promoCode value
     * @throws InvalidArgumentException
     * @param string[] $promoCode
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setPromoCode(?array $promoCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($promoCodeArrayErrorMessage = self::validatePromoCodeForArrayConstraintsFromSetPromoCode($promoCode))) {
            throw new InvalidArgumentException($promoCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($promoCode) && count($promoCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($promoCode)), __LINE__);
        }
        $this->promoCode = $promoCode;
        
        return $this;
    }
    /**
     * Add item to promoCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function addToPromoCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The promoCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->promoCode) && count($this->promoCode) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->promoCode)), __LINE__);
        }
        $this->promoCode[] = $item;
        
        return $this;
    }
    /**
     * Get promoCash value
     * @return bool|null
     */
    public function getPromoCash(): ?bool
    {
        return $this->promoCash;
    }
    /**
     * Set promoCash value
     * @param bool $promoCash
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setPromoCash(?bool $promoCash = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promoCash) && !is_bool($promoCash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promoCash, true), gettype($promoCash)), __LINE__);
        }
        $this->promoCash = $promoCash;
        
        return $this;
    }
    /**
     * Get fidelityUse value
     * @return string|null
     */
    public function getFidelityUse(): ?string
    {
        return $this->fidelityUse;
    }
    /**
     * Set fidelityUse value
     * @param string $fidelityUse
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setFidelityUse(?string $fidelityUse = null): self
    {
        // validation for constraint: string
        if (!is_null($fidelityUse) && !is_string($fidelityUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidelityUse, true), gettype($fidelityUse)), __LINE__);
        }
        $this->fidelityUse = $fidelityUse;
        
        return $this;
    }
    /**
     * Get fidMap value
     * @return string|null
     */
    public function getFidMap(): ?string
    {
        return $this->fidMap;
    }
    /**
     * Set fidMap value
     * @param string $fidMap
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setFidMap(?string $fidMap = null): self
    {
        // validation for constraint: string
        if (!is_null($fidMap) && !is_string($fidMap)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidMap, true), gettype($fidMap)), __LINE__);
        }
        $this->fidMap = $fidMap;
        
        return $this;
    }
    /**
     * Get idPlace value
     * @return int|null
     */
    public function getIdPlace(): ?int
    {
        return $this->idPlace;
    }
    /**
     * Set idPlace value
     * @param int $idPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setIdPlace(?int $idPlace = null): self
    {
        // validation for constraint: int
        if (!is_null($idPlace) && !(is_int($idPlace) || ctype_digit($idPlace))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPlace, true), gettype($idPlace)), __LINE__);
        }
        $this->idPlace = $idPlace;
        
        return $this;
    }
    /**
     * Get promoPlace value
     * @return bool|null
     */
    public function getPromoPlace(): ?bool
    {
        return $this->promoPlace;
    }
    /**
     * Set promoPlace value
     * @param bool $promoPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setPromoPlace(?bool $promoPlace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($promoPlace) && !is_bool($promoPlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($promoPlace, true), gettype($promoPlace)), __LINE__);
        }
        $this->promoPlace = $promoPlace;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * Get callbackYES value
     * @return string|null
     */
    public function getCallbackYES(): ?string
    {
        return $this->callbackYES;
    }
    /**
     * Set callbackYES value
     * @param string $callbackYES
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setCallbackYES(?string $callbackYES = null): self
    {
        // validation for constraint: string
        if (!is_null($callbackYES) && !is_string($callbackYES)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callbackYES, true), gettype($callbackYES)), __LINE__);
        }
        $this->callbackYES = $callbackYES;
        
        return $this;
    }
    /**
     * Get callbackNO value
     * @return string|null
     */
    public function getCallbackNO(): ?string
    {
        return $this->callbackNO;
    }
    /**
     * Set callbackNO value
     * @param string $callbackNO
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setCallbackNO(?string $callbackNO = null): self
    {
        // validation for constraint: string
        if (!is_null($callbackNO) && !is_string($callbackNO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callbackNO, true), gettype($callbackNO)), __LINE__);
        }
        $this->callbackNO = $callbackNO;
        
        return $this;
    }
    /**
     * Get resaFerme value
     * @return bool|null
     */
    public function getResaFerme(): ?bool
    {
        return $this->resaFerme;
    }
    /**
     * Set resaFerme value
     * @param bool $resaFerme
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setResaFerme(?bool $resaFerme = null): self
    {
        // validation for constraint: boolean
        if (!is_null($resaFerme) && !is_bool($resaFerme)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resaFerme, true), gettype($resaFerme)), __LINE__);
        }
        $this->resaFerme = $resaFerme;
        
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
        foreach ($values as $requestCpgOrderVehicleItem) {
            // validation for constraint: itemType
            if (!$requestCpgOrderVehicleItem instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
                $invalidValues[] = is_object($requestCpgOrderVehicleItem) ? get_class($requestCpgOrderVehicleItem) : sprintf('%s(%s)', gettype($requestCpgOrderVehicleItem), var_export($requestCpgOrderVehicleItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setStayDeposit(?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null): self
    {
        $this->stayDeposit = $stayDeposit;
        
        return $this;
    }
    /**
     * Get selectPlace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    public function getSelectPlace(): ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace
    {
        return isset($this->selectPlace) ? $this->selectPlace : null;
    }
    /**
     * Set selectPlace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        if (is_null($selectPlace) || (is_array($selectPlace) && empty($selectPlace))) {
            unset($this->selectPlace);
        } else {
            $this->selectPlace = $selectPlace;
        }
        
        return $this;
    }
    /**
     * Get optionalStay value
     * @return bool|null
     */
    public function getOptionalStay(): ?bool
    {
        return $this->optionalStay;
    }
    /**
     * Set optionalStay value
     * @param bool $optionalStay
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
     */
    public function setOptionalStay(?bool $optionalStay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optionalStay) && !is_bool($optionalStay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optionalStay, true), gettype($optionalStay)), __LINE__);
        }
        $this->optionalStay = $optionalStay;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder
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
}
