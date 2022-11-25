<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FriendOrder StructType
 * @subpackage Structs
 */
class FriendOrder extends AbstractStructBase
{
    /**
     * The lastname
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The birthday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The civility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $civility = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The isBuyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isBuyer = null;
    /**
     * The hashFriend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hashFriend = null;
    /**
     * The takePartToStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $takePartToStay = null;
    /**
     * Constructor method for FriendOrder
     * @uses FriendOrder::setLastname()
     * @uses FriendOrder::setBirthday()
     * @uses FriendOrder::setCivility()
     * @uses FriendOrder::setFirstname()
     * @uses FriendOrder::setIsBuyer()
     * @uses FriendOrder::setHashFriend()
     * @uses FriendOrder::setTakePartToStay()
     * @param string $lastname
     * @param string $birthday
     * @param string $civility
     * @param string $firstname
     * @param bool $isBuyer
     * @param string $hashFriend
     * @param bool $takePartToStay
     */
    public function __construct(?string $lastname = null, ?string $birthday = null, ?string $civility = null, ?string $firstname = null, ?bool $isBuyer = null, ?string $hashFriend = null, ?bool $takePartToStay = null)
    {
        $this
            ->setLastname($lastname)
            ->setBirthday($birthday)
            ->setCivility($civility)
            ->setFirstname($firstname)
            ->setIsBuyer($isBuyer)
            ->setHashFriend($hashFriend)
            ->setTakePartToStay($takePartToStay);
    }
    /**
     * Get lastname value
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    /**
     * Set lastname value
     * @param string $lastname
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setLastname(?string $lastname = null): self
    {
        // validation for constraint: string
        if (!is_null($lastname) && !is_string($lastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastname, true), gettype($lastname)), __LINE__);
        }
        $this->lastname = $lastname;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get civility value
     * @return string|null
     */
    public function getCivility(): ?string
    {
        return $this->civility;
    }
    /**
     * Set civility value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Civility::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Civility::getValidValues()
     * @throws InvalidArgumentException
     * @param string $civility
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setCivility(?string $civility = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Civility::valueIsValid($civility)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Civility', is_array($civility) ? implode(', ', $civility) : var_export($civility, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Civility::getValidValues())), __LINE__);
        }
        $this->civility = $civility;
        
        return $this;
    }
    /**
     * Get firstname value
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    /**
     * Set firstname value
     * @param string $firstname
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setFirstname(?string $firstname = null): self
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        $this->firstname = $firstname;
        
        return $this;
    }
    /**
     * Get isBuyer value
     * @return bool|null
     */
    public function getIsBuyer(): ?bool
    {
        return $this->isBuyer;
    }
    /**
     * Set isBuyer value
     * @param bool $isBuyer
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setIsBuyer(?bool $isBuyer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBuyer) && !is_bool($isBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBuyer, true), gettype($isBuyer)), __LINE__);
        }
        $this->isBuyer = $isBuyer;
        
        return $this;
    }
    /**
     * Get hashFriend value
     * @return string|null
     */
    public function getHashFriend(): ?string
    {
        return $this->hashFriend;
    }
    /**
     * Set hashFriend value
     * @param string $hashFriend
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setHashFriend(?string $hashFriend = null): self
    {
        // validation for constraint: string
        if (!is_null($hashFriend) && !is_string($hashFriend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hashFriend, true), gettype($hashFriend)), __LINE__);
        }
        $this->hashFriend = $hashFriend;
        
        return $this;
    }
    /**
     * Get takePartToStay value
     * @return bool|null
     */
    public function getTakePartToStay(): ?bool
    {
        return $this->takePartToStay;
    }
    /**
     * Set takePartToStay value
     * @param bool $takePartToStay
     * @return \Maetva\ESeason\WebCampServices\StructType\FriendOrder
     */
    public function setTakePartToStay(?bool $takePartToStay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($takePartToStay) && !is_bool($takePartToStay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($takePartToStay, true), gettype($takePartToStay)), __LINE__);
        }
        $this->takePartToStay = $takePartToStay;
        
        return $this;
    }
}
