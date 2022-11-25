<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Season StructType
 * @subpackage Structs
 */
class Season extends AbstractStructBase
{
    /**
     * The id1
     * @var int|null
     */
    protected ?int $id1 = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The openPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\OpenPeriod[]
     */
    protected ?array $openPeriod = null;
    /**
     * Constructor method for Season
     * @uses Season::setId1()
     * @uses Season::setName()
     * @uses Season::setOpenPeriod()
     * @param int $id1
     * @param string $name
     * @param \Maetva\ESeason\WebCampServices\StructType\OpenPeriod[] $openPeriod
     */
    public function __construct(?int $id1 = null, ?string $name = null, ?array $openPeriod = null)
    {
        $this
            ->setId1($id1)
            ->setName($name)
            ->setOpenPeriod($openPeriod);
    }
    /**
     * Get id1 value
     * @return int|null
     */
    public function getId1(): ?int
    {
        return $this->id1;
    }
    /**
     * Set id1 value
     * @param int $id1
     * @return \Maetva\ESeason\WebCampServices\StructType\Season
     */
    public function setId1(?int $id1 = null): self
    {
        // validation for constraint: int
        if (!is_null($id1) && !(is_int($id1) || ctype_digit($id1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id1, true), gettype($id1)), __LINE__);
        }
        $this->id1 = $id1;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maetva\ESeason\WebCampServices\StructType\Season
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get openPeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\OpenPeriod[]
     */
    public function getOpenPeriod(): ?array
    {
        return isset($this->openPeriod) ? $this->openPeriod : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOpenPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOpenPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOpenPeriodForArrayConstraintsFromSetOpenPeriod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $seasonOpenPeriodItem) {
            // validation for constraint: itemType
            if (!$seasonOpenPeriodItem instanceof \Maetva\ESeason\WebCampServices\StructType\OpenPeriod) {
                $invalidValues[] = is_object($seasonOpenPeriodItem) ? get_class($seasonOpenPeriodItem) : sprintf('%s(%s)', gettype($seasonOpenPeriodItem), var_export($seasonOpenPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The openPeriod property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OpenPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set openPeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OpenPeriod[] $openPeriod
     * @return \Maetva\ESeason\WebCampServices\StructType\Season
     */
    public function setOpenPeriod(?array $openPeriod = null): self
    {
        // validation for constraint: array
        if ('' !== ($openPeriodArrayErrorMessage = self::validateOpenPeriodForArrayConstraintsFromSetOpenPeriod($openPeriod))) {
            throw new InvalidArgumentException($openPeriodArrayErrorMessage, __LINE__);
        }
        if (is_null($openPeriod) || (is_array($openPeriod) && empty($openPeriod))) {
            unset($this->openPeriod);
        } else {
            $this->openPeriod = $openPeriod;
        }
        
        return $this;
    }
    /**
     * Add item to openPeriod value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OpenPeriod $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Season
     */
    public function addToOpenPeriod(\Maetva\ESeason\WebCampServices\StructType\OpenPeriod $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\OpenPeriod) {
            throw new InvalidArgumentException(sprintf('The openPeriod property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OpenPeriod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->openPeriod[] = $item;
        
        return $this;
    }
}
