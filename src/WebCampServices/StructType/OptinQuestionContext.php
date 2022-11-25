<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptinQuestionContext StructType
 * @subpackage Structs
 */
class OptinQuestionContext extends AbstractStructBase
{
    /**
     * The question
     * @var string|null
     */
    protected ?string $question = null;
    /**
     * The optinType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $optinType = null;
    /**
     * The idEnterprise
     * @var int|null
     */
    protected ?int $idEnterprise = null;
    /**
     * Constructor method for OptinQuestionContext
     * @uses OptinQuestionContext::setQuestion()
     * @uses OptinQuestionContext::setOptinType()
     * @uses OptinQuestionContext::setIdEnterprise()
     * @param string $question
     * @param string[] $optinType
     * @param int $idEnterprise
     */
    public function __construct(?string $question = null, ?array $optinType = null, ?int $idEnterprise = null)
    {
        $this
            ->setQuestion($question)
            ->setOptinType($optinType)
            ->setIdEnterprise($idEnterprise);
    }
    /**
     * Get question value
     * @return string|null
     */
    public function getQuestion(): ?string
    {
        return $this->question;
    }
    /**
     * Set question value
     * @param string $question
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext
     */
    public function setQuestion(?string $question = null): self
    {
        // validation for constraint: string
        if (!is_null($question) && !is_string($question)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($question, true), gettype($question)), __LINE__);
        }
        $this->question = $question;
        
        return $this;
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
        foreach ($values as $optinQuestionContextOptinTypeItem) {
            // validation for constraint: itemType
            if (!is_string($optinQuestionContextOptinTypeItem)) {
                $invalidValues[] = is_object($optinQuestionContextOptinTypeItem) ? get_class($optinQuestionContextOptinTypeItem) : sprintf('%s(%s)', gettype($optinQuestionContextOptinTypeItem), var_export($optinQuestionContextOptinTypeItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext
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
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext
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
     * Get idEnterprise value
     * @return int|null
     */
    public function getIdEnterprise(): ?int
    {
        return $this->idEnterprise;
    }
    /**
     * Set idEnterprise value
     * @param int $idEnterprise
     * @return \Maetva\ESeason\WebCampServices\StructType\OptinQuestionContext
     */
    public function setIdEnterprise(?int $idEnterprise = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnterprise) && !(is_int($idEnterprise) || ctype_digit($idEnterprise))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnterprise, true), gettype($idEnterprise)), __LINE__);
        }
        $this->idEnterprise = $idEnterprise;
        
        return $this;
    }
}
