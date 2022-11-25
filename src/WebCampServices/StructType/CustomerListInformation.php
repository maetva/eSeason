<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerListInformation StructType
 * @subpackage Structs
 */
class CustomerListInformation extends AbstractStructBase
{
    /**
     * The address
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The channel
     * @var string|null
     */
    protected ?string $channel = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The civility
     * @var string|null
     */
    protected ?string $civility = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The firstname
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The friendInformation
     * @var string|null
     */
    protected ?string $friendInformation = null;
    /**
     * The lastname
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The mobilphone
     * @var string|null
     */
    protected ?string $mobilphone = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The identityCard
     * @var string|null
     */
    protected ?string $identityCard = null;
    /**
     * The newsletter
     * @var string|null
     */
    protected ?string $newsletter = null;
    /**
     * The immatriculation
     * @var string|null
     */
    protected ?string $immatriculation = null;
    /**
     * Constructor method for CustomerListInformation
     * @uses CustomerListInformation::setAddress()
     * @uses CustomerListInformation::setBirthday()
     * @uses CustomerListInformation::setChannel()
     * @uses CustomerListInformation::setCity()
     * @uses CustomerListInformation::setCivility()
     * @uses CustomerListInformation::setCountry()
     * @uses CustomerListInformation::setEmail()
     * @uses CustomerListInformation::setFax()
     * @uses CustomerListInformation::setFirstname()
     * @uses CustomerListInformation::setFriendInformation()
     * @uses CustomerListInformation::setLastname()
     * @uses CustomerListInformation::setMobilphone()
     * @uses CustomerListInformation::setPhone()
     * @uses CustomerListInformation::setZipCode()
     * @uses CustomerListInformation::setIdentityCard()
     * @uses CustomerListInformation::setNewsletter()
     * @uses CustomerListInformation::setImmatriculation()
     * @param string $address
     * @param string $birthday
     * @param string $channel
     * @param string $city
     * @param string $civility
     * @param string $country
     * @param string $email
     * @param string $fax
     * @param string $firstname
     * @param string $friendInformation
     * @param string $lastname
     * @param string $mobilphone
     * @param string $phone
     * @param string $zipCode
     * @param string $identityCard
     * @param string $newsletter
     * @param string $immatriculation
     */
    public function __construct(?string $address = null, ?string $birthday = null, ?string $channel = null, ?string $city = null, ?string $civility = null, ?string $country = null, ?string $email = null, ?string $fax = null, ?string $firstname = null, ?string $friendInformation = null, ?string $lastname = null, ?string $mobilphone = null, ?string $phone = null, ?string $zipCode = null, ?string $identityCard = null, ?string $newsletter = null, ?string $immatriculation = null)
    {
        $this
            ->setAddress($address)
            ->setBirthday($birthday)
            ->setChannel($channel)
            ->setCity($city)
            ->setCivility($civility)
            ->setCountry($country)
            ->setEmail($email)
            ->setFax($fax)
            ->setFirstname($firstname)
            ->setFriendInformation($friendInformation)
            ->setLastname($lastname)
            ->setMobilphone($mobilphone)
            ->setPhone($phone)
            ->setZipCode($zipCode)
            ->setIdentityCard($identityCard)
            ->setNewsletter($newsletter)
            ->setImmatriculation($immatriculation);
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $address
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($address) ? implode(', ', $address) : var_export($address, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->address = $address;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $birthday
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($birthday) ? implode(', ', $birthday) : var_export($birthday, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get channel value
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $channel
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setChannel(?string $channel = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($channel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($channel) ? implode(', ', $channel) : var_export($channel, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->channel = $channel;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $city
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($city) ? implode(', ', $city) : var_export($city, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->city = $city;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $civility
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setCivility(?string $civility = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($civility)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($civility) ? implode(', ', $civility) : var_export($civility, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->civility = $civility;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $country
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $email
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($email) ? implode(', ', $email) : var_export($email, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fax
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($fax) ? implode(', ', $fax) : var_export($fax, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->fax = $fax;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $firstname
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setFirstname(?string $firstname = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($firstname) ? implode(', ', $firstname) : var_export($firstname, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->firstname = $firstname;
        
        return $this;
    }
    /**
     * Get friendInformation value
     * @return string|null
     */
    public function getFriendInformation(): ?string
    {
        return $this->friendInformation;
    }
    /**
     * Set friendInformation value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $friendInformation
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setFriendInformation(?string $friendInformation = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($friendInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($friendInformation) ? implode(', ', $friendInformation) : var_export($friendInformation, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->friendInformation = $friendInformation;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $lastname
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setLastname(?string $lastname = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($lastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($lastname) ? implode(', ', $lastname) : var_export($lastname, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->lastname = $lastname;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mobilphone
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setMobilphone(?string $mobilphone = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($mobilphone)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($mobilphone) ? implode(', ', $mobilphone) : var_export($mobilphone, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $phone
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($phone) ? implode(', ', $phone) : var_export($phone, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->phone = $phone;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zipCode
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($zipCode) ? implode(', ', $zipCode) : var_export($zipCode, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->zipCode = $zipCode;
        
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
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $identityCard
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setIdentityCard(?string $identityCard = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($identityCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($identityCard) ? implode(', ', $identityCard) : var_export($identityCard, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->identityCard = $identityCard;
        
        return $this;
    }
    /**
     * Get newsletter value
     * @return string|null
     */
    public function getNewsletter(): ?string
    {
        return $this->newsletter;
    }
    /**
     * Set newsletter value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $newsletter
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setNewsletter(?string $newsletter = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($newsletter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($newsletter) ? implode(', ', $newsletter) : var_export($newsletter, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->newsletter = $newsletter;
        
        return $this;
    }
    /**
     * Get immatriculation value
     * @return string|null
     */
    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }
    /**
     * Set immatriculation value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $immatriculation
     * @return \Maetva\ESeason\WebCampServices\StructType\CustomerListInformation
     */
    public function setImmatriculation(?string $immatriculation = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WantedInformation::valueIsValid($immatriculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WantedInformation', is_array($immatriculation) ? implode(', ', $immatriculation) : var_export($immatriculation, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WantedInformation::getValidValues())), __LINE__);
        }
        $this->immatriculation = $immatriculation;
        
        return $this;
    }
}
