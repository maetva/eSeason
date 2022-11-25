<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgFavorites StructType
 * @subpackage Structs
 */
class RequestCpgFavorites extends AbstractStructBase
{
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The idsite
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $idsite = null;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The idCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idCustomer = null;
    /**
     * Constructor method for RequestCpgFavorites
     * @uses RequestCpgFavorites::setIdUser()
     * @uses RequestCpgFavorites::setLanguage()
     * @uses RequestCpgFavorites::setPassword()
     * @uses RequestCpgFavorites::setIdsite()
     * @uses RequestCpgFavorites::setQuantity()
     * @uses RequestCpgFavorites::setType()
     * @uses RequestCpgFavorites::setIdCustomer()
     * @param string $idUser
     * @param string $language
     * @param string $password
     * @param int[] $idsite
     * @param int $quantity
     * @param string $type
     * @param string $idCustomer
     */
    public function __construct(?string $idUser = null, ?string $language = null, ?string $password = null, ?array $idsite = null, ?int $quantity = null, ?string $type = null, ?string $idCustomer = null)
    {
        $this
            ->setIdUser($idUser)
            ->setLanguage($language)
            ->setPassword($password)
            ->setIdsite($idsite)
            ->setQuantity($quantity)
            ->setType($type)
            ->setIdCustomer($idCustomer);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
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
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
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
        foreach ($values as $requestCpgFavoritesIdsiteItem) {
            // validation for constraint: itemType
            if (!(is_int($requestCpgFavoritesIdsiteItem) || ctype_digit($requestCpgFavoritesIdsiteItem))) {
                $invalidValues[] = is_object($requestCpgFavoritesIdsiteItem) ? get_class($requestCpgFavoritesIdsiteItem) : sprintf('%s(%s)', gettype($requestCpgFavoritesIdsiteItem), var_export($requestCpgFavoritesIdsiteItem, true));
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
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
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\FavoriteType::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\FavoriteType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\FavoriteType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\FavoriteType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\FavoriteType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get idCustomer value
     * @return string|null
     */
    public function getIdCustomer(): ?string
    {
        return $this->idCustomer;
    }
    /**
     * Set idCustomer value
     * @param string $idCustomer
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites
     */
    public function setIdCustomer(?string $idCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($idCustomer) && !is_string($idCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCustomer, true), gettype($idCustomer)), __LINE__);
        }
        $this->idCustomer = $idCustomer;
        
        return $this;
    }
}
