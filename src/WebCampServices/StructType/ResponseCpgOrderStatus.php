<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgOrderStatus StructType
 * @subpackage Structs
 */
class ResponseCpgOrderStatus extends AbstractStructBase
{
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The idCustomerUnicamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $idCustomerUnicamp = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $balance = null;
    /**
     * The idSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * The libcateg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libcateg = null;
    /**
     * The begin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The deposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The priceTO
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $priceTO = null;
    /**
     * The priceCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $priceCustomer = null;
    /**
     * The balanceCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $balanceCustomer = null;
    /**
     * The rubric
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Rubrics[]
     */
    protected ?array $rubric = null;
    /**
     * The idProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null;
    /**
     * The cancelEnable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $cancelEnable = null;
    /**
     * The nbPers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $nbPers = null;
    /**
     * The modified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $modified = null;
    /**
     * The idTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null;
    /**
     * The localTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $localTariff = null;
    /**
     * The lastModifStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastModifStatus = null;
    /**
     * The lastModifDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastModifDate = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The friends
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\FriendOrder[]
     */
    protected ?array $friends = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The optins
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[]
     */
    protected ?array $optins = null;
    /**
     * The vehicle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    protected ?array $vehicle = null;
    /**
     * The libInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $libInsurance = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * The selectPlaceEnable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $selectPlaceEnable = null;
    /**
     * The sharegroop
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Sharegroop|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null;
    /**
     * Constructor method for ResponseCpgOrderStatus
     * @uses ResponseCpgOrderStatus::setError()
     * @uses ResponseCpgOrderStatus::setMessError()
     * @uses ResponseCpgOrderStatus::setIdCustomerUnicamp()
     * @uses ResponseCpgOrderStatus::setIdUser()
     * @uses ResponseCpgOrderStatus::setStatus()
     * @uses ResponseCpgOrderStatus::setBalance()
     * @uses ResponseCpgOrderStatus::setIdSite()
     * @uses ResponseCpgOrderStatus::setLibcateg()
     * @uses ResponseCpgOrderStatus::setBegin()
     * @uses ResponseCpgOrderStatus::setEnd()
     * @uses ResponseCpgOrderStatus::setLastName()
     * @uses ResponseCpgOrderStatus::setFirstName()
     * @uses ResponseCpgOrderStatus::setDeposit()
     * @uses ResponseCpgOrderStatus::setPrice()
     * @uses ResponseCpgOrderStatus::setPriceTO()
     * @uses ResponseCpgOrderStatus::setPriceCustomer()
     * @uses ResponseCpgOrderStatus::setBalanceCustomer()
     * @uses ResponseCpgOrderStatus::setRubric()
     * @uses ResponseCpgOrderStatus::setIdProduct()
     * @uses ResponseCpgOrderStatus::setCancelEnable()
     * @uses ResponseCpgOrderStatus::setNbPers()
     * @uses ResponseCpgOrderStatus::setModified()
     * @uses ResponseCpgOrderStatus::setIdTariff()
     * @uses ResponseCpgOrderStatus::setLocalTariff()
     * @uses ResponseCpgOrderStatus::setLastModifStatus()
     * @uses ResponseCpgOrderStatus::setLastModifDate()
     * @uses ResponseCpgOrderStatus::setEmail()
     * @uses ResponseCpgOrderStatus::setFriends()
     * @uses ResponseCpgOrderStatus::setComment()
     * @uses ResponseCpgOrderStatus::setOptins()
     * @uses ResponseCpgOrderStatus::setVehicle()
     * @uses ResponseCpgOrderStatus::setLibInsurance()
     * @uses ResponseCpgOrderStatus::setSelectPlace()
     * @uses ResponseCpgOrderStatus::setSelectPlaceEnable()
     * @uses ResponseCpgOrderStatus::setSharegroop()
     * @param string $error
     * @param string $messError
     * @param int $idCustomerUnicamp
     * @param string $idUser
     * @param string $status
     * @param float $balance
     * @param int $idSite
     * @param string $libcateg
     * @param string $begin
     * @param string $end
     * @param string $lastName
     * @param string $firstName
     * @param float $deposit
     * @param float $price
     * @param float $priceTO
     * @param float $priceCustomer
     * @param float $balanceCustomer
     * @param \Maetva\ESeason\WebCampServices\StructType\Rubrics[] $rubric
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @param bool $cancelEnable
     * @param int $nbPers
     * @param bool $modified
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff
     * @param string $localTariff
     * @param string $lastModifStatus
     * @param string $lastModifDate
     * @param string $email
     * @param \Maetva\ESeason\WebCampServices\StructType\FriendOrder[] $friends
     * @param string $comment
     * @param \Maetva\ESeason\WebCampServices\StructType\CustomerOptin[] $optins
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @param string $libInsurance
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @param int $selectPlaceEnable
     * @param \Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop
     */
    public function __construct(?string $error = null, ?string $messError = null, ?int $idCustomerUnicamp = null, ?string $idUser = null, ?string $status = null, ?float $balance = null, ?int $idSite = null, ?string $libcateg = null, ?string $begin = null, ?string $end = null, ?string $lastName = null, ?string $firstName = null, ?float $deposit = null, ?float $price = null, ?float $priceTO = null, ?float $priceCustomer = null, ?float $balanceCustomer = null, ?array $rubric = null, ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null, ?bool $cancelEnable = null, ?int $nbPers = null, ?bool $modified = null, ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null, ?string $localTariff = null, ?string $lastModifStatus = null, ?string $lastModifDate = null, ?string $email = null, ?array $friends = null, ?string $comment = null, ?array $optins = null, ?array $vehicle = null, ?string $libInsurance = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null, ?int $selectPlaceEnable = null, ?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null)
    {
        $this
            ->setError($error)
            ->setMessError($messError)
            ->setIdCustomerUnicamp($idCustomerUnicamp)
            ->setIdUser($idUser)
            ->setStatus($status)
            ->setBalance($balance)
            ->setIdSite($idSite)
            ->setLibcateg($libcateg)
            ->setBegin($begin)
            ->setEnd($end)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setDeposit($deposit)
            ->setPrice($price)
            ->setPriceTO($priceTO)
            ->setPriceCustomer($priceCustomer)
            ->setBalanceCustomer($balanceCustomer)
            ->setRubric($rubric)
            ->setIdProduct($idProduct)
            ->setCancelEnable($cancelEnable)
            ->setNbPers($nbPers)
            ->setModified($modified)
            ->setIdTariff($idTariff)
            ->setLocalTariff($localTariff)
            ->setLastModifStatus($lastModifStatus)
            ->setLastModifDate($lastModifDate)
            ->setEmail($email)
            ->setFriends($friends)
            ->setComment($comment)
            ->setOptins($optins)
            ->setVehicle($vehicle)
            ->setLibInsurance($libInsurance)
            ->setSelectPlace($selectPlace)
            ->setSelectPlaceEnable($selectPlaceEnable)
            ->setSharegroop($sharegroop);
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues()
     * @throws InvalidArgumentException
     * @param string $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Errors', is_array($error) ? implode(', ', $error) : var_export($error, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues())), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return isset($this->messError) ? $this->messError : null;
    }
    /**
     * Set messError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        if (is_null($messError) || (is_array($messError) && empty($messError))) {
            unset($this->messError);
        } else {
            $this->messError = $messError;
        }
        
        return $this;
    }
    /**
     * Get idCustomerUnicamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIdCustomerUnicamp(): ?int
    {
        return isset($this->idCustomerUnicamp) ? $this->idCustomerUnicamp : null;
    }
    /**
     * Set idCustomerUnicamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $idCustomerUnicamp
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setIdCustomerUnicamp(?int $idCustomerUnicamp = null): self
    {
        // validation for constraint: int
        if (!is_null($idCustomerUnicamp) && !(is_int($idCustomerUnicamp) || ctype_digit($idCustomerUnicamp))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idCustomerUnicamp, true), gettype($idCustomerUnicamp)), __LINE__);
        }
        if (is_null($idCustomerUnicamp) || (is_array($idCustomerUnicamp) && empty($idCustomerUnicamp))) {
            unset($this->idCustomerUnicamp);
        } else {
            $this->idCustomerUnicamp = $idCustomerUnicamp;
        }
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Status::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Status::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Status::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Status', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Status::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get balance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return isset($this->balance) ? $this->balance : null;
    }
    /**
     * Set balance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $balance
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        if (is_null($balance) || (is_array($balance) && empty($balance))) {
            unset($this->balance);
        } else {
            $this->balance = $balance;
        }
        
        return $this;
    }
    /**
     * Get idSite value
     * @return int|null
     */
    public function getIdSite(): ?int
    {
        return $this->idSite;
    }
    /**
     * Set idSite value
     * @param int $idSite
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setIdSite(?int $idSite = null): self
    {
        // validation for constraint: int
        if (!is_null($idSite) && !(is_int($idSite) || ctype_digit($idSite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSite, true), gettype($idSite)), __LINE__);
        }
        $this->idSite = $idSite;
        
        return $this;
    }
    /**
     * Get libcateg value
     * @return string|null
     */
    public function getLibcateg(): ?string
    {
        return $this->libcateg;
    }
    /**
     * Set libcateg value
     * @param string $libcateg
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLibcateg(?string $libcateg = null): self
    {
        // validation for constraint: string
        if (!is_null($libcateg) && !is_string($libcateg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libcateg, true), gettype($libcateg)), __LINE__);
        }
        $this->libcateg = $libcateg;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * Get priceTO value
     * @return float|null
     */
    public function getPriceTO(): ?float
    {
        return $this->priceTO;
    }
    /**
     * Set priceTO value
     * @param float $priceTO
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setPriceTO(?float $priceTO = null): self
    {
        // validation for constraint: float
        if (!is_null($priceTO) && !(is_float($priceTO) || is_numeric($priceTO))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceTO, true), gettype($priceTO)), __LINE__);
        }
        $this->priceTO = $priceTO;
        
        return $this;
    }
    /**
     * Get priceCustomer value
     * @return float|null
     */
    public function getPriceCustomer(): ?float
    {
        return $this->priceCustomer;
    }
    /**
     * Set priceCustomer value
     * @param float $priceCustomer
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setPriceCustomer(?float $priceCustomer = null): self
    {
        // validation for constraint: float
        if (!is_null($priceCustomer) && !(is_float($priceCustomer) || is_numeric($priceCustomer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceCustomer, true), gettype($priceCustomer)), __LINE__);
        }
        $this->priceCustomer = $priceCustomer;
        
        return $this;
    }
    /**
     * Get balanceCustomer value
     * @return float|null
     */
    public function getBalanceCustomer(): ?float
    {
        return $this->balanceCustomer;
    }
    /**
     * Set balanceCustomer value
     * @param float $balanceCustomer
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setBalanceCustomer(?float $balanceCustomer = null): self
    {
        // validation for constraint: float
        if (!is_null($balanceCustomer) && !(is_float($balanceCustomer) || is_numeric($balanceCustomer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balanceCustomer, true), gettype($balanceCustomer)), __LINE__);
        }
        $this->balanceCustomer = $balanceCustomer;
        
        return $this;
    }
    /**
     * Get rubric value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Rubrics[]
     */
    public function getRubric(): ?array
    {
        return isset($this->rubric) ? $this->rubric : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRubric method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRubric method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRubricForArrayConstraintsFromSetRubric(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgOrderStatusRubricItem) {
            // validation for constraint: itemType
            if (!$responseCpgOrderStatusRubricItem instanceof \Maetva\ESeason\WebCampServices\StructType\Rubrics) {
                $invalidValues[] = is_object($responseCpgOrderStatusRubricItem) ? get_class($responseCpgOrderStatusRubricItem) : sprintf('%s(%s)', gettype($responseCpgOrderStatusRubricItem), var_export($responseCpgOrderStatusRubricItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rubric property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Rubrics, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rubric value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Rubrics[] $rubric
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setRubric(?array $rubric = null): self
    {
        // validation for constraint: array
        if ('' !== ($rubricArrayErrorMessage = self::validateRubricForArrayConstraintsFromSetRubric($rubric))) {
            throw new InvalidArgumentException($rubricArrayErrorMessage, __LINE__);
        }
        if (is_null($rubric) || (is_array($rubric) && empty($rubric))) {
            unset($this->rubric);
        } else {
            $this->rubric = $rubric;
        }
        
        return $this;
    }
    /**
     * Add item to rubric value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Rubrics $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function addToRubric(\Maetva\ESeason\WebCampServices\StructType\Rubrics $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Rubrics) {
            throw new InvalidArgumentException(sprintf('The rubric property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Rubrics, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rubric[] = $item;
        
        return $this;
    }
    /**
     * Get idProduct value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    public function getIdProduct(): ?\Maetva\ESeason\WebCampServices\StructType\IdProduct
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setIdProduct(?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null): self
    {
        $this->idProduct = $idProduct;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * Get modified value
     * @return bool|null
     */
    public function getModified(): ?bool
    {
        return $this->modified;
    }
    /**
     * Set modified value
     * @param bool $modified
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setModified(?bool $modified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($modified) && !is_bool($modified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($modified, true), gettype($modified)), __LINE__);
        }
        $this->modified = $modified;
        
        return $this;
    }
    /**
     * Get idTariff value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct|null
     */
    public function getIdTariff(): ?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct
    {
        return $this->idTariff;
    }
    /**
     * Set idTariff value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setIdTariff(?\Maetva\ESeason\WebCampServices\StructType\IdTariffProduct $idTariff = null): self
    {
        $this->idTariff = $idTariff;
        
        return $this;
    }
    /**
     * Get localTariff value
     * @return string|null
     */
    public function getLocalTariff(): ?string
    {
        return $this->localTariff;
    }
    /**
     * Set localTariff value
     * @param string $localTariff
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLocalTariff(?string $localTariff = null): self
    {
        // validation for constraint: string
        if (!is_null($localTariff) && !is_string($localTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localTariff, true), gettype($localTariff)), __LINE__);
        }
        $this->localTariff = $localTariff;
        
        return $this;
    }
    /**
     * Get lastModifStatus value
     * @return string|null
     */
    public function getLastModifStatus(): ?string
    {
        return $this->lastModifStatus;
    }
    /**
     * Set lastModifStatus value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Status::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Status::getValidValues()
     * @throws InvalidArgumentException
     * @param string $lastModifStatus
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLastModifStatus(?string $lastModifStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Status::valueIsValid($lastModifStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Status', is_array($lastModifStatus) ? implode(', ', $lastModifStatus) : var_export($lastModifStatus, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Status::getValidValues())), __LINE__);
        }
        $this->lastModifStatus = $lastModifStatus;
        
        return $this;
    }
    /**
     * Get lastModifDate value
     * @return string|null
     */
    public function getLastModifDate(): ?string
    {
        return $this->lastModifDate;
    }
    /**
     * Set lastModifDate value
     * @param string $lastModifDate
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLastModifDate(?string $lastModifDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifDate) && !is_string($lastModifDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifDate, true), gettype($lastModifDate)), __LINE__);
        }
        $this->lastModifDate = $lastModifDate;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
        foreach ($values as $responseCpgOrderStatusFriendsItem) {
            // validation for constraint: itemType
            if (!$responseCpgOrderStatusFriendsItem instanceof \Maetva\ESeason\WebCampServices\StructType\FriendOrder) {
                $invalidValues[] = is_object($responseCpgOrderStatusFriendsItem) ? get_class($responseCpgOrderStatusFriendsItem) : sprintf('%s(%s)', gettype($responseCpgOrderStatusFriendsItem), var_export($responseCpgOrderStatusFriendsItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
        foreach ($values as $responseCpgOrderStatusOptinsItem) {
            // validation for constraint: itemType
            if (!$responseCpgOrderStatusOptinsItem instanceof \Maetva\ESeason\WebCampServices\StructType\CustomerOptin) {
                $invalidValues[] = is_object($responseCpgOrderStatusOptinsItem) ? get_class($responseCpgOrderStatusOptinsItem) : sprintf('%s(%s)', gettype($responseCpgOrderStatusOptinsItem), var_export($responseCpgOrderStatusOptinsItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
        foreach ($values as $responseCpgOrderStatusVehicleItem) {
            // validation for constraint: itemType
            if (!$responseCpgOrderStatusVehicleItem instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
                $invalidValues[] = is_object($responseCpgOrderStatusVehicleItem) ? get_class($responseCpgOrderStatusVehicleItem) : sprintf('%s(%s)', gettype($responseCpgOrderStatusVehicleItem), var_export($responseCpgOrderStatusVehicleItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
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
     * Get libInsurance value
     * @return string|null
     */
    public function getLibInsurance(): ?string
    {
        return $this->libInsurance;
    }
    /**
     * Set libInsurance value
     * @param string $libInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setLibInsurance(?string $libInsurance = null): self
    {
        // validation for constraint: string
        if (!is_null($libInsurance) && !is_string($libInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libInsurance, true), gettype($libInsurance)), __LINE__);
        }
        $this->libInsurance = $libInsurance;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        $this->selectPlace = $selectPlace;
        
        return $this;
    }
    /**
     * Get selectPlaceEnable value
     * @return int|null
     */
    public function getSelectPlaceEnable(): ?int
    {
        return $this->selectPlaceEnable;
    }
    /**
     * Set selectPlaceEnable value
     * @param int $selectPlaceEnable
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setSelectPlaceEnable(?int $selectPlaceEnable = null): self
    {
        // validation for constraint: int
        if (!is_null($selectPlaceEnable) && !(is_int($selectPlaceEnable) || ctype_digit($selectPlaceEnable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($selectPlaceEnable, true), gettype($selectPlaceEnable)), __LINE__);
        }
        $this->selectPlaceEnable = $selectPlaceEnable;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus
     */
    public function setSharegroop(?\Maetva\ESeason\WebCampServices\StructType\Sharegroop $sharegroop = null): self
    {
        $this->sharegroop = $sharegroop;
        
        return $this;
    }
}
