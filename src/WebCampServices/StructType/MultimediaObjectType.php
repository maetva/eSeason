<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaObjectType StructType
 * @subpackage Structs
 */
class MultimediaObjectType extends AbstractStructBase
{
    /**
     * The codeDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $codeDetail = null;
    /**
     * The contentCaption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentCaption = null;
    /**
     * The contentCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentCode = null;
    /**
     * The contentData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentData = null;
    /**
     * The contentFormatCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentFormatCode = null;
    /**
     * The contentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentID = null;
    /**
     * The contentTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contentTitle = null;
    /**
     * The copyrightNotice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $copyrightNotice = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The fileSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $fileSize = null;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $image = null;
    /**
     * The multimediaObjectHeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $multimediaObjectHeight = null;
    /**
     * The multimediaObjectWidth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $multimediaObjectWidth = null;
    /**
     * The pictureCategoryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $pictureCategoryCode = null;
    /**
     * The recordID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $recordID = null;
    /**
     * The removal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $removal = null;
    /**
     * The unitOfMeasureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $unitOfMeasureCode = null;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The lastModifyDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastModifyDateTime = null;
    /**
     * Constructor method for MultimediaObjectType
     * @uses MultimediaObjectType::setCodeDetail()
     * @uses MultimediaObjectType::setContentCaption()
     * @uses MultimediaObjectType::setContentCode()
     * @uses MultimediaObjectType::setContentData()
     * @uses MultimediaObjectType::setContentFormatCode()
     * @uses MultimediaObjectType::setContentID()
     * @uses MultimediaObjectType::setContentTitle()
     * @uses MultimediaObjectType::setCopyrightNotice()
     * @uses MultimediaObjectType::setDescription()
     * @uses MultimediaObjectType::setFileName()
     * @uses MultimediaObjectType::setFileSize()
     * @uses MultimediaObjectType::setImage()
     * @uses MultimediaObjectType::setMultimediaObjectHeight()
     * @uses MultimediaObjectType::setMultimediaObjectWidth()
     * @uses MultimediaObjectType::setPictureCategoryCode()
     * @uses MultimediaObjectType::setRecordID()
     * @uses MultimediaObjectType::setRemoval()
     * @uses MultimediaObjectType::setUnitOfMeasureCode()
     * @uses MultimediaObjectType::setUrl()
     * @uses MultimediaObjectType::setVersion()
     * @uses MultimediaObjectType::setLastModifyDateTime()
     * @param string $codeDetail
     * @param string $contentCaption
     * @param string $contentCode
     * @param string $contentData
     * @param string $contentFormatCode
     * @param string $contentID
     * @param string $contentTitle
     * @param string $copyrightNotice
     * @param string $description
     * @param string $fileName
     * @param int $fileSize
     * @param string $image
     * @param int $multimediaObjectHeight
     * @param int $multimediaObjectWidth
     * @param string $pictureCategoryCode
     * @param string $recordID
     * @param bool $removal
     * @param string $unitOfMeasureCode
     * @param string $url
     * @param string $version
     * @param string $lastModifyDateTime
     */
    public function __construct(?string $codeDetail = null, ?string $contentCaption = null, ?string $contentCode = null, ?string $contentData = null, ?string $contentFormatCode = null, ?string $contentID = null, ?string $contentTitle = null, ?string $copyrightNotice = null, ?string $description = null, ?string $fileName = null, ?int $fileSize = null, ?string $image = null, ?int $multimediaObjectHeight = null, ?int $multimediaObjectWidth = null, ?string $pictureCategoryCode = null, ?string $recordID = null, ?bool $removal = null, ?string $unitOfMeasureCode = null, ?string $url = null, ?string $version = null, ?string $lastModifyDateTime = null)
    {
        $this
            ->setCodeDetail($codeDetail)
            ->setContentCaption($contentCaption)
            ->setContentCode($contentCode)
            ->setContentData($contentData)
            ->setContentFormatCode($contentFormatCode)
            ->setContentID($contentID)
            ->setContentTitle($contentTitle)
            ->setCopyrightNotice($copyrightNotice)
            ->setDescription($description)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setImage($image)
            ->setMultimediaObjectHeight($multimediaObjectHeight)
            ->setMultimediaObjectWidth($multimediaObjectWidth)
            ->setPictureCategoryCode($pictureCategoryCode)
            ->setRecordID($recordID)
            ->setRemoval($removal)
            ->setUnitOfMeasureCode($unitOfMeasureCode)
            ->setUrl($url)
            ->setVersion($version)
            ->setLastModifyDateTime($lastModifyDateTime);
    }
    /**
     * Get codeDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodeDetail(): ?string
    {
        return isset($this->codeDetail) ? $this->codeDetail : null;
    }
    /**
     * Set codeDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codeDetail
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setCodeDetail(?string $codeDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($codeDetail) && !is_string($codeDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDetail, true), gettype($codeDetail)), __LINE__);
        }
        if (is_null($codeDetail) || (is_array($codeDetail) && empty($codeDetail))) {
            unset($this->codeDetail);
        } else {
            $this->codeDetail = $codeDetail;
        }
        
        return $this;
    }
    /**
     * Get contentCaption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentCaption(): ?string
    {
        return isset($this->contentCaption) ? $this->contentCaption : null;
    }
    /**
     * Set contentCaption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentCaption
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentCaption(?string $contentCaption = null): self
    {
        // validation for constraint: string
        if (!is_null($contentCaption) && !is_string($contentCaption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentCaption, true), gettype($contentCaption)), __LINE__);
        }
        if (is_null($contentCaption) || (is_array($contentCaption) && empty($contentCaption))) {
            unset($this->contentCaption);
        } else {
            $this->contentCaption = $contentCaption;
        }
        
        return $this;
    }
    /**
     * Get contentCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentCode(): ?string
    {
        return isset($this->contentCode) ? $this->contentCode : null;
    }
    /**
     * Set contentCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentCode
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentCode(?string $contentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($contentCode) && !is_string($contentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentCode, true), gettype($contentCode)), __LINE__);
        }
        if (is_null($contentCode) || (is_array($contentCode) && empty($contentCode))) {
            unset($this->contentCode);
        } else {
            $this->contentCode = $contentCode;
        }
        
        return $this;
    }
    /**
     * Get contentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentData(): ?string
    {
        return isset($this->contentData) ? $this->contentData : null;
    }
    /**
     * Set contentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentData
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentData(?string $contentData = null): self
    {
        // validation for constraint: string
        if (!is_null($contentData) && !is_string($contentData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentData, true), gettype($contentData)), __LINE__);
        }
        if (is_null($contentData) || (is_array($contentData) && empty($contentData))) {
            unset($this->contentData);
        } else {
            $this->contentData = $contentData;
        }
        
        return $this;
    }
    /**
     * Get contentFormatCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentFormatCode(): ?string
    {
        return isset($this->contentFormatCode) ? $this->contentFormatCode : null;
    }
    /**
     * Set contentFormatCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentFormatCode
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentFormatCode(?string $contentFormatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($contentFormatCode) && !is_string($contentFormatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentFormatCode, true), gettype($contentFormatCode)), __LINE__);
        }
        if (is_null($contentFormatCode) || (is_array($contentFormatCode) && empty($contentFormatCode))) {
            unset($this->contentFormatCode);
        } else {
            $this->contentFormatCode = $contentFormatCode;
        }
        
        return $this;
    }
    /**
     * Get contentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentID(): ?string
    {
        return isset($this->contentID) ? $this->contentID : null;
    }
    /**
     * Set contentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentID
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentID(?string $contentID = null): self
    {
        // validation for constraint: string
        if (!is_null($contentID) && !is_string($contentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentID, true), gettype($contentID)), __LINE__);
        }
        if (is_null($contentID) || (is_array($contentID) && empty($contentID))) {
            unset($this->contentID);
        } else {
            $this->contentID = $contentID;
        }
        
        return $this;
    }
    /**
     * Get contentTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentTitle(): ?string
    {
        return isset($this->contentTitle) ? $this->contentTitle : null;
    }
    /**
     * Set contentTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentTitle
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setContentTitle(?string $contentTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($contentTitle) && !is_string($contentTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentTitle, true), gettype($contentTitle)), __LINE__);
        }
        if (is_null($contentTitle) || (is_array($contentTitle) && empty($contentTitle))) {
            unset($this->contentTitle);
        } else {
            $this->contentTitle = $contentTitle;
        }
        
        return $this;
    }
    /**
     * Get copyrightNotice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCopyrightNotice(): ?string
    {
        return isset($this->copyrightNotice) ? $this->copyrightNotice : null;
    }
    /**
     * Set copyrightNotice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $copyrightNotice
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setCopyrightNotice(?string $copyrightNotice = null): self
    {
        // validation for constraint: string
        if (!is_null($copyrightNotice) && !is_string($copyrightNotice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($copyrightNotice, true), gettype($copyrightNotice)), __LINE__);
        }
        if (is_null($copyrightNotice) || (is_array($copyrightNotice) && empty($copyrightNotice))) {
            unset($this->copyrightNotice);
        } else {
            $this->copyrightNotice = $copyrightNotice;
        }
        
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
    /**
     * Get fileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return isset($this->fileName) ? $this->fileName : null;
    }
    /**
     * Set fileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->fileName);
        } else {
            $this->fileName = $fileName;
        }
        
        return $this;
    }
    /**
     * Get fileSize value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return isset($this->fileSize) ? $this->fileSize : null;
    }
    /**
     * Set fileSize value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $fileSize
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setFileSize(?int $fileSize = null): self
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !(is_int($fileSize) || ctype_digit($fileSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileSize, true), gettype($fileSize)), __LINE__);
        }
        if (is_null($fileSize) || (is_array($fileSize) && empty($fileSize))) {
            unset($this->fileSize);
        } else {
            $this->fileSize = $fileSize;
        }
        
        return $this;
    }
    /**
     * Get image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImage(): ?string
    {
        return isset($this->image) ? $this->image : null;
    }
    /**
     * Set image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $image
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->image);
        } else {
            $this->image = $image;
        }
        
        return $this;
    }
    /**
     * Get multimediaObjectHeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMultimediaObjectHeight(): ?int
    {
        return isset($this->multimediaObjectHeight) ? $this->multimediaObjectHeight : null;
    }
    /**
     * Set multimediaObjectHeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $multimediaObjectHeight
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setMultimediaObjectHeight(?int $multimediaObjectHeight = null): self
    {
        // validation for constraint: int
        if (!is_null($multimediaObjectHeight) && !(is_int($multimediaObjectHeight) || ctype_digit($multimediaObjectHeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($multimediaObjectHeight, true), gettype($multimediaObjectHeight)), __LINE__);
        }
        if (is_null($multimediaObjectHeight) || (is_array($multimediaObjectHeight) && empty($multimediaObjectHeight))) {
            unset($this->multimediaObjectHeight);
        } else {
            $this->multimediaObjectHeight = $multimediaObjectHeight;
        }
        
        return $this;
    }
    /**
     * Get multimediaObjectWidth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMultimediaObjectWidth(): ?int
    {
        return isset($this->multimediaObjectWidth) ? $this->multimediaObjectWidth : null;
    }
    /**
     * Set multimediaObjectWidth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $multimediaObjectWidth
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setMultimediaObjectWidth(?int $multimediaObjectWidth = null): self
    {
        // validation for constraint: int
        if (!is_null($multimediaObjectWidth) && !(is_int($multimediaObjectWidth) || ctype_digit($multimediaObjectWidth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($multimediaObjectWidth, true), gettype($multimediaObjectWidth)), __LINE__);
        }
        if (is_null($multimediaObjectWidth) || (is_array($multimediaObjectWidth) && empty($multimediaObjectWidth))) {
            unset($this->multimediaObjectWidth);
        } else {
            $this->multimediaObjectWidth = $multimediaObjectWidth;
        }
        
        return $this;
    }
    /**
     * Get pictureCategoryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPictureCategoryCode(): ?string
    {
        return isset($this->pictureCategoryCode) ? $this->pictureCategoryCode : null;
    }
    /**
     * Set pictureCategoryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pictureCategoryCode
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setPictureCategoryCode(?string $pictureCategoryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pictureCategoryCode) && !is_string($pictureCategoryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureCategoryCode, true), gettype($pictureCategoryCode)), __LINE__);
        }
        if (is_null($pictureCategoryCode) || (is_array($pictureCategoryCode) && empty($pictureCategoryCode))) {
            unset($this->pictureCategoryCode);
        } else {
            $this->pictureCategoryCode = $pictureCategoryCode;
        }
        
        return $this;
    }
    /**
     * Get recordID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordID(): ?string
    {
        return isset($this->recordID) ? $this->recordID : null;
    }
    /**
     * Set recordID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordID
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setRecordID(?string $recordID = null): self
    {
        // validation for constraint: string
        if (!is_null($recordID) && !is_string($recordID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordID, true), gettype($recordID)), __LINE__);
        }
        if (is_null($recordID) || (is_array($recordID) && empty($recordID))) {
            unset($this->recordID);
        } else {
            $this->recordID = $recordID;
        }
        
        return $this;
    }
    /**
     * Get removal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getRemoval(): ?bool
    {
        return isset($this->removal) ? $this->removal : null;
    }
    /**
     * Set removal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $removal
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setRemoval(?bool $removal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($removal) && !is_bool($removal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($removal, true), gettype($removal)), __LINE__);
        }
        if (is_null($removal) || (is_array($removal) && empty($removal))) {
            unset($this->removal);
        } else {
            $this->removal = $removal;
        }
        
        return $this;
    }
    /**
     * Get unitOfMeasureCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUnitOfMeasureCode(): ?string
    {
        return isset($this->unitOfMeasureCode) ? $this->unitOfMeasureCode : null;
    }
    /**
     * Set unitOfMeasureCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $unitOfMeasureCode
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setUnitOfMeasureCode(?string $unitOfMeasureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($unitOfMeasureCode) && !is_string($unitOfMeasureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitOfMeasureCode, true), gettype($unitOfMeasureCode)), __LINE__);
        }
        if (is_null($unitOfMeasureCode) || (is_array($unitOfMeasureCode) && empty($unitOfMeasureCode))) {
            unset($this->unitOfMeasureCode);
        } else {
            $this->unitOfMeasureCode = $unitOfMeasureCode;
        }
        
        return $this;
    }
    /**
     * Get url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return isset($this->url) ? $this->url : null;
    }
    /**
     * Set url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $url
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->url);
        } else {
            $this->url = $url;
        }
        
        return $this;
    }
    /**
     * Get version value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return isset($this->version) ? $this->version : null;
    }
    /**
     * Set version value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $version
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        if (is_null($version) || (is_array($version) && empty($version))) {
            unset($this->version);
        } else {
            $this->version = $version;
        }
        
        return $this;
    }
    /**
     * Get lastModifyDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastModifyDateTime(): ?string
    {
        return isset($this->lastModifyDateTime) ? $this->lastModifyDateTime : null;
    }
    /**
     * Set lastModifyDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastModifyDateTime
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType
     */
    public function setLastModifyDateTime(?string $lastModifyDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifyDateTime) && !is_string($lastModifyDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifyDateTime, true), gettype($lastModifyDateTime)), __LINE__);
        }
        if (is_null($lastModifyDateTime) || (is_array($lastModifyDateTime) && empty($lastModifyDateTime))) {
            unset($this->lastModifyDateTime);
        } else {
            $this->lastModifyDateTime = $lastModifyDateTime;
        }
        
        return $this;
    }
}
