<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAcct StructType
 * @subpackage Structs
 */
class BankAcct extends AbstractStructBase
{
    /**
     * The acctType
     * @var string|null
     */
    protected ?string $acctType = null;
    /**
     * The bankAcctNumber
     * @var string|null
     */
    protected ?string $bankAcctNumber = null;
    /**
     * The bankID
     * @var string|null
     */
    protected ?string $bankID = null;
    /**
     * Constructor method for BankAcct
     * @uses BankAcct::setAcctType()
     * @uses BankAcct::setBankAcctNumber()
     * @uses BankAcct::setBankID()
     * @param string $acctType
     * @param string $bankAcctNumber
     * @param string $bankID
     */
    public function __construct(?string $acctType = null, ?string $bankAcctNumber = null, ?string $bankID = null)
    {
        $this
            ->setAcctType($acctType)
            ->setBankAcctNumber($bankAcctNumber)
            ->setBankID($bankID);
    }
    /**
     * Get acctType value
     * @return string|null
     */
    public function getAcctType(): ?string
    {
        return $this->acctType;
    }
    /**
     * Set acctType value
     * @param string $acctType
     * @return \Maetva\ESeason\WebCampServices\StructType\BankAcct
     */
    public function setAcctType(?string $acctType = null): self
    {
        // validation for constraint: string
        if (!is_null($acctType) && !is_string($acctType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acctType, true), gettype($acctType)), __LINE__);
        }
        $this->acctType = $acctType;
        
        return $this;
    }
    /**
     * Get bankAcctNumber value
     * @return string|null
     */
    public function getBankAcctNumber(): ?string
    {
        return $this->bankAcctNumber;
    }
    /**
     * Set bankAcctNumber value
     * @param string $bankAcctNumber
     * @return \Maetva\ESeason\WebCampServices\StructType\BankAcct
     */
    public function setBankAcctNumber(?string $bankAcctNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAcctNumber) && !is_string($bankAcctNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAcctNumber, true), gettype($bankAcctNumber)), __LINE__);
        }
        $this->bankAcctNumber = $bankAcctNumber;
        
        return $this;
    }
    /**
     * Get bankID value
     * @return string|null
     */
    public function getBankID(): ?string
    {
        return $this->bankID;
    }
    /**
     * Set bankID value
     * @param string $bankID
     * @return \Maetva\ESeason\WebCampServices\StructType\BankAcct
     */
    public function setBankID(?string $bankID = null): self
    {
        // validation for constraint: string
        if (!is_null($bankID) && !is_string($bankID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankID, true), gettype($bankID)), __LINE__);
        }
        $this->bankID = $bankID;
        
        return $this;
    }
}
