<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerOrder StructType
 * @subpackage Structs
 */
class CustomerOrder extends AbstractStructBase
{
    /**
     * The civility
     * @var string|null
     */
    protected ?string $civility = null;
    /**
     * The lastname
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The birthday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The address2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address2 = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: [a-zA-Z]{2}
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The mobilphone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mobilphone = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The channel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $channel = null;
    /**
     * The identityCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identityCard = null;
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The externalId2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $externalId2 = null;
    /**
     * The fidelity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fidelity = null;
    /**
     * The newsletter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $newsletter = null;
    /**
     * The friends
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\FriendOrder[]
     */
    protected ?array $friends = null;
    /**
     * The optins
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[]
     */
    protected ?array $optins = null;
    /**
     * Constructor method for CustomerOrder
     * @uses CustomerOrder::setCivility()
     * @uses CustomerOrder::setLastname()
     * @uses CustomerOrder::setFirstname()
     * @uses CustomerOrder::setBirthday()
     * @uses CustomerOrder::setAddress()
     * @uses CustomerOrder::setAddress2()
     * @uses CustomerOrder::setZipCode()
     * @uses CustomerOrder::setCity()
     * @uses CustomerOrder::setCountry()
     * @uses CustomerOrder::setEmail()
     * @uses CustomerOrder::setFax()
     * @uses CustomerOrder::setMobilphone()
     * @uses CustomerOrder::setPhone()
     * @uses CustomerOrder::setChannel()
     * @uses CustomerOrder::setIdentityCard()
     * @uses CustomerOrder::setExternalId()
     * @uses CustomerOrder::setExternalId2()
     * @uses CustomerOrder::setFidelity()
     * @uses CustomerOrder::setNewsletter()
     * @uses CustomerOrder::setFriends()
     * @uses CustomerOrder::setOptins()
     * @param string $civility
     * @param string $lastname
     * @param string $firstname
     * @param string $birthday
     * @param string $address
     * @param string $address2
     * @param string $zipCode
     * @param string $city
     * @param string $country
     * @param string $email
     * @param string $fax
     * @param string $mobilphone
     * @param string $phone
     * @param int $channel
     * @param string $identityCard
     * @param string $externalId
     * @param string $externalId2
     * @param string $fidelity
     * @param bool $newsletter
     * @param \Maetva\ESeason\WebCampServices\StructType\FriendOrder[] $friends
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[] $optins
     */
    public function __construct(?string $civility = null, ?string $lastname = null, ?string $firstname = null, ?string $birthday = null, ?string $address = null, ?string $address2 = null, ?string $zipCode = null, ?string $city = null, ?string $country = null, ?string $email = null, ?string $fax = null, ?string $mobilphone = null, ?string $phone = null, ?int $channel = null, ?string $identityCard = null, ?string $externalId = null, ?string $externalId2 = null, ?string $fidelity = null, ?bool $newsletter = null, ?array $friends = null, ?array $optins = null)
    {
        $this
            ->setCivility($civility)
            ->setLastname($lastname)
            ->setFirstname($firstname)
            ->setBirthday($birthday)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountry($country)
            ->setEmail($email)
            ->setFax($fax)
            ->setMobilphone($mobilphone)
            ->setPhone($phone)
            ->setChannel($channel)
            ->setIdentityCard($identityCard)
            ->setExternalId($externalId)
            ->setExternalId2($externalId2)
            ->setFidelity($fidelity)
            ->setNewsletter($newsletter)
            ->setFriends($friends)
            ->setOptins($optins);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get address2 value
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }
    /**
     * Set address2 value
     * @param string $address2
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setAddress2(?string $address2 = null): self
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        $this->address2 = $address2;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z]{2})
        if (!is_null($country) && !preg_match('/[a-zA-Z]{2}/', $country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z]{2}/', var_export($country, true)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get mobilphone value
     * @return string|null
     */
    public function getMobilphone(): ?string
    {
        return $this->mobilphone;
    }
    /**
     * Set mobilphone value
     * @param string $mobilphone
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setMobilphone(?string $mobilphone = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilphone) && !is_string($mobilphone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilphone, true), gettype($mobilphone)), __LINE__);
        }
        $this->mobilphone = $mobilphone;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get channel value
     * @return int|null
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param int $channel
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setChannel(?int $channel = null): self
    {
        // validation for constraint: int
        if (!is_null($channel) && !(is_int($channel) || ctype_digit($channel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($channel, true), gettype($channel)), __LINE__);
        }
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get identityCard value
     * @return string|null
     */
    public function getIdentityCard(): ?string
    {
        return $this->identityCard;
    }
    /**
     * Set identityCard value
     * @param string $identityCard
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setIdentityCard(?string $identityCard = null): self
    {
        // validation for constraint: string
        if (!is_null($identityCard) && !is_string($identityCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCard, true), gettype($identityCard)), __LINE__);
        }
        $this->identityCard = $identityCard;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * Get externalId2 value
     * @return string|null
     */
    public function getExternalId2(): ?string
    {
        return $this->externalId2;
    }
    /**
     * Set externalId2 value
     * @param string $externalId2
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setExternalId2(?string $externalId2 = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId2) && !is_string($externalId2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId2, true), gettype($externalId2)), __LINE__);
        }
        $this->externalId2 = $externalId2;
        
        return $this;
    }
    /**
     * Get fidelity value
     * @return string|null
     */
    public function getFidelity(): ?string
    {
        return $this->fidelity;
    }
    /**
     * Set fidelity value
     * @param string $fidelity
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setFidelity(?string $fidelity = null): self
    {
        // validation for constraint: string
        if (!is_null($fidelity) && !is_string($fidelity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fidelity, true), gettype($fidelity)), __LINE__);
        }
        $this->fidelity = $fidelity;
        
        return $this;
    }
    /**
     * Get newsletter value
     * @return bool|null
     */
    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }
    /**
     * Set newsletter value
     * @param bool $newsletter
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setNewsletter(?bool $newsletter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newsletter) && !is_bool($newsletter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newsletter, true), gettype($newsletter)), __LINE__);
        }
        $this->newsletter = $newsletter;
        
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
        foreach ($values as $customerOrderFriendsItem) {
            // validation for constraint: itemType
            if (!$customerOrderFriendsItem instanceof \Maetva\ESeason\WebCampServices\StructType\FriendOrder) {
                $invalidValues[] = is_object($customerOrderFriendsItem) ? get_class($customerOrderFriendsItem) : sprintf('%s(%s)', gettype($customerOrderFriendsItem), var_export($customerOrderFriendsItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
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
     * Get optins value
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[]
     */
    public function getOptins(): ?array
    {
        return $this->optins;
    }
    /**
     * This method is responsible for validating the values passed to the setOptins method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptins method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptinsForArrayConstraintsFromSetOptins(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerOrderOptinsItem) {
            // validation for constraint: itemType
            if (!$customerOrderOptinsItem instanceof \Maetva\ESeason\WebCampServices\StructType\CustomerOptin) {
                $invalidValues[] = is_object($customerOrderOptinsItem) ? get_class($customerOrderOptinsItem) : sprintf('%s(%s)', gettype($customerOrderOptinsItem), var_export($customerOrderOptinsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The optins property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\CustomerOptin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set optins value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[] $optins
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function setOptins(?array $optins = null): self
    {
        // validation for constraint: array
        if ('' !== ($optinsArrayErrorMessage = self::validateOptinsForArrayConstraintsFromSetOptins($optins))) {
            throw new InvalidArgumentException($optinsArrayErrorMessage, __LINE__);
        }
        $this->optins = $optins;
        
        return $this;
    }
    /**
     * Add item to optins value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOptin $item
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerOrder
     */
    public function addToOptins(\Maetva\ESeason\WebCampServices\StructType\CustomerOptin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\CustomerOptin) {
            throw new InvalidArgumentException(sprintf('The optins property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\CustomerOptin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->optins[] = $item;
        
        return $this;
    }
}
