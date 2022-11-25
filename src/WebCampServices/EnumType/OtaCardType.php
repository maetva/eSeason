<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for otaCardType EnumType
 * @subpackage Enumerations
 */
class OtaCardType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AX'
     * @return string 'AX'
     */
    const VALUE_AX = 'AX';
    /**
     * Constant for value 'BC'
     * @return string 'BC'
     */
    const VALUE_BC = 'BC';
    /**
     * Constant for value 'BL'
     * @return string 'BL'
     */
    const VALUE_BL = 'BL';
    /**
     * Constant for value 'CB'
     * @return string 'CB'
     */
    const VALUE_CB = 'CB';
    /**
     * Constant for value 'DN'
     * @return string 'DN'
     */
    const VALUE_DN = 'DN';
    /**
     * Constant for value 'DS'
     * @return string 'DS'
     */
    const VALUE_DS = 'DS';
    /**
     * Constant for value 'EC'
     * @return string 'EC'
     */
    const VALUE_EC = 'EC';
    /**
     * Constant for value 'JC'
     * @return string 'JC'
     */
    const VALUE_JC = 'JC';
    /**
     * Constant for value 'MC'
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'TP'
     * @return string 'TP'
     */
    const VALUE_TP = 'TP';
    /**
     * Constant for value 'VI'
     * @return string 'VI'
     */
    const VALUE_VI = 'VI';
    /**
     * Constant for value 'NULL'
     * @return string 'NULL'
     */
    const VALUE_NULL = 'NULL';
    /**
     * Return allowed values
     * @uses self::VALUE_AX
     * @uses self::VALUE_BC
     * @uses self::VALUE_BL
     * @uses self::VALUE_CB
     * @uses self::VALUE_DN
     * @uses self::VALUE_DS
     * @uses self::VALUE_EC
     * @uses self::VALUE_JC
     * @uses self::VALUE_MC
     * @uses self::VALUE_TP
     * @uses self::VALUE_VI
     * @uses self::VALUE_NULL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AX,
            self::VALUE_BC,
            self::VALUE_BL,
            self::VALUE_CB,
            self::VALUE_DN,
            self::VALUE_DS,
            self::VALUE_EC,
            self::VALUE_JC,
            self::VALUE_MC,
            self::VALUE_TP,
            self::VALUE_VI,
            self::VALUE_NULL,
        ];
    }
}
