<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for supplementType EnumType
 * @subpackage Enumerations
 */
class SupplementType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'person'
     * @return string 'person'
     */
    const VALUE_PERSON = 'person';
    /**
     * Constant for value 'equipment'
     * @return string 'equipment'
     */
    const VALUE_EQUIPMENT = 'equipment';
    /**
     * Constant for value 'vehicle'
     * @return string 'vehicle'
     */
    const VALUE_VEHICLE = 'vehicle';
    /**
     * Constant for value 'other'
     * @return string 'other'
     */
    const VALUE_OTHER = 'other';
    /**
     * Constant for value 'cancel'
     * @return string 'cancel'
     */
    const VALUE_CANCEL = 'cancel';
    /**
     * Constant for value 'fee'
     * @return string 'fee'
     */
    const VALUE_FEE = 'fee';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSON
     * @uses self::VALUE_EQUIPMENT
     * @uses self::VALUE_VEHICLE
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_FEE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSON,
            self::VALUE_EQUIPMENT,
            self::VALUE_VEHICLE,
            self::VALUE_OTHER,
            self::VALUE_CANCEL,
            self::VALUE_FEE,
        ];
    }
}
