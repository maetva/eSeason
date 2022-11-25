<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for lodgingType EnumType
 * @subpackage Enumerations
 */
class LodgingType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'camping'
     * @return string 'camping'
     */
    const VALUE_CAMPING = 'camping';
    /**
     * Constant for value 'location'
     * @return string 'location'
     */
    const VALUE_LOCATION = 'location';
    /**
     * Return allowed values
     * @uses self::VALUE_CAMPING
     * @uses self::VALUE_LOCATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CAMPING,
            self::VALUE_LOCATION,
        ];
    }
}
