<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgUnitPrice StructType
 * @subpackage Structs
 */
class RequestCpgUnitPrice extends AbstractStructBase
{
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
     * The idStay
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The nbPers
     * @var int|null
     */
    protected ?int $nbPers = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
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
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * Constructor method for RequestCpgUnitPrice
     * @uses RequestCpgUnitPrice::setIdUser()
     * @uses RequestCpgUnitPrice::setPassword()
     * @uses RequestCpgUnitPrice::setIdStay()
     * @uses RequestCpgUnitPrice::setNbPers()
     * @uses RequestCpgUnitPrice::setLanguage()
     * @uses RequestCpgUnitPrice::setPromoCode()
     * @uses RequestCpgUnitPrice::setPromoCash()
     * @uses RequestCpgUnitPrice::setFidelityUse()
     * @uses RequestCpgUnitPrice::setPromoPlace()
     * @uses RequestCpgUnitPrice::setIdCustomer()
     * @param string $idUser
     * @param string $password
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param int $nbPers
     * @param string $language
     * @param string[] $promoCode
     * @param bool $promoCash
     * @param string $fidelityUse
     * @param bool $promoPlace
     * @param string $idCustomer
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?int $nbPers = null, ?string $language = null, ?array $promoCode = null, ?bool $promoCash = null, ?string $fidelityUse = null, ?bool $promoPlace = null, ?string $idCustomer = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdStay($idStay)
            ->setNbPers($nbPers)
            ->setLanguage($language)
            ->setPromoCode($promoCode)
            ->setPromoCash($promoCash)
            ->setFidelityUse($fidelityUse)
            ->setPromoPlace($promoPlace)
            ->setIdCustomer($idCustomer);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
        return $this;
    }
    /**
     * Get nbPers value
     * @return int|null
     */
    public function getNbPers(): ?int
    {
        return $this->nbPers;
    }
    /**
     * Set nbPers value
     * @param int $nbPers
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
     */
    public function setNbPers(?int $nbPers = null): self
    {
        // validation for constraint: int
        if (!is_null($nbPers) && !(is_int($nbPers) || ctype_digit($nbPers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbPers, true), gettype($nbPers)), __LINE__);
        }
        $this->nbPers = $nbPers;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
        foreach ($values as $requestCpgUnitPricePromoCodeItem) {
            // validation for constraint: itemType
            if (!is_string($requestCpgUnitPricePromoCodeItem)) {
                $invalidValues[] = is_object($requestCpgUnitPricePromoCodeItem) ? get_class($requestCpgUnitPricePromoCodeItem) : sprintf('%s(%s)', gettype($requestCpgUnitPricePromoCodeItem), var_export($requestCpgUnitPricePromoCodeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice
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
}
