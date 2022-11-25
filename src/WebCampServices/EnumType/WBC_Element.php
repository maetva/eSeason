<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WBC_Element EnumType
 * @subpackage Enumerations
 */
class WBC_Element extends AbstractStructEnumBase
{
    /**
     * Constant for value 'order'
     * @return string 'order'
     */
    const VALUE_ORDER = 'order';
    /**
     * Constant for value 'payment'
     * @return string 'payment'
     */
    const VALUE_PAYMENT = 'payment';
    /**
     * Return allowed values
     * @uses self::VALUE_ORDER
     * @uses self::VALUE_PAYMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ORDER,
            self::VALUE_PAYMENT,
        ];
    }
}
