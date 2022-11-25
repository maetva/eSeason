<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestListTariff StructType
 * @subpackage Structs
 */
class RequestListTariff extends AbstractStructBase
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
     * The identreunicamp
     * @var string|null
     */
    protected ?string $identreunicamp = null;
    /**
     * The beginDate
     * @var string|null
     */
    protected ?string $beginDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The idCategory
     * @var int|null
     */
    protected ?int $idCategory = null;
    /**
     * Constructor method for RequestListTariff
     * @uses RequestListTariff::setIdUser()
     * @uses RequestListTariff::setPassword()
     * @uses RequestListTariff::setIdentreunicamp()
     * @uses RequestListTariff::setBeginDate()
     * @uses RequestListTariff::setEndDate()
     * @uses RequestListTariff::setIdCategory()
     * @param string $idUser
     * @param string $password
     * @param string $identreunicamp
     * @param string $beginDate
     * @param string $endDate
     * @param int $idCategory
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $identreunicamp = null, ?string $beginDate = null, ?string $endDate = null, ?int $idCategory = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdentreunicamp($identreunicamp)
            ->setBeginDate($beginDate)
            ->setEndDate($endDate)
            ->setIdCategory($idCategory);
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
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
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
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
     * Get identreunicamp value
     * @return string|null
     */
    public function getIdentreunicamp(): ?string
    {
        return $this->identreunicamp;
    }
    /**
     * Set identreunicamp value
     * @param string $identreunicamp
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
     */
    public function setIdentreunicamp(?string $identreunicamp = null): self
    {
        // validation for constraint: string
        if (!is_null($identreunicamp) && !is_string($identreunicamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identreunicamp, true), gettype($identreunicamp)), __LINE__);
        }
        $this->identreunicamp = $identreunicamp;
        
        return $this;
    }
    /**
     * Get beginDate value
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return $this->beginDate;
    }
    /**
     * Set beginDate value
     * @param string $beginDate
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->beginDate = $beginDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get idCategory value
     * @return int|null
     */
    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }
    /**
     * Set idCategory value
     * @param int $idCategory
     * @return \Maetva\ESeason\PrivateServices\StructType\RequestListTariff
     */
    public function setIdCategory(?int $idCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($idCategory) && !(is_int($idCategory) || ctype_digit($idCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idCategory, true), gettype($idCategory)), __LINE__);
        }
        $this->idCategory = $idCategory;
        
        return $this;
    }
}
