<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgBoolSiteAvailability StructType
 * @subpackage Structs
 */
class ResponseCpgBoolSiteAvailability extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The idsite
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $idsite = null;
    /**
     * The error
     * @var int|null
     */
    protected ?int $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * Constructor method for ResponseCpgBoolSiteAvailability
     * @uses ResponseCpgBoolSiteAvailability::setIdUser()
     * @uses ResponseCpgBoolSiteAvailability::setIdsite()
     * @uses ResponseCpgBoolSiteAvailability::setError()
     * @uses ResponseCpgBoolSiteAvailability::setMessError()
     * @param string $idUser
     * @param int[] $idsite
     * @param int $error
     * @param string $messError
     */
    public function __construct(?string $idUser = null, ?array $idsite = null, ?int $error = null, ?string $messError = null)
    {
        $this
            ->setIdUser($idUser)
            ->setIdsite($idsite)
            ->setError($error)
            ->setMessError($messError);
    }
    /**
     * Get idUser value
     * @return string|null
     */
    public function getIdUser(): ?string
    {
        return $this->idUser;
    }
    /**
     * Set idUser value
     * @param string $idUser
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability
     */
    public function setIdUser(?string $idUser = null): self
    {
        // validation for constraint: string
        if (!is_null($idUser) && !is_string($idUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idUser, true), gettype($idUser)), __LINE__);
        }
        $this->idUser = $idUser;
        
        return $this;
    }
    /**
     * Get idsite value
     * @return int[]
     */
    public function getIdsite(): ?array
    {
        return $this->idsite;
    }
    /**
     * This method is responsible for validating the values passed to the setIdsite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdsite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsiteForArrayConstraintsFromSetIdsite(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgBoolSiteAvailabilityIdsiteItem) {
            // validation for constraint: itemType
            if (!(is_int($responseCpgBoolSiteAvailabilityIdsiteItem) || ctype_digit($responseCpgBoolSiteAvailabilityIdsiteItem))) {
                $invalidValues[] = is_object($responseCpgBoolSiteAvailabilityIdsiteItem) ? get_class($responseCpgBoolSiteAvailabilityIdsiteItem) : sprintf('%s(%s)', gettype($responseCpgBoolSiteAvailabilityIdsiteItem), var_export($responseCpgBoolSiteAvailabilityIdsiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idsite property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idsite value
     * @throws InvalidArgumentException
     * @param int[] $idsite
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability
     */
    public function setIdsite(?array $idsite = null): self
    {
        // validation for constraint: array
        if ('' !== ($idsiteArrayErrorMessage = self::validateIdsiteForArrayConstraintsFromSetIdsite($idsite))) {
            throw new InvalidArgumentException($idsiteArrayErrorMessage, __LINE__);
        }
        $this->idsite = $idsite;
        
        return $this;
    }
    /**
     * Add item to idsite value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability
     */
    public function addToIdsite(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The idsite property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idsite[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return int|null
     */
    public function getError(): ?int
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param int $error
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability
     */
    public function setError(?int $error = null): self
    {
        // validation for constraint: int
        if (!is_null($error) && !(is_int($error) || ctype_digit($error))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return $this->messError;
    }
    /**
     * Set messError value
     * @param string $messError
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        $this->messError = $messError;
        
        return $this;
    }
}
