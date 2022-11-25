<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for availabilityResponseType EnumType
 * @subpackage Enumerations
 */
class AvailabilityResponseType extends AbstractStructEnumBase
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '99'
     * @return string '99'
     */
    const VALUE_99 = '99';
    /**
     * Return allowed values
     * @uses self::VALUE_0
     * @uses self::VALUE_1
     * @uses self::VALUE_99
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_0,
            self::VALUE_1,
            self::VALUE_99,
        ];
    }
}
