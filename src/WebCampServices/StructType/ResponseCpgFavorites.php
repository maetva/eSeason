<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseCpgFavorites StructType
 * @subpackage Structs
 */
class ResponseCpgFavorites extends AbstractStructBase
{
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The messError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $messError = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The favorites
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Stay[]
     */
    protected ?array $favorites = null;
    /**
     * Constructor method for ResponseCpgFavorites
     * @uses ResponseCpgFavorites::setError()
     * @uses ResponseCpgFavorites::setMessError()
     * @uses ResponseCpgFavorites::setIdUser()
     * @uses ResponseCpgFavorites::setFavorites()
     * @param string $error
     * @param string $messError
     * @param string $idUser
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay[] $favorites
     */
    public function __construct(?string $error = null, ?string $messError = null, ?string $idUser = null, ?array $favorites = null)
    {
        $this
            ->setError($error)
            ->setMessError($messError)
            ->setIdUser($idUser)
            ->setFavorites($favorites);
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues()
     * @throws InvalidArgumentException
     * @param string $error
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\Errors::valueIsValid($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\Errors', is_array($error) ? implode(', ', $error) : var_export($error, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\Errors::getValidValues())), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get messError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessError(): ?string
    {
        return isset($this->messError) ? $this->messError : null;
    }
    /**
     * Set messError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messError
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites
     */
    public function setMessError(?string $messError = null): self
    {
        // validation for constraint: string
        if (!is_null($messError) && !is_string($messError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messError, true), gettype($messError)), __LINE__);
        }
        if (is_null($messError) || (is_array($messError) && empty($messError))) {
            unset($this->messError);
        } else {
            $this->messError = $messError;
        }
        
        return $this;
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites
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
     * Get favorites value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Stay[]
     */
    public function getFavorites(): ?array
    {
        return isset($this->favorites) ? $this->favorites : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFavorites method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavorites method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoritesForArrayConstraintsFromSetFavorites(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseCpgFavoritesFavoritesItem) {
            // validation for constraint: itemType
            if (!$responseCpgFavoritesFavoritesItem instanceof \Maetva\ESeason\WebCampServices\StructType\Stay) {
                $invalidValues[] = is_object($responseCpgFavoritesFavoritesItem) ? get_class($responseCpgFavoritesFavoritesItem) : sprintf('%s(%s)', gettype($responseCpgFavoritesFavoritesItem), var_export($responseCpgFavoritesFavoritesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The favorites property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Stay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set favorites value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay[] $favorites
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites
     */
    public function setFavorites(?array $favorites = null): self
    {
        // validation for constraint: array
        if ('' !== ($favoritesArrayErrorMessage = self::validateFavoritesForArrayConstraintsFromSetFavorites($favorites))) {
            throw new InvalidArgumentException($favoritesArrayErrorMessage, __LINE__);
        }
        if (is_null($favorites) || (is_array($favorites) && empty($favorites))) {
            unset($this->favorites);
        } else {
            $this->favorites = $favorites;
        }
        
        return $this;
    }
    /**
     * Add item to favorites value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Stay $item
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites
     */
    public function addToFavorites(\Maetva\ESeason\WebCampServices\StructType\Stay $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Stay) {
            throw new InvalidArgumentException(sprintf('The favorites property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Stay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->favorites[] = $item;
        
        return $this;
    }
}
