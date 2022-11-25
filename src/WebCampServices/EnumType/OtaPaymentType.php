<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for otaPaymentType EnumType
 * @subpackage Enumerations
 */
class OtaPaymentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Bank account'
     * @return string 'Bank account'
     */
    const VALUE_BANK_ACCOUNT = 'Bank account';
    /**
     * Constant for value 'Cash'
     * @return string 'Cash'
     */
    const VALUE_CASH = 'Cash';
    /**
     * Constant for value 'Direct Bill'
     * @return string 'Direct Bill'
     */
    const VALUE_DIRECT_BILL = 'Direct Bill';
    /**
     * Constant for value 'Loyalty redemption'
     * @return string 'Loyalty redemption'
     */
    const VALUE_LOYALTY_REDEMPTION = 'Loyalty redemption';
    /**
     * Constant for value 'Misccharge Order'
     * @return string 'Misccharge Order'
     */
    const VALUE_MISCCHARGE_ORDER = 'Misccharge Order';
    /**
     * Constant for value 'Payment Card'
     * @return string 'Payment Card'
     */
    const VALUE_PAYMENT_CARD = 'Payment Card';
    /**
     * Constant for value 'Voucher'
     * @return string 'Voucher'
     */
    const VALUE_VOUCHER = 'Voucher';
    /**
     * Constant for value 'Ancv'
     * @return string 'Ancv'
     */
    const VALUE_ANCV = 'Ancv';
    /**
     * Return allowed values
     * @uses self::VALUE_BANK_ACCOUNT
     * @uses self::VALUE_CASH
     * @uses self::VALUE_DIRECT_BILL
     * @uses self::VALUE_LOYALTY_REDEMPTION
     * @uses self::VALUE_MISCCHARGE_ORDER
     * @uses self::VALUE_PAYMENT_CARD
     * @uses self::VALUE_VOUCHER
     * @uses self::VALUE_ANCV
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BANK_ACCOUNT,
            self::VALUE_CASH,
            self::VALUE_DIRECT_BILL,
            self::VALUE_LOYALTY_REDEMPTION,
            self::VALUE_MISCCHARGE_ORDER,
            self::VALUE_PAYMENT_CARD,
            self::VALUE_VOUCHER,
            self::VALUE_ANCV,
        ];
    }
}
