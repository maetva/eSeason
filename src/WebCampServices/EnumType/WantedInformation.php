<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for wantedInformation EnumType
 * @subpackage Enumerations
 */
class WantedInformation extends AbstractStructEnumBase
{
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Return allowed values
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
        ];
    }
}
