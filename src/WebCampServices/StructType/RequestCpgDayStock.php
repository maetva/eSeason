<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgDayStock StructType
 * @subpackage Structs
 */
class RequestCpgDayStock extends AbstractStructBase
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
     * The month
     * @var string|null
     */
    protected ?string $month = null;
    /**
     * The year
     * @var string|null
     */
    protected ?string $year = null;
    /**
     * The searchPlace
     * @var \Maetva\ESeason\WebCampServices\StructType\SearchPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for RequestCpgDayStock
     * @uses RequestCpgDayStock::setIdUser()
     * @uses RequestCpgDayStock::setPassword()
     * @uses RequestCpgDayStock::setMonth()
     * @uses RequestCpgDayStock::setYear()
     * @uses RequestCpgDayStock::setSearchPlace()
     * @uses RequestCpgDayStock::setLanguage()
     * @param string $idUser
     * @param string $password
     * @param string $month
     * @param string $year
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace
     * @param string $language
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $month = null, ?string $year = null, ?\Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace = null, ?string $language = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setMonth($month)
            ->setYear($year)
            ->setSearchPlace($searchPlace)
            ->setLanguage($language);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
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
     * Get month value
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param string $month
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
     */
    public function setMonth(?string $month = null): self
    {
        // validation for constraint: string
        if (!is_null($month) && !is_string($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param string $year
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
     */
    public function setYear(?string $year = null): self
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
    /**
     * Get searchPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SearchPlace|null
     */
    public function getSearchPlace(): ?\Maetva\ESeason\WebCampServices\StructType\SearchPlace
    {
        return $this->searchPlace;
    }
    /**
     * Set searchPlace value
     * @param \Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
     */
    public function setSearchPlace(?\Maetva\ESeason\WebCampServices\StructType\SearchPlace $searchPlace = null): self
    {
        $this->searchPlace = $searchPlace;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock
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
}
