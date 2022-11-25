<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The idStay
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    protected ?array $supplement = null;
    /**
     * The cp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $cp = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The idPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idPlace = null;
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
     * The promoCash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoCash = null;
    /**
     * The promoCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $promoCode = null;
    /**
     * The promoPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoPlace = null;
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalId = null;
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
     * The expenseReservation
     * @var float|null
     */
    protected ?float $expenseReservation = null;
    /**
     * The friends
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\FriendOrder[]
     */
    protected ?array $friends = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * The idOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The numAdherent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numAdherent = null;
    /**
     * The numVacaf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numVacaf = null;
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
     * The optionalStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $optionalStay = null;
    /**
     * The sharegroop
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Sharegroop|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null;
    /**
     * Constructor method for Order
     * @uses Order::setIdStay()
     * @uses Order::setDeposit()
     * @uses Order::setSupplement()
     * @uses Order::setCp()
     * @uses Order::setPrice()
     * @uses Order::setIdPlace()
     * @uses Order::setComment()
     * @uses Order::setCallCenterComment()
     * @uses Order::setPromoCash()
     * @uses Order::setPromoCode()
     * @uses Order::setPromoPlace()
     * @uses Order::setExternalId()
     * @uses Order::setFidelityUse()
     * @uses Order::setFidMap()
     * @uses Order::setCancelEnable()
     * @uses Order::setSelectedCancelInsurance()
     * @uses Order::setCancelInsurance()
     * @uses Order::setExpenseReservation()
     * @uses Order::setFriends()
     * @uses Order::setSelectPlace()
     * @uses Order::setIdOrder()
     * @uses Order::setNumAdherent()
     * @uses Order::setNumVacaf()
     * @uses Order::setVehicle()
     * @uses Order::setStayDeposit()
     * @uses Order::setOptionalStay()
     * @uses Order::setSharegroop()
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param float $deposit
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @param int $cp
     * @param float $price
     * @param int $idPlace
     * @param string $comment
     * @param string $callCenterComment
     * @param bool $promoCash
     * @param string[] $promoCode
     * @param bool $promoPlace
     * @param string $externalId
     * @param string $fidelityUse
     * @param string $fidMap
     * @param bool $cancelEnable
     * @param int $selectedCancelInsurance
     * @param float $cancelInsurance
     * @param float $expenseReservation
     * @param \Maetva\ESeason\WebCampServices\StructType\FriendOrder[] $friends
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @param string $idOrder
     * @param string $numAdherent
     * @param string $numVacaf
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @param \Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit
     * @param bool $optionalStay
     * @param \Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop
     */
    public function __construct(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?float $deposit = null, ?array $supplement = null, ?int $cp = null, ?float $price = null, ?int $idPlace = null, ?string $comment = null, ?string $callCenterComment = null, ?bool $promoCash = null, ?array $promoCode = null, ?bool $promoPlace = null, ?string $externalId = null, ?string $fidelityUse = null, ?string $fidMap = null, ?bool $cancelEnable = null, ?int $selectedCancelInsurance = null, ?float $cancelInsurance = null, ?float $expenseReservation = null, ?array $friends = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null, ?string $idOrder = null, ?string $numAdherent = null, ?string $numVacaf = null, ?array $vehicle = null, ?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null, ?bool $optionalStay = null, ?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null)
    {
        $this
            ->setIdStay($idStay)
            ->setDeposit($deposit)
            ->setSupplement($supplement)
            ->setCp($cp)
            ->setPrice($price)
            ->setIdPlace($idPlace)
            ->setComment($comment)
            ->setCallCenterComment($callCenterComment)
            ->setPromoCash($promoCash)
            ->setPromoCode($promoCode)
            ->setPromoPlace($promoPlace)
            ->setExternalId($externalId)
            ->setFidelityUse($fidelityUse)
            ->setFidMap($fidMap)
            ->setCancelEnable($cancelEnable)
            ->setSelectedCancelInsurance($selectedCancelInsurance)
            ->setCancelInsurance($cancelInsurance)
            ->setExpenseReservation($expenseReservation)
            ->setFriends($friends)
            ->setSelectPlace($selectPlace)
            ->setIdOrder($idOrder)
            ->setNumAdherent($numAdherent)
            ->setNumVacaf($numVacaf)
            ->setVehicle($vehicle)
            ->setStayDeposit($stayDeposit)
            ->setOptionalStay($optionalStay)
            ->setSharegroop($sharegroop);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
        foreach ($values as $orderSupplementItem) {
            // validation for constraint: itemType
            if (!$orderSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
                $invalidValues[] = is_object($orderSupplementItem) ? get_class($orderSupplementItem) : sprintf('%s(%s)', gettype($orderSupplementItem), var_export($orderSupplementItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
        foreach ($values as $orderPromoCodeItem) {
            // validation for constraint: itemType
            if (!is_string($orderPromoCodeItem)) {
                $invalidValues[] = is_object($orderPromoCodeItem) ? get_class($orderPromoCodeItem) : sprintf('%s(%s)', gettype($orderPromoCodeItem), var_export($orderPromoCodeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * Get friends value
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder[]
     */
    public function getFriends(): ?array
    {
        return $this->friends;
    }
    /**
     * This method is responsible for validating the values passed to the setFriends method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFriends method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFriendsForArrayConstraintsFromSetFriends(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderFriendsItem) {
            // validation for constraint: itemType
            if (!$orderFriendsItem instanceof \Maetva\ESeason\WebCampServices\StructType\FriendOrder) {
                $invalidValues[] = is_object($orderFriendsItem) ? get_class($orderFriendsItem) : sprintf('%s(%s)', gettype($orderFriendsItem), var_export($orderFriendsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The friends property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\FriendOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set friends value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\FriendOrder[] $friends
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setFriends(?array $friends = null): self
    {
        // validation for constraint: array
        if ('' !== ($friendsArrayErrorMessage = self::validateFriendsForArrayConstraintsFromSetFriends($friends))) {
            throw new InvalidArgumentException($friendsArrayErrorMessage, __LINE__);
        }
        $this->friends = $friends;
        
        return $this;
    }
    /**
     * Add item to friends value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\FriendOrder $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function addToFriends(\Maetva\ESeason\WebCampServices\StructType\FriendOrder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\FriendOrder) {
            throw new InvalidArgumentException(sprintf('The friends property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\FriendOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->friends[] = $item;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        $this->selectPlace = $selectPlace;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * Get numAdherent value
     * @return string|null
     */
    public function getNumAdherent(): ?string
    {
        return $this->numAdherent;
    }
    /**
     * Set numAdherent value
     * @param string $numAdherent
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setNumAdherent(?string $numAdherent = null): self
    {
        // validation for constraint: string
        if (!is_null($numAdherent) && !is_string($numAdherent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numAdherent, true), gettype($numAdherent)), __LINE__);
        }
        $this->numAdherent = $numAdherent;
        
        return $this;
    }
    /**
     * Get numVacaf value
     * @return string|null
     */
    public function getNumVacaf(): ?string
    {
        return $this->numVacaf;
    }
    /**
     * Set numVacaf value
     * @param string $numVacaf
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setNumVacaf(?string $numVacaf = null): self
    {
        // validation for constraint: string
        if (!is_null($numVacaf) && !is_string($numVacaf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numVacaf, true), gettype($numVacaf)), __LINE__);
        }
        $this->numVacaf = $numVacaf;
        
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
        foreach ($values as $orderVehicleItem) {
            // validation for constraint: itemType
            if (!$orderVehicleItem instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
                $invalidValues[] = is_object($orderVehicleItem) ? get_class($orderVehicleItem) : sprintf('%s(%s)', gettype($orderVehicleItem), var_export($orderVehicleItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setStayDeposit(?\Maetva\ESeason\WebCampServices\StructType\StayDeposit $stayDeposit = null): self
    {
        $this->stayDeposit = $stayDeposit;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
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
     * Get sharegroop value
     * @return \Maetva\ESeason\WebCampServices\StructType\Sharegroop|null
     */
    public function getSharegroop(): ?\Maetva\ESeason\WebCampServices\StructType\Sharegroop
    {
        return $this->sharegroop;
    }
    /**
     * Set sharegroop value
     * @param \Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop
     * @return \Maetva\ESeason\WebCampServices\StructType\Order
     */
    public function setSharegroop(?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null): self
    {
        $this->sharegroop = $sharegroop;
        
        return $this;
    }
}
