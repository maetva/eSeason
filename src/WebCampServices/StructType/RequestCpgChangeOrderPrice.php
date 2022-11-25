<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgChangeOrderPrice StructType
 * @subpackage Structs
 */
class RequestCpgChangeOrderPrice extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The idUser
     * @var string|null
     */
    protected ?string $idUser = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The idOrder
     * @var string|null
     */
    protected ?string $idOrder = null;
    /**
     * The supplement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    protected ?array $supplement = null;
    /**
     * The cancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $cancelInsurance = null;
    /**
     * The selectedCancelInsurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $selectedCancelInsurance = null;
    /**
     * The idStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null;
    /**
     * The vehicle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    protected ?array $vehicle = null;
    /**
     * The selectPlace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null;
    /**
     * Constructor method for RequestCpgChangeOrderPrice
     * @uses RequestCpgChangeOrderPrice::setLanguage()
     * @uses RequestCpgChangeOrderPrice::setIdUser()
     * @uses RequestCpgChangeOrderPrice::setPassword()
     * @uses RequestCpgChangeOrderPrice::setIdOrder()
     * @uses RequestCpgChangeOrderPrice::setSupplement()
     * @uses RequestCpgChangeOrderPrice::setCancelInsurance()
     * @uses RequestCpgChangeOrderPrice::setSelectedCancelInsurance()
     * @uses RequestCpgChangeOrderPrice::setIdStay()
     * @uses RequestCpgChangeOrderPrice::setVehicle()
     * @uses RequestCpgChangeOrderPrice::setSelectPlace()
     * @param string $language
     * @param string $idUser
     * @param string $password
     * @param string $idOrder
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @param bool $cancelInsurance
     * @param int $selectedCancelInsurance
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     */
    public function __construct(?string $language = null, ?string $idUser = null, ?string $password = null, ?string $idOrder = null, ?array $supplement = null, ?bool $cancelInsurance = null, ?int $selectedCancelInsurance = null, ?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null, ?array $vehicle = null, ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null)
    {
        $this
            ->setLanguage($language)
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdOrder($idOrder)
            ->setSupplement($supplement)
            ->setCancelInsurance($cancelInsurance)
            ->setSelectedCancelInsurance($selectedCancelInsurance)
            ->setIdStay($idStay)
            ->setVehicle($vehicle)
            ->setSelectPlace($selectPlace);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
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
     * Get idOrder value
     * @return string|null
     */
    public function getIdOrder(): ?string
    {
        return $this->idOrder;
    }
    /**
     * Set idOrder value
     * @param string $idOrder
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setIdOrder(?string $idOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($idOrder) && !is_string($idOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOrder, true), gettype($idOrder)), __LINE__);
        }
        $this->idOrder = $idOrder;
        
        return $this;
    }
    /**
     * Get supplement value
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[]
     */
    public function getSupplement(): ?array
    {
        return $this->supplement;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementForArrayConstraintsFromSetSupplement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgChangeOrderPriceSupplementItem) {
            // validation for constraint: itemType
            if (!$requestCpgChangeOrderPriceSupplementItem instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
                $invalidValues[] = is_object($requestCpgChangeOrderPriceSupplementItem) ? get_class($requestCpgChangeOrderPriceSupplementItem) : sprintf('%s(%s)', gettype($requestCpgChangeOrderPriceSupplementItem), var_export($requestCpgChangeOrderPriceSupplementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementFilled, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplement value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled[] $supplement
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setSupplement(?array $supplement = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplementArrayErrorMessage = self::validateSupplementForArrayConstraintsFromSetSupplement($supplement))) {
            throw new InvalidArgumentException($supplementArrayErrorMessage, __LINE__);
        }
        $this->supplement = $supplement;
        
        return $this;
    }
    /**
     * Add item to supplement value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\SupplementFilled $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function addToSupplement(\Maetva\ESeason\WebCampServices\StructType\SupplementFilled $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\SupplementFilled) {
            throw new InvalidArgumentException(sprintf('The supplement property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\SupplementFilled, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplement[] = $item;
        
        return $this;
    }
    /**
     * Get cancelInsurance value
     * @return bool|null
     */
    public function getCancelInsurance(): ?bool
    {
        return $this->cancelInsurance;
    }
    /**
     * Set cancelInsurance value
     * @param bool $cancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setCancelInsurance(?bool $cancelInsurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancelInsurance) && !is_bool($cancelInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelInsurance, true), gettype($cancelInsurance)), __LINE__);
        }
        $this->cancelInsurance = $cancelInsurance;
        
        return $this;
    }
    /**
     * Get selectedCancelInsurance value
     * @return int|null
     */
    public function getSelectedCancelInsurance(): ?int
    {
        return $this->selectedCancelInsurance;
    }
    /**
     * Set selectedCancelInsurance value
     * @param int $selectedCancelInsurance
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setSelectedCancelInsurance(?int $selectedCancelInsurance = null): self
    {
        // validation for constraint: int
        if (!is_null($selectedCancelInsurance) && !(is_int($selectedCancelInsurance) || ctype_digit($selectedCancelInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($selectedCancelInsurance, true), gettype($selectedCancelInsurance)), __LINE__);
        }
        $this->selectedCancelInsurance = $selectedCancelInsurance;
        
        return $this;
    }
    /**
     * Get idStay value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdStay|null
     */
    public function getIdStay(): ?\Maetva\ESeason\WebCampServices\StructType\IdStay
    {
        return $this->idStay;
    }
    /**
     * Set idStay value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdStay $idStay
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setIdStay(?\Maetva\ESeason\WebCampServices\StructType\IdStay $idStay = null): self
    {
        $this->idStay = $idStay;
        
        return $this;
    }
    /**
     * Get vehicle value
     * @return \Maetva\ESeason\WebCampServices\StructType\Vehicle[]
     */
    public function getVehicle(): ?array
    {
        return $this->vehicle;
    }
    /**
     * This method is responsible for validating the values passed to the setVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleForArrayConstraintsFromSetVehicle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestCpgChangeOrderPriceVehicleItem) {
            // validation for constraint: itemType
            if (!$requestCpgChangeOrderPriceVehicleItem instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
                $invalidValues[] = is_object($requestCpgChangeOrderPriceVehicleItem) ? get_class($requestCpgChangeOrderPriceVehicleItem) : sprintf('%s(%s)', gettype($requestCpgChangeOrderPriceVehicleItem), var_export($requestCpgChangeOrderPriceVehicleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vehicle property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Vehicle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set vehicle value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle[] $vehicle
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setVehicle(?array $vehicle = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleArrayErrorMessage = self::validateVehicleForArrayConstraintsFromSetVehicle($vehicle))) {
            throw new InvalidArgumentException($vehicleArrayErrorMessage, __LINE__);
        }
        $this->vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Add item to vehicle value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Vehicle $item
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function addToVehicle(\Maetva\ESeason\WebCampServices\StructType\Vehicle $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Vehicle) {
            throw new InvalidArgumentException(sprintf('The vehicle property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Vehicle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vehicle[] = $item;
        
        return $this;
    }
    /**
     * Get selectPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\SelectPlace|null
     */
    public function getSelectPlace(): ?\Maetva\ESeason\WebCampServices\StructType\SelectPlace
    {
        return $this->selectPlace;
    }
    /**
     * Set selectPlace value
     * @param \Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice
     */
    public function setSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\SelectPlace $selectPlace = null): self
    {
        $this->selectPlace = $selectPlace;
        
        return $this;
    }
}
