<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for civility EnumType
 * @subpackage Enumerations
 */
class Civility extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mr.'
     * @return string 'Mr.'
     */
    const VALUE_MR = 'Mr.';
    /**
     * Constant for value 'Ms.'
     * @return string 'Ms.'
     */
    const VALUE_MS = 'Ms.';
    /**
     * Constant for value 'Miss'
     * @return string 'Miss'
     */
    const VALUE_MISS = 'Miss';
    /**
     * Constant for value 'Ms.,Mr.'
     * @return string 'Ms.,Mr.'
     */
    const VALUE_MS_MR = 'Ms.,Mr.';
    /**
     * Return allowed values
     * @uses self::VALUE_MR
     * @uses self::VALUE_MS
     * @uses self::VALUE_MISS
     * @uses self::VALUE_MS_MR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MR,
            self::VALUE_MS,
            self::VALUE_MISS,
            self::VALUE_MS_MR,
        ];
    }
}
