<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgContext StructType
 * @subpackage Structs
 */
class RequestCpgContext extends AbstractStructBase
{
    /**
     * The idSite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idSite = null;
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
     * The returnSiteOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnSiteOnly = null;
    /**
     * The returnProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnProduct = null;
    /**
     * The returnMediaObj
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnMediaObj = null;
    /**
     * The mediaDataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediaDataType = null;
    /**
     * Constructor method for RequestCpgContext
     * @uses RequestCpgContext::setIdSite()
     * @uses RequestCpgContext::setIdUser()
     * @uses RequestCpgContext::setLanguage()
     * @uses RequestCpgContext::setPassword()
     * @uses RequestCpgContext::setReturnSiteOnly()
     * @uses RequestCpgContext::setReturnProduct()
     * @uses RequestCpgContext::setReturnMediaObj()
     * @uses RequestCpgContext::setMediaDataType()
     * @param int $idSite
     * @param string $idUser
     * @param string $language
     * @param string $password
     * @param bool $returnSiteOnly
     * @param bool $returnProduct
     * @param bool $returnMediaObj
     * @param string $mediaDataType
     */
    public function __construct(?int $idSite = null, ?string $idUser = null, ?string $language = null, ?string $password = null, ?bool $returnSiteOnly = null, ?bool $returnProduct = null, ?bool $returnMediaObj = null, ?string $mediaDataType = null)
    {
        $this
            ->setIdSite($idSite)
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password)
            ->setReturnSiteOnly($returnSiteOnly)
            ->setReturnProduct($returnProduct)
            ->setReturnMediaObj($returnMediaObj)
            ->setMediaDataType($mediaDataType);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
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
     * Get returnSiteOnly value
     * @return bool|null
     */
    public function getReturnSiteOnly(): ?bool
    {
        return $this->returnSiteOnly;
    }
    /**
     * Set returnSiteOnly value
     * @param bool $returnSiteOnly
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
     */
    public function setReturnSiteOnly(?bool $returnSiteOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnSiteOnly) && !is_bool($returnSiteOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnSiteOnly, true), gettype($returnSiteOnly)), __LINE__);
        }
        $this->returnSiteOnly = $returnSiteOnly;
        
        return $this;
    }
    /**
     * Get returnProduct value
     * @return bool|null
     */
    public function getReturnProduct(): ?bool
    {
        return $this->returnProduct;
    }
    /**
     * Set returnProduct value
     * @param bool $returnProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
     */
    public function setReturnProduct(?bool $returnProduct = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnProduct) && !is_bool($returnProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnProduct, true), gettype($returnProduct)), __LINE__);
        }
        $this->returnProduct = $returnProduct;
        
        return $this;
    }
    /**
     * Get returnMediaObj value
     * @return bool|null
     */
    public function getReturnMediaObj(): ?bool
    {
        return $this->returnMediaObj;
    }
    /**
     * Set returnMediaObj value
     * @param bool $returnMediaObj
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
     */
    public function setReturnMediaObj(?bool $returnMediaObj = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnMediaObj) && !is_bool($returnMediaObj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnMediaObj, true), gettype($returnMediaObj)), __LINE__);
        }
        $this->returnMediaObj = $returnMediaObj;
        
        return $this;
    }
    /**
     * Get mediaDataType value
     * @return string|null
     */
    public function getMediaDataType(): ?string
    {
        return $this->mediaDataType;
    }
    /**
     * Set mediaDataType value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mediaDataType
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext
     */
    public function setMediaDataType(?string $mediaDataType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\MediaDataType::valueIsValid($mediaDataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\MediaDataType', is_array($mediaDataType) ? implode(', ', $mediaDataType) : var_export($mediaDataType, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\MediaDataType::getValidValues())), __LINE__);
        }
        $this->mediaDataType = $mediaDataType;
        
        return $this;
    }
}
