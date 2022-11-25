<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher StructType
 * @subpackage Structs
 */
class Voucher extends AbstractStructBase
{
    /**
     * The effectiveDate
     * @var string|null
     */
    protected ?string $effectiveDate = null;
    /**
     * The expireDate
     * @var string|null
     */
    protected ?string $expireDate = null;
    /**
     * The seriesCode
     * @var string|null
     */
    protected ?string $seriesCode = null;
    /**
     * Constructor method for Voucher
     * @uses Voucher::setEffectiveDate()
     * @uses Voucher::setExpireDate()
     * @uses Voucher::setSeriesCode()
     * @param string $effectiveDate
     * @param string $expireDate
     * @param string $seriesCode
     */
    public function __construct(?string $effectiveDate = null, ?string $expireDate = null, ?string $seriesCode = null)
    {
        $this
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setSeriesCode($seriesCode);
    }
    /**
     * Get effectiveDate value
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }
    /**
     * Set effectiveDate value
     * @param string $effectiveDate
     * @return \Maetva\ESeason\WebCampServices\StructType\Voucher
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->effectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get expireDate value
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }
    /**
     * Set expireDate value
     * @param string $expireDate
     * @return \Maetva\ESeason\WebCampServices\StructType\Voucher
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
        $this->expireDate = $expireDate;
        
        return $this;
    }
    /**
     * Get seriesCode value
     * @return string|null
     */
    public function getSeriesCode(): ?string
    {
        return $this->seriesCode;
    }
    /**
     * Set seriesCode value
     * @param string $seriesCode
     * @return \Maetva\ESeason\WebCampServices\StructType\Voucher
     */
    public function setSeriesCode(?string $seriesCode = null): self
    {
        // validation for constraint: string
        if (!is_null($seriesCode) && !is_string($seriesCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seriesCode, true), gettype($seriesCode)), __LINE__);
        }
        $this->seriesCode = $seriesCode;
        
        return $this;
    }
}
