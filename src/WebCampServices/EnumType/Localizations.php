<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for localizations EnumType
 * @subpackage Enumerations
 */
class Localizations extends AbstractStructEnumBase
{
    /**
     * Constant for value 'sea'
     * @return string 'sea'
     */
    const VALUE_SEA = 'sea';
    /**
     * Constant for value 'mountain'
     * @return string 'mountain'
     */
    const VALUE_MOUNTAIN = 'mountain';
    /**
     * Constant for value 'country'
     * @return string 'country'
     */
    const VALUE_COUNTRY = 'country';
    /**
     * Return allowed values
     * @uses self::VALUE_SEA
     * @uses self::VALUE_MOUNTAIN
     * @uses self::VALUE_COUNTRY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEA,
            self::VALUE_MOUNTAIN,
            self::VALUE_COUNTRY,
        ];
    }
}
