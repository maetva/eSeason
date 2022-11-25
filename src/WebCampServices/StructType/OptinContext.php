<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptinContext StructType
 * @subpackage Structs
 */
class OptinContext extends AbstractStructBase
{
    /**
     * The optinType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $optinType = null;
    /**
     * The optinQuestionContext
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext[]
     */
    protected ?array $optinQuestionContext = null;
    /**
     * Constructor method for OptinContext
     * @uses OptinContext::setOptinType()
     * @uses OptinContext::setOptinQuestionContext()
     * @param string[] $optinType
     * @param \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext[] $optinQuestionContext
     */
    public function __construct(?array $optinType = null, ?array $optinQuestionContext = null)
    {
        $this
            ->setOptinType($optinType)
            ->setOptinQuestionContext($optinQuestionContext);
    }
    /**
     * Get optinType value
     * @return string[]
     */
    public function getOptinType(): ?array
    {
        return $this->optinType;
    }
    /**
     * This method is responsible for validating the values passed to the setOptinType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptinType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptinTypeForArrayConstraintsFromSetOptinType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optinContextOptinTypeItem) {
            // validation for constraint: itemType
            if (!is_string($optinContextOptinTypeItem)) {
                $invalidValues[] = is_object($optinContextOptinTypeItem) ? get_class($optinContextOptinTypeItem) : sprintf('%s(%s)', gettype($optinContextOptinTypeItem), var_export($optinContextOptinTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The optinType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set optinType value
     * @throws InvalidArgumentException
     * @param string[] $optinType
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinContext
     */
    public function setOptinType(?array $optinType = null): self
    {
        // validation for constraint: array
        if ('' !== ($optinTypeArrayErrorMessage = self::validateOptinTypeForArrayConstraintsFromSetOptinType($optinType))) {
            throw new InvalidArgumentException($optinTypeArrayErrorMessage, __LINE__);
        }
        $this->optinType = $optinType;
        
        return $this;
    }
    /**
     * Add item to optinType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinContext
     */
    public function addToOptinType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The optinType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->optinType[] = $item;
        
        return $this;
    }
    /**
     * Get optinQuestionContext value
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext[]
     */
    public function getOptinQuestionContext(): ?array
    {
        return $this->optinQuestionContext;
    }
    /**
     * This method is responsible for validating the values passed to the setOptinQuestionContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptinQuestionContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptinQuestionContextForArrayConstraintsFromSetOptinQuestionContext(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optinContextOptinQuestionContextItem) {
            // validation for constraint: itemType
            if (!$optinContextOptinQuestionContextItem instanceof \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext) {
                $invalidValues[] = is_object($optinContextOptinQuestionContextItem) ? get_class($optinContextOptinQuestionContextItem) : sprintf('%s(%s)', gettype($optinContextOptinQuestionContextItem), var_export($optinContextOptinQuestionContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The optinQuestionContext property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set optinQuestionContext value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext[] $optinQuestionContext
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinContext
     */
    public function setOptinQuestionContext(?array $optinQuestionContext = null): self
    {
        // validation for constraint: array
        if ('' !== ($optinQuestionContextArrayErrorMessage = self::validateOptinQuestionContextForArrayConstraintsFromSetOptinQuestionContext($optinQuestionContext))) {
            throw new InvalidArgumentException($optinQuestionContextArrayErrorMessage, __LINE__);
        }
        $this->optinQuestionContext = $optinQuestionContext;
        
        return $this;
    }
    /**
     * Add item to optinQuestionContext value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext $item
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinContext
     */
    public function addToOptinQuestionContext(\Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext) {
            throw new InvalidArgumentException(sprintf('The optinQuestionContext property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->optinQuestionContext[] = $item;
        
        return $this;
    }
}
