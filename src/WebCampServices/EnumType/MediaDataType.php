<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MediaDataType EnumType
 * @subpackage Enumerations
 */
class MediaDataType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'data'
     * @return string 'data'
     */
    const VALUE_DATA = 'data';
    /**
     * Constant for value 'uri'
     * @return string 'uri'
     */
    const VALUE_URI = 'uri';
    /**
     * Return allowed values
     * @uses self::VALUE_DATA
     * @uses self::VALUE_URI
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DATA,
            self::VALUE_URI,
        ];
    }
}
