<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FavoriteType EnumType
 * @subpackage Enumerations
 */
class FavoriteType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'stay'
     * @return string 'stay'
     */
    const VALUE_STAY = 'stay';
    /**
     * Constant for value 'promo'
     * @return string 'promo'
     */
    const VALUE_PROMO = 'promo';
    /**
     * Return allowed values
     * @uses self::VALUE_STAY
     * @uses self::VALUE_PROMO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STAY,
            self::VALUE_PROMO,
        ];
    }
}
