<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for manners EnumType
 * @subpackage Enumerations
 */
class Manners extends AbstractStructEnumBase
{
    /**
     * Constant for value 'naturist'
     * @return string 'naturist'
     */
    const VALUE_NATURIST = 'naturist';
    /**
     * Return allowed values
     * @uses self::VALUE_NATURIST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NATURIST,
        ];
    }
}
