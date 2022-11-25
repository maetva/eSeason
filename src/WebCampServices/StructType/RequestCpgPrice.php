<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgPrice StructType
 * @subpackage Structs
 */
class RequestCpgPrice extends AbstractStructBase
{
    /**
     * The cancelInsurance
     * @var bool|null
     */
    protected ?bool $cancelInsurance = null;
    /**
     * The selectedCancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $selectedCancelInsurance = null;
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
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    protected ?array $supplement = null;
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
     * The promoPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $promoPlace = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $card = null;
    /**
     * The idMlc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idMlc = null;
    /**
     * The detailedOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $detailedOrder = null;
    /**
     * The enableExpenseReservation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $enableExpenseReservation = null;
    /**
     * Constructor method for RequestCpgPrice
     * @uses RequestCpgPrice::setCancelInsurance()
     * @uses RequestCpgPrice::setSelectedCancelInsurance()
     * @uses RequestCpgPrice::setIdStay()
     * @uses RequestCpgPrice::setIdUser()
     * @uses RequestCpgPrice::setLanguage()
     * @uses RequestCpgPrice::setPassword()
     * @uses RequestCpgPrice::setSupplement()
     * @uses RequestCpgPrice::setPromoCode()
     * @uses RequestCpgPrice::setPromoCash()
     * @uses RequestCpgPrice::setFidelityUse()
     * @uses RequestCpgPrice::setPromoPlace()
     * @uses RequestCpgPrice::setSelectPlace()
     * @uses RequestCpgPrice::setIdCustomer()
     * @uses RequestCpgPrice::setCard()
     * @uses RequestCpgPrice::setIdMlc()
     * @uses RequestCpgPrice::setDetailedOrder()
     * @uses RequestCpgPrice::setEnableExpenseReservation()
     * @param bool $cancelInsurance
     * @param int $selectedCancelInsurance
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param string $idUser
     * @param string $language
     * @param string $password
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @param string[] $promoCode
     * @param bool $promoCash
     * @param string $fidelityUse
     * @param bool $promoPlace
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @param string $idCustomer
     * @param string $card
     * @param string $idMlc
     * @param bool $detailedOrder
     * @param bool $enableExpenseReservation
     */
    public function __construct(?bool $cancelInsurance = null, ?int $selectedCancelInsurance = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?string $idUser = null, ?string $language = null, ?string $password = null, ?array $supplement = null, ?array $promoCode = null, ?bool $promoCash = null, ?string $fidelityUse = null, ?bool $promoPlace = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null, ?string $idCustomer = null, ?string $card = null, ?string $idMlc = null, ?bool $detailedOrder = null, ?bool $enableExpenseReservation = null)
    {
        $this
            ->setCancelInsurance($cancelInsurance)
            ->setSelectedCancelInsurance($selectedCancelInsurance)
            ->setIdStay($idStay)
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password)
            ->setSupplement($supplement)
            ->setPromoCode($promoCode)
            ->setPromoCash($promoCash)
            ->setFidelityUse($fidelityUse)
            ->setPromoPlace($promoPlace)
            ->setSelectPlace($selectPlace)
            ->setIdCustomer($idCustomer)
            ->setCard($card)
            ->setIdMlc($idMlc)
            ->setDetailedOrder($detailedOrder)
            ->setEnableExpenseReservation($enableExpenseReservation);
    }
    /**
     * Get cancelInsurance value
     * @return bool|null
     */
    public function getCancelInsurance(): ?bool
    {
        return $this->cancelInsurance;
    }
    /**
     * Set cancelInsurance value
     * @param bool $cancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
     */
    public function setCancelInsurance(?bool $cancelInsurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelInsurance) && !is_bool($cancelInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelInsurance, true), gettype($cancelInsurance)), __LINE__);
        }
        $this->cancelInsurance = $cancelInsurance;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
        foreach ($values as $requestCpgPriceSupplementItem) {
            // validation for constraint: itemType
            if (!$requestCpgPriceSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
                $invalidValues[] = is_object($requestCpgPriceSupplementItem) ? get_class($requestCpgPriceSupplementItem) : sprintf('%s(%s)', gettype($requestCpgPriceSupplementItem), var_export($requestCpgPriceSupplementItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
        foreach ($values as $requestCpgPricePromoCodeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgPricePromoCodeItem)) {
                $invalidValues[] = is_object($requestCpgPricePromoCodeItem) ? get_class($requestCpgPricePromoCodeItem) : sprintf('%s(%s)', gettype($requestCpgPricePromoCodeItem), var_export($requestCpgPricePromoCodeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        $this->selectPlace = $selectPlace;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
     * Get card value
     * @return string|null
     */
    public function getCard(): ?string
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param string $card
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
     */
    public function setCard(?string $card = null): self
    {
        // validation for constraint: string
        if (!is_null($card) && !is_string($card)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($card, true), gettype($card)), __LINE__);
        }
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get idMlc value
     * @return string|null
     */
    public function getIdMlc(): ?string
    {
        return $this->idMlc;
    }
    /**
     * Set idMlc value
     * @param string $idMlc
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
     */
    public function setIdMlc(?string $idMlc = null): self
    {
        // validation for constraint: string
        if (!is_null($idMlc) && !is_string($idMlc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idMlc, true), gettype($idMlc)), __LINE__);
        }
        $this->idMlc = $idMlc;
        
        return $this;
    }
    /**
     * Get detailedOrder value
     * @return bool|null
     */
    public function getDetailedOrder(): ?bool
    {
        return $this->detailedOrder;
    }
    /**
     * Set detailedOrder value
     * @param bool $detailedOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
     */
    public function setDetailedOrder(?bool $detailedOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($detailedOrder) && !is_bool($detailedOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($detailedOrder, true), gettype($detailedOrder)), __LINE__);
        }
        $this->detailedOrder = $detailedOrder;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice
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
}
