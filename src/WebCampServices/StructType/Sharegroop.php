<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sharegroop StructType
 * @subpackage Structs
 */
class Sharegroop extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orderId = null;
    /**
     * The sharingLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sharingLink = null;
    /**
     * Constructor method for Sharegroop
     * @uses Sharegroop::setOrderId()
     * @uses Sharegroop::setSharingLink()
     * @param string $orderId
     * @param string $sharingLink
     */
    public function __construct(?string $orderId = null, ?string $sharingLink = null)
    {
        $this
            ->setOrderId($orderId)
            ->setSharingLink($sharingLink);
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \Maetva\ESeason\WebCampServices\StructType\Sharegroop
     */
    public function setOrderId(?string $orderId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get sharingLink value
     * @return string|null
     */
    public function getSharingLink(): ?string
    {
        return $this->sharingLink;
    }
    /**
     * Set sharingLink value
     * @param string $sharingLink
     * @return \Maetva\ESeason\WebCampServices\StructType\Sharegroop
     */
    public function setSharingLink(?string $sharingLink = null): self
    {
        // validation for constraint: string
        if (!is_null($sharingLink) && !is_string($sharingLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharingLink, true), gettype($sharingLink)), __LINE__);
        }
        $this->sharingLink = $sharingLink;
        
        return $this;
    }
}
