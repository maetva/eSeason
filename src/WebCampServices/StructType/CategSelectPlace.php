<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategSelectPlace StructType
 * @subpackage Structs
 */
class CategSelectPlace extends AbstractStructBase
{
    /**
     * The choice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $choice = null;
    /**
     * The preference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SectorCom[]
     */
    protected ?array $preference = null;
    /**
     * Constructor method for CategSelectPlace
     * @uses CategSelectPlace::setChoice()
     * @uses CategSelectPlace::setPreference()
     * @param string[] $choice
     * @param \Maetva\ESeason\WebCampServices\StructType\SectorCom[] $preference
     */
    public function __construct(?array $choice = null, ?array $preference = null)
    {
        $this
            ->setChoice($choice)
            ->setPreference($preference);
    }
    /**
     * Get choice value
     * @return string[]
     */
    public function getChoice(): ?array
    {
        return $this->choice;
    }
    /**
     * This method is responsible for validating the values passed to the setChoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChoice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChoiceForArrayConstraintsFromSetChoice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $categSelectPlaceChoiceItem) {
            // validation for constraint: itemType
            if (!is_string($categSelectPlaceChoiceItem)) {
                $invalidValues[] = is_object($categSelectPlaceChoiceItem) ? get_class($categSelectPlaceChoiceItem) : sprintf('%s(%s)', gettype($categSelectPlaceChoiceItem), var_export($categSelectPlaceChoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The choice property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set choice value
     * @throws InvalidArgumentException
     * @param string[] $choice
     * @return \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace
     */
    public function setChoice(?array $choice = null): self
    {
        // validation for constraint: array
        if ('' !== ($choiceArrayErrorMessage = self::validateChoiceForArrayConstraintsFromSetChoice($choice))) {
            throw new InvalidArgumentException($choiceArrayErrorMessage, __LINE__);
        }
        $this->choice = $choice;
        
        return $this;
    }
    /**
     * Add item to choice value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace
     */
    public function addToChoice(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The choice property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->choice[] = $item;
        
        return $this;
    }
    /**
     * Get preference value
     * @return \Maetva\ESeason\WebCampServices\StructType\SectorCom[]
     */
    public function getPreference(): ?array
    {
        return $this->preference;
    }
    /**
     * This method is responsible for validating the values passed to the setPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferenceForArrayConstraintsFromSetPreference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $categSelectPlacePreferenceItem) {
            // validation for constraint: itemType
            if (!$categSelectPlacePreferenceItem instanceof \Maetva\ESeason\WebCampServices\StructType\SectorCom) {
                $invalidValues[] = is_object($categSelectPlacePreferenceItem) ? get_class($categSelectPlacePreferenceItem) : sprintf('%s(%s)', gettype($categSelectPlacePreferenceItem), var_export($categSelectPlacePreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The preference property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SectorCom, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set preference value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SectorCom[] $preference
     * @return \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace
     */
    public function setPreference(?array $preference = null): self
    {
        // validation for constraint: array
        if ('' !== ($preferenceArrayErrorMessage = self::validatePreferenceForArrayConstraintsFromSetPreference($preference))) {
            throw new InvalidArgumentException($preferenceArrayErrorMessage, __LINE__);
        }
        $this->preference = $preference;
        
        return $this;
    }
    /**
     * Add item to preference value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SectorCom $item
     * @return \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace
     */
    public function addToPreference(\Maetva\ESeason\WebCampServices\StructType\SectorCom $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SectorCom) {
            throw new InvalidArgumentException(sprintf('The preference property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SectorCom, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->preference[] = $item;
        
        return $this;
    }
}
