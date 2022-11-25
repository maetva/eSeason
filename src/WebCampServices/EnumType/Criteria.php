<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for criteria EnumType
 * @subpackage Enumerations
 */
class Criteria extends AbstractStructEnumBase
{
    /**
     * Constant for value 'pub'
     * @return string 'pub'
     */
    const VALUE_PUB = 'pub';
    /**
     * Constant for value 'restaurant'
     * @return string 'restaurant'
     */
    const VALUE_RESTAURANT = 'restaurant';
    /**
     * Constant for value 'launderette'
     * @return string 'launderette'
     */
    const VALUE_LAUNDERETTE = 'launderette';
    /**
     * Constant for value 'bicycle_hiring'
     * @return string 'bicycle_hiring'
     */
    const VALUE_BICYCLE_HIRING = 'bicycle_hiring';
    /**
     * Constant for value 'area_campers'
     * @return string 'area_campers'
     */
    const VALUE_AREA_CAMPERS = 'area_campers';
    /**
     * Constant for value 'animals_admitted'
     * @return string 'animals_admitted'
     */
    const VALUE_ANIMALS_ADMITTED = 'animals_admitted';
    /**
     * Constant for value 'children_club'
     * @return string 'children_club'
     */
    const VALUE_CHILDREN_CLUB = 'children_club';
    /**
     * Constant for value 'entertainment'
     * @return string 'entertainment'
     */
    const VALUE_ENTERTAINMENT = 'entertainment';
    /**
     * Constant for value 'disco'
     * @return string 'disco'
     */
    const VALUE_DISCO = 'disco';
    /**
     * Constant for value 'swimming_pool'
     * @return string 'swimming_pool'
     */
    const VALUE_SWIMMING_POOL = 'swimming_pool';
    /**
     * Constant for value 'river'
     * @return string 'river'
     */
    const VALUE_RIVER = 'river';
    /**
     * Constant for value 'boats'
     * @return string 'boats'
     */
    const VALUE_BOATS = 'boats';
    /**
     * Constant for value 'fishing'
     * @return string 'fishing'
     */
    const VALUE_FISHING = 'fishing';
    /**
     * Constant for value 'golf'
     * @return string 'golf'
     */
    const VALUE_GOLF = 'golf';
    /**
     * Constant for value 'water_play_park'
     * @return string 'water_play_park'
     */
    const VALUE_WATER_PLAY_PARK = 'water_play_park';
    /**
     * Constant for value 'windsurfing'
     * @return string 'windsurfing'
     */
    const VALUE_WINDSURFING = 'windsurfing';
    /**
     * Constant for value 'kayaking'
     * @return string 'kayaking'
     */
    const VALUE_KAYAKING = 'kayaking';
    /**
     * Constant for value 'horse_riding'
     * @return string 'horse_riding'
     */
    const VALUE_HORSE_RIDING = 'horse_riding';
    /**
     * Constant for value 'quad'
     * @return string 'quad'
     */
    const VALUE_QUAD = 'quad';
    /**
     * Constant for value 'tennis'
     * @return string 'tennis'
     */
    const VALUE_TENNIS = 'tennis';
    /**
     * Constant for value 'sailing'
     * @return string 'sailing'
     */
    const VALUE_SAILING = 'sailing';
    /**
     * Constant for value 'diving'
     * @return string 'diving'
     */
    const VALUE_DIVING = 'diving';
    /**
     * Constant for value 'archery'
     * @return string 'archery'
     */
    const VALUE_ARCHERY = 'archery';
    /**
     * Return allowed values
     * @uses self::VALUE_PUB
     * @uses self::VALUE_RESTAURANT
     * @uses self::VALUE_LAUNDERETTE
     * @uses self::VALUE_BICYCLE_HIRING
     * @uses self::VALUE_AREA_CAMPERS
     * @uses self::VALUE_ANIMALS_ADMITTED
     * @uses self::VALUE_CHILDREN_CLUB
     * @uses self::VALUE_ENTERTAINMENT
     * @uses self::VALUE_DISCO
     * @uses self::VALUE_SWIMMING_POOL
     * @uses self::VALUE_RIVER
     * @uses self::VALUE_BOATS
     * @uses self::VALUE_FISHING
     * @uses self::VALUE_GOLF
     * @uses self::VALUE_WATER_PLAY_PARK
     * @uses self::VALUE_WINDSURFING
     * @uses self::VALUE_KAYAKING
     * @uses self::VALUE_HORSE_RIDING
     * @uses self::VALUE_QUAD
     * @uses self::VALUE_TENNIS
     * @uses self::VALUE_SAILING
     * @uses self::VALUE_DIVING
     * @uses self::VALUE_ARCHERY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUB,
            self::VALUE_RESTAURANT,
            self::VALUE_LAUNDERETTE,
            self::VALUE_BICYCLE_HIRING,
            self::VALUE_AREA_CAMPERS,
            self::VALUE_ANIMALS_ADMITTED,
            self::VALUE_CHILDREN_CLUB,
            self::VALUE_ENTERTAINMENT,
            self::VALUE_DISCO,
            self::VALUE_SWIMMING_POOL,
            self::VALUE_RIVER,
            self::VALUE_BOATS,
            self::VALUE_FISHING,
            self::VALUE_GOLF,
            self::VALUE_WATER_PLAY_PARK,
            self::VALUE_WINDSURFING,
            self::VALUE_KAYAKING,
            self::VALUE_HORSE_RIDING,
            self::VALUE_QUAD,
            self::VALUE_TENNIS,
            self::VALUE_SAILING,
            self::VALUE_DIVING,
            self::VALUE_ARCHERY,
        ];
    }
}
