<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormType StructType
 * @subpackage Structs
 */
class PaymentFormType extends AbstractStructBase
{
    /**
     * The bankAcct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\BankAcct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\BankAcct $bankAcct = null;
    /**
     * The cash
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Cash|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\Cash $cash = null;
    /**
     * The directBill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\DirectBill|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\DirectBill $directBill = null;
    /**
     * The holderName
     * @var string|null
     */
    protected ?string $holderName = null;
    /**
     * The loyaltyRedemption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption $loyaltyRedemption = null;
    /**
     * The miscChargeOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder $miscChargeOrder = null;
    /**
     * The paymentCardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\PaymentCardType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\PaymentCardType $paymentCardType = null;
    /**
     * The voucher
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Voucher|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\Voucher $voucher = null;
    /**
     * The ancv
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Ancv|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\Ancv $ancv = null;
    /**
     * Constructor method for PaymentFormType
     * @uses PaymentFormType::setBankAcct()
     * @uses PaymentFormType::setCash()
     * @uses PaymentFormType::setDirectBill()
     * @uses PaymentFormType::setHolderName()
     * @uses PaymentFormType::setLoyaltyRedemption()
     * @uses PaymentFormType::setMiscChargeOrder()
     * @uses PaymentFormType::setPaymentCardType()
     * @uses PaymentFormType::setVoucher()
     * @uses PaymentFormType::setAncv()
     * @param \Maetva\ESeason\WebCampServices\StructType\BankAcct $bankAcct
     * @param \Maetva\ESeason\WebCampServices\StructType\Cash $cash
     * @param \Maetva\ESeason\WebCampServices\StructType\DirectBill $directBill
     * @param string $holderName
     * @param \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder $miscChargeOrder
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentCardType $paymentCardType
     * @param \Maetva\ESeason\WebCampServices\StructType\Voucher $voucher
     * @param \Maetva\ESeason\WebCampServices\StructType\Ancv $ancv
     */
    public function __construct(?\Maetva\ESeason\WebCampServices\StructType\BankAcct $bankAcct = null, ?\Maetva\ESeason\WebCampServices\StructType\Cash $cash = null, ?\Maetva\ESeason\WebCampServices\StructType\DirectBill $directBill = null, ?string $holderName = null, ?\Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption $loyaltyRedemption = null, ?\Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder $miscChargeOrder = null, ?\Maetva\ESeason\WebCampServices\StructType\PaymentCardType $paymentCardType = null, ?\Maetva\ESeason\WebCampServices\StructType\Voucher $voucher = null, ?\Maetva\ESeason\WebCampServices\StructType\Ancv $ancv = null)
    {
        $this
            ->setBankAcct($bankAcct)
            ->setCash($cash)
            ->setDirectBill($directBill)
            ->setHolderName($holderName)
            ->setLoyaltyRedemption($loyaltyRedemption)
            ->setMiscChargeOrder($miscChargeOrder)
            ->setPaymentCardType($paymentCardType)
            ->setVoucher($voucher)
            ->setAncv($ancv);
    }
    /**
     * Get bankAcct value
     * @return \Maetva\ESeason\WebCampServices\StructType\BankAcct|null
     */
    public function getBankAcct(): ?\Maetva\ESeason\WebCampServices\StructType\BankAcct
    {
        return $this->bankAcct;
    }
    /**
     * Set bankAcct value
     * @param \Maetva\ESeason\WebCampServices\StructType\BankAcct $bankAcct
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setBankAcct(?\Maetva\ESeason\WebCampServices\StructType\BankAcct $bankAcct = null): self
    {
        $this->bankAcct = $bankAcct;
        
        return $this;
    }
    /**
     * Get cash value
     * @return \Maetva\ESeason\WebCampServices\StructType\Cash|null
     */
    public function getCash(): ?\Maetva\ESeason\WebCampServices\StructType\Cash
    {
        return $this->cash;
    }
    /**
     * Set cash value
     * @param \Maetva\ESeason\WebCampServices\StructType\Cash $cash
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setCash(?\Maetva\ESeason\WebCampServices\StructType\Cash $cash = null): self
    {
        $this->cash = $cash;
        
        return $this;
    }
    /**
     * Get directBill value
     * @return \Maetva\ESeason\WebCampServices\StructType\DirectBill|null
     */
    public function getDirectBill(): ?\Maetva\ESeason\WebCampServices\StructType\DirectBill
    {
        return $this->directBill;
    }
    /**
     * Set directBill value
     * @param \Maetva\ESeason\WebCampServices\StructType\DirectBill $directBill
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setDirectBill(?\Maetva\ESeason\WebCampServices\StructType\DirectBill $directBill = null): self
    {
        $this->directBill = $directBill;
        
        return $this;
    }
    /**
     * Get holderName value
     * @return string|null
     */
    public function getHolderName(): ?string
    {
        return $this->holderName;
    }
    /**
     * Set holderName value
     * @param string $holderName
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setHolderName(?string $holderName = null): self
    {
        // validation for constraint: string
        if (!is_null($holderName) && !is_string($holderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holderName, true), gettype($holderName)), __LINE__);
        }
        $this->holderName = $holderName;
        
        return $this;
    }
    /**
     * Get loyaltyRedemption value
     * @return \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption|null
     */
    public function getLoyaltyRedemption(): ?\Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption
    {
        return $this->loyaltyRedemption;
    }
    /**
     * Set loyaltyRedemption value
     * @param \Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption $loyaltyRedemption
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setLoyaltyRedemption(?\Maetva\ESeason\WebCampServices\StructType\LoyaltyRedemption $loyaltyRedemption = null): self
    {
        $this->loyaltyRedemption = $loyaltyRedemption;
        
        return $this;
    }
    /**
     * Get miscChargeOrder value
     * @return \Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder|null
     */
    public function getMiscChargeOrder(): ?\Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder
    {
        return $this->miscChargeOrder;
    }
    /**
     * Set miscChargeOrder value
     * @param \Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder $miscChargeOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setMiscChargeOrder(?\Maetva\ESeason\WebCampServices\StructType\MiscChargeOrder $miscChargeOrder = null): self
    {
        $this->miscChargeOrder = $miscChargeOrder;
        
        return $this;
    }
    /**
     * Get paymentCardType value
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentCardType|null
     */
    public function getPaymentCardType(): ?\Maetva\ESeason\WebCampServices\StructType\PaymentCardType
    {
        return $this->paymentCardType;
    }
    /**
     * Set paymentCardType value
     * @param \Maetva\ESeason\WebCampServices\StructType\PaymentCardType $paymentCardType
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setPaymentCardType(?\Maetva\ESeason\WebCampServices\StructType\PaymentCardType $paymentCardType = null): self
    {
        $this->paymentCardType = $paymentCardType;
        
        return $this;
    }
    /**
     * Get voucher value
     * @return \Maetva\ESeason\WebCampServices\StructType\Voucher|null
     */
    public function getVoucher(): ?\Maetva\ESeason\WebCampServices\StructType\Voucher
    {
        return $this->voucher;
    }
    /**
     * Set voucher value
     * @param \Maetva\ESeason\WebCampServices\StructType\Voucher $voucher
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setVoucher(?\Maetva\ESeason\WebCampServices\StructType\Voucher $voucher = null): self
    {
        $this->voucher = $voucher;
        
        return $this;
    }
    /**
     * Get ancv value
     * @return \Maetva\ESeason\WebCampServices\StructType\Ancv|null
     */
    public function getAncv(): ?\Maetva\ESeason\WebCampServices\StructType\Ancv
    {
        return $this->ancv;
    }
    /**
     * Set ancv value
     * @param \Maetva\ESeason\WebCampServices\StructType\Ancv $ancv
     * @return \Maetva\ESeason\WebCampServices\StructType\PaymentFormType
     */
    public function setAncv(?\Maetva\ESeason\WebCampServices\StructType\Ancv $ancv = null): self
    {
        $this->ancv = $ancv;
        
        return $this;
    }
}
