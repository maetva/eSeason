<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromoType EnumType
 * @subpackage Enumerations
 */
class PromoType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'cash'
     * @return string 'cash'
     */
    const VALUE_CASH = 'cash';
    /**
     * Constant for value 'code'
     * @return string 'code'
     */
    const VALUE_CODE = 'code';
    /**
     * Constant for value 'early'
     * @return string 'early'
     */
    const VALUE_EARLY = 'early';
    /**
     * Constant for value 'lastMinute'
     * @return string 'lastMinute'
     */
    const VALUE_LAST_MINUTE = 'lastMinute';
    /**
     * Constant for value 'classic'
     * @return string 'classic'
     */
    const VALUE_CLASSIC = 'classic';
    /**
     * Return allowed values
     * @uses self::VALUE_CASH
     * @uses self::VALUE_CODE
     * @uses self::VALUE_EARLY
     * @uses self::VALUE_LAST_MINUTE
     * @uses self::VALUE_CLASSIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CASH,
            self::VALUE_CODE,
            self::VALUE_EARLY,
            self::VALUE_LAST_MINUTE,
            self::VALUE_CLASSIC,
        ];
    }
}
