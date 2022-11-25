<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Stock EnumType
 * @subpackage Enumerations
 */
class Stock extends AbstractStructEnumBase
{
    /**
     * Constant for value 'public'
     * @return string 'public'
     */
    const VALUE_PUBLIC = 'public';
    /**
     * Constant for value 'own'
     * @return string 'own'
     */
    const VALUE_OWN = 'own';
    /**
     * Constant for value 'both'
     * @return string 'both'
     */
    const VALUE_BOTH = 'both';
    /**
     * Return allowed values
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_OWN
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUBLIC,
            self::VALUE_OWN,
            self::VALUE_BOTH,
        ];
    }
}
