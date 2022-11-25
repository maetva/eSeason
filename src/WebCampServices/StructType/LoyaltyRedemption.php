<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyRedemption StructType
 * @subpackage Structs
 */
class LoyaltyRedemption extends AbstractStructBase
{
    /**
     * The certificateNumber
     * @var string|null
     */
    protected ?string $certificateNumber = null;
    /**
     * The memberNumber
     * @var string|null
     */
    protected ?string $memberNumber = null;
    /**
     * The programName
     * @var string|null
     */
    protected ?string $programName = null;
    /**
     * The promotionCode
     * @var string|null
     */
    protected ?string $promotionCode = null;
    /**
     * The promotionVendorCode
     * @var string|null
     */
    protected ?string $promotionVendorCode = null;
    /**
     * The redemptionQuantity
     * @var string|null
     */
    protected ?string $redemptionQuantity = null;
    /**
     * Constructor method for LoyaltyRedemption
     * @uses LoyaltyRedemption::setCertificateNumber()
     * @uses LoyaltyRedemption::setMemberNumber()
     * @uses LoyaltyRedemption::setProgramName()
     * @uses LoyaltyRedemption::setPromotionCode()
     * @uses LoyaltyRedemption::setPromotionVendorCode()
     * @uses LoyaltyRedemption::setRedemptionQuantity()
     * @param string $certificateNumber
     * @param string $memberNumber
     * @param string $programName
     * @param string $promotionCode
     * @param string $promotionVendorCode
     * @param string $redemptionQuantity
     */
    public function __construct(?string $certificateNumber = null, ?string $memberNumber = null, ?string $programName = null, ?string $promotionCode = null, ?string $promotionVendorCode = null, ?string $redemptionQuantity = null)
    {
        $this
            ->setCertificateNumber($certificateNumber)
            ->setMemberNumber($memberNumber)
            ->setProgramName($programName)
            ->setPromotionCode($promotionCode)
            ->setPromotionVendorCode($promotionVendorCode)
            ->setRedemptionQuantity($redemptionQuantity);
    }
    /**
     * Get certificateNumber value
     * @return string|null
     */
    public function getCertificateNumber(): ?string
    {
        return $this->certificateNumber;
    }
    /**
     * Set certificateNumber value
     * @param string $certificateNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setCertificateNumber(?string $certificateNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($certificateNumber) && !is_string($certificateNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificateNumber, true), gettype($certificateNumber)), __LINE__);
        }
        $this->certificateNumber = $certificateNumber;
        
        return $this;
    }
    /**
     * Get memberNumber value
     * @return string|null
     */
    public function getMemberNumber(): ?string
    {
        return $this->memberNumber;
    }
    /**
     * Set memberNumber value
     * @param string $memberNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setMemberNumber(?string $memberNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($memberNumber) && !is_string($memberNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberNumber, true), gettype($memberNumber)), __LINE__);
        }
        $this->memberNumber = $memberNumber;
        
        return $this;
    }
    /**
     * Get programName value
     * @return string|null
     */
    public function getProgramName(): ?string
    {
        return $this->programName;
    }
    /**
     * Set programName value
     * @param string $programName
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setProgramName(?string $programName = null): self
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programName, true), gettype($programName)), __LINE__);
        }
        $this->programName = $programName;
        
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode(): ?string
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setPromotionCode(?string $promotionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
        
        return $this;
    }
    /**
     * Get promotionVendorCode value
     * @return string|null
     */
    public function getPromotionVendorCode(): ?string
    {
        return $this->promotionVendorCode;
    }
    /**
     * Set promotionVendorCode value
     * @param string $promotionVendorCode
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setPromotionVendorCode(?string $promotionVendorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionVendorCode) && !is_string($promotionVendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionVendorCode, true), gettype($promotionVendorCode)), __LINE__);
        }
        $this->promotionVendorCode = $promotionVendorCode;
        
        return $this;
    }
    /**
     * Get redemptionQuantity value
     * @return string|null
     */
    public function getRedemptionQuantity(): ?string
    {
        return $this->redemptionQuantity;
    }
    /**
     * Set redemptionQuantity value
     * @param string $redemptionQuantity
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
     */
    public function setRedemptionQuantity(?string $redemptionQuantity = null): self
    {
        // validation for constraint: string
        if (!is_null($redemptionQuantity) && !is_string($redemptionQuantity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redemptionQuantity, true), gettype($redemptionQuantity)), __LINE__);
        }
        $this->redemptionQuantity = $redemptionQuantity;
        
        return $this;
    }
}
