<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelInformation StructType
 * @subpackage Structs
 */
class ChannelInformation extends AbstractStructBase
{
    /**
     * The idChannel
     * @var int|null
     */
    protected ?int $idChannel = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The idEnterprise
     * @var int|null
     */
    protected ?int $idEnterprise = null;
    /**
     * Constructor method for ChannelInformation
     * @uses ChannelInformation::setIdChannel()
     * @uses ChannelInformation::setName()
     * @uses ChannelInformation::setIdEnterprise()
     * @param int $idChannel
     * @param string $name
     * @param int $idEnterprise
     */
    public function __construct(?int $idChannel = null, ?string $name = null, ?int $idEnterprise = null)
    {
        $this
            ->setIdChannel($idChannel)
            ->setName($name)
            ->setIdEnterprise($idEnterprise);
    }
    /**
     * Get idChannel value
     * @return int|null
     */
    public function getIdChannel(): ?int
    {
        return $this->idChannel;
    }
    /**
     * Set idChannel value
     * @param int $idChannel
     * @return \Maetva\ESeason\WebCampServices\StructType\ChannelInformation
     */
    public function setIdChannel(?int $idChannel = null): self
    {
        // validation for constraint: int
        if (!is_null($idChannel) && !(is_int($idChannel) || ctype_digit($idChannel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idChannel, true), gettype($idChannel)), __LINE__);
        }
        $this->idChannel = $idChannel;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ChannelInformation
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
     * @return \Maetva\ESeason\WebCampServices\StructType\ChannelInformation
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
