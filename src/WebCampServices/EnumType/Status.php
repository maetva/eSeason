<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for status EnumType
 * @subpackage Enumerations
 */
class Status extends AbstractStructEnumBase
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Constant for value '10'
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '11'
     * @return string '11'
     */
    const VALUE_11 = '11';
    /**
     * Constant for value '20'
     * @return string '20'
     */
    const VALUE_20 = '20';
    /**
     * Constant for value '30'
     * @return string '30'
     */
    const VALUE_30 = '30';
    /**
     * Return allowed values
     * @uses self::VALUE_0
     * @uses self::VALUE_10
     * @uses self::VALUE_11
     * @uses self::VALUE_20
     * @uses self::VALUE_30
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_0,
            self::VALUE_10,
            self::VALUE_11,
            self::VALUE_20,
            self::VALUE_30,
        ];
    }
}
