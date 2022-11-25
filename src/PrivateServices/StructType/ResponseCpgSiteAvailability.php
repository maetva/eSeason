<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgSiteAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgSiteAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The idsite
     * @var int|null
     */
    protected ?int $idsite = null;
    /**
     * The begin
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $status = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
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
     * The fidelityNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $fidelityNights = null;
    /**
     * The fidelityStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $fidelityStatus = null;
    /**
     * The idCategYelloh
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCategYelloh = null;
    /**
     * The flexDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexDate = null;
    /**
     * The flexCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $flexCapacity = null;
    /**
     * The libCateg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libCateg = null;
    /**
     * The libTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libTariff = null;
    /**
     * The promoInfo
     * @var \Maetva\ESeason\PrivateServices\StructType\PromoInfo|null
     */
    protected ?\Maetva\ESeason\PrivateServices\StructType\PromoInfo $promoInfo = null;
    /**
     * The hasPromotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hasPromotion = null;
    /**
     * The specificParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\PrivateServices\StructType\SpecificParam[]
     */
    protected ?array $specificParam = null;
    /**
     * Constructor method for ResponseCpgSiteAvailability
     * @uses ResponseCpgSiteAvailability::setIdUser()
     * @uses ResponseCpgSiteAvailability::setIdsite()
     * @uses ResponseCpgSiteAvailability::setBegin()
     * @uses ResponseCpgSiteAvailability::setEnd()
     * @uses ResponseCpgSiteAvailability::setStatus()
     * @uses ResponseCpgSiteAvailability::setPrice()
     * @uses ResponseCpgSiteAvailability::setError()
     * @uses ResponseCpgSiteAvailability::setMessError()
     * @uses ResponseCpgSiteAvailability::setFidelityNights()
     * @uses ResponseCpgSiteAvailability::setFidelityStatus()
     * @uses ResponseCpgSiteAvailability::setIdCategYelloh()
     * @uses ResponseCpgSiteAvailability::setFlexDate()
     * @uses ResponseCpgSiteAvailability::setFlexCapacity()
     * @uses ResponseCpgSiteAvailability::setLibCateg()
     * @uses ResponseCpgSiteAvailability::setLibTariff()
     * @uses ResponseCpgSiteAvailability::setPromoInfo()
     * @uses ResponseCpgSiteAvailability::setHasPromotion()
     * @uses ResponseCpgSiteAvailability::setSpecificParam()
     * @param string $idUser
     * @param int $idsite
     * @param string $begin
     * @param string $end
     * @param bool $status
     * @param float $price
     * @param int $error
     * @param string $messError
     * @param int $fidelityNights
     * @param int $fidelityStatus
     * @param string $idCategYelloh
     * @param bool $flexDate
     * @param bool $flexCapacity
     * @param string $libCateg
     * @param string $libTariff
     * @param \Maetva\ESeason\PrivateServices\StructType\PromoInfo $promoInfo
     * @param bool $hasPromotion
     * @param \Maetva\ESeason\PrivateServices\StructType\SpecificParam[] $specificParam
     */
    public function __construct(?string $idUser = null, ?int $idsite = null, ?string $begin = null, ?string $end = null, ?bool $status = null, ?float $price = null, ?int $error = null, ?string $messError = null, ?int $fidelityNights = null, ?int $fidelityStatus = null, ?string $idCategYelloh = null, ?bool $flexDate = null, ?bool $flexCapacity = null, ?string $libCateg = null, ?string $libTariff = null, ?\Maetva\ESeason\PrivateServices\StructType\PromoInfo $promoInfo = null, ?bool $hasPromotion = null, ?array $specificParam = null)
    {
        $this
            ->setIdUser($idUser)
            ->setIdsite($idsite)
            ->setBegin($begin)
            ->setEnd($end)
            ->setStatus($status)
            ->setPrice($price)
            ->setError($error)
            ->setMessError($messError)
            ->setFidelityNights($fidelityNights)
            ->setFidelityStatus($fidelityStatus)
            ->setIdCategYelloh($idCategYelloh)
            ->setFlexDate($flexDate)
            ->setFlexCapacity($flexCapacity)
            ->setLibCateg($libCateg)
            ->setLibTariff($libTariff)
            ->setPromoInfo($promoInfo)
            ->setHasPromotion($hasPromotion)
            ->setSpecificParam($specificParam);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
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
     * Get idsite value
     * @return int|null
     */
    public function getIdsite(): ?int
    {
        return $this->idsite;
    }
    /**
     * Set idsite value
     * @param int $idsite
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setIdsite(?int $idsite = null): self
    {
        // validation for constraint: int
        if (!is_null($idsite) && !(is_int($idsite) || ctype_digit($idsite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idsite, true), gettype($idsite)), __LINE__);
        }
        $this->idsite = $idsite;
        
        return $this;
    }
    /**
     * Get begin value
     * @return string|null
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }
    /**
     * Set begin value
     * @param string $begin
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setBegin(?string $begin = null): self
    {
        // validation for constraint: string
        if (!is_null($begin) && !is_string($begin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin, true), gettype($begin)), __LINE__);
        }
        $this->begin = $begin;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setStatus(?bool $status = null): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
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
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
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
     * Get fidelityNights value
     * @return int|null
     */
    public function getFidelityNights(): ?int
    {
        return $this->fidelityNights;
    }
    /**
     * Set fidelityNights value
     * @param int $fidelityNights
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setFidelityNights(?int $fidelityNights = null): self
    {
        // validation for constraint: int
        if (!is_null($fidelityNights) && !(is_int($fidelityNights) || ctype_digit($fidelityNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidelityNights, true), gettype($fidelityNights)), __LINE__);
        }
        $this->fidelityNights = $fidelityNights;
        
        return $this;
    }
    /**
     * Get fidelityStatus value
     * @return int|null
     */
    public function getFidelityStatus(): ?int
    {
        return $this->fidelityStatus;
    }
    /**
     * Set fidelityStatus value
     * @param int $fidelityStatus
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setFidelityStatus(?int $fidelityStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($fidelityStatus) && !(is_int($fidelityStatus) || ctype_digit($fidelityStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fidelityStatus, true), gettype($fidelityStatus)), __LINE__);
        }
        $this->fidelityStatus = $fidelityStatus;
        
        return $this;
    }
    /**
     * Get idCategYelloh value
     * @return string|null
     */
    public function getIdCategYelloh(): ?string
    {
        return $this->idCategYelloh;
    }
    /**
     * Set idCategYelloh value
     * @param string $idCategYelloh
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setIdCategYelloh(?string $idCategYelloh = null): self
    {
        // validation for constraint: string
        if (!is_null($idCategYelloh) && !is_string($idCategYelloh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCategYelloh, true), gettype($idCategYelloh)), __LINE__);
        }
        $this->idCategYelloh = $idCategYelloh;
        
        return $this;
    }
    /**
     * Get flexDate value
     * @return bool|null
     */
    public function getFlexDate(): ?bool
    {
        return $this->flexDate;
    }
    /**
     * Set flexDate value
     * @param bool $flexDate
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setFlexDate(?bool $flexDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexDate) && !is_bool($flexDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexDate, true), gettype($flexDate)), __LINE__);
        }
        $this->flexDate = $flexDate;
        
        return $this;
    }
    /**
     * Get flexCapacity value
     * @return bool|null
     */
    public function getFlexCapacity(): ?bool
    {
        return $this->flexCapacity;
    }
    /**
     * Set flexCapacity value
     * @param bool $flexCapacity
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setFlexCapacity(?bool $flexCapacity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexCapacity) && !is_bool($flexCapacity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexCapacity, true), gettype($flexCapacity)), __LINE__);
        }
        $this->flexCapacity = $flexCapacity;
        
        return $this;
    }
    /**
     * Get libCateg value
     * @return string|null
     */
    public function getLibCateg(): ?string
    {
        return $this->libCateg;
    }
    /**
     * Set libCateg value
     * @param string $libCateg
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setLibCateg(?string $libCateg = null): self
    {
        // validation for constraint: string
        if (!is_null($libCateg) && !is_string($libCateg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libCateg, true), gettype($libCateg)), __LINE__);
        }
        $this->libCateg = $libCateg;
        
        return $this;
    }
    /**
     * Get libTariff value
     * @return string|null
     */
    public function getLibTariff(): ?string
    {
        return $this->libTariff;
    }
    /**
     * Set libTariff value
     * @param string $libTariff
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setLibTariff(?string $libTariff = null): self
    {
        // validation for constraint: string
        if (!is_null($libTariff) && !is_string($libTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libTariff, true), gettype($libTariff)), __LINE__);
        }
        $this->libTariff = $libTariff;
        
        return $this;
    }
    /**
     * Get promoInfo value
     * @return \Maetva\ESeason\PrivateServices\StructType\PromoInfo|null
     */
    public function getPromoInfo(): ?\Maetva\ESeason\PrivateServices\StructType\PromoInfo
    {
        return $this->promoInfo;
    }
    /**
     * Set promoInfo value
     * @param \Maetva\ESeason\PrivateServices\StructType\PromoInfo $promoInfo
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setPromoInfo(?\Maetva\ESeason\PrivateServices\StructType\PromoInfo $promoInfo = null): self
    {
        $this->promoInfo = $promoInfo;
        
        return $this;
    }
    /**
     * Get hasPromotion value
     * @return bool|null
     */
    public function getHasPromotion(): ?bool
    {
        return $this->hasPromotion;
    }
    /**
     * Set hasPromotion value
     * @param bool $hasPromotion
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setHasPromotion(?bool $hasPromotion = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasPromotion) && !is_bool($hasPromotion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPromotion, true), gettype($hasPromotion)), __LINE__);
        }
        $this->hasPromotion = $hasPromotion;
        
        return $this;
    }
    /**
     * Get specificParam value
     * @return \Maetva\ESeason\PrivateServices\StructType\SpecificParam[]
     */
    public function getSpecificParam(): ?array
    {
        return $this->specificParam;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecificParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificParam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecificParamForArrayConstraintsFromSetSpecificParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgSiteAvailabilitySpecificParamItem) {
            // validation for constraint: itemType
            if (!$responseCpgSiteAvailabilitySpecificParamItem instanceof \Maetva\ESeason\PrivateServices\StructType\SpecificParam) {
                $invalidValues[] = is_object($responseCpgSiteAvailabilitySpecificParamItem) ? get_class($responseCpgSiteAvailabilitySpecificParamItem) : sprintf('%s(%s)', gettype($responseCpgSiteAvailabilitySpecificParamItem), var_export($responseCpgSiteAvailabilitySpecificParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The specificParam property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\SpecificParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set specificParam value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\SpecificParam[] $specificParam
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function setSpecificParam(?array $specificParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificParamArrayErrorMessage = self::validateSpecificParamForArrayConstraintsFromSetSpecificParam($specificParam))) {
            throw new InvalidArgumentException($specificParamArrayErrorMessage, __LINE__);
        }
        $this->specificParam = $specificParam;
        
        return $this;
    }
    /**
     * Add item to specificParam value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\SpecificParam $item
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability
     */
    public function addToSpecificParam(\Maetva\ESeason\PrivateServices\StructType\SpecificParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\PrivateServices\StructType\SpecificParam) {
            throw new InvalidArgumentException(sprintf('The specificParam property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\SpecificParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->specificParam[] = $item;
        
        return $this;
    }
}
