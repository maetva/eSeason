<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdPaymentType StructType
 * @subpackage Structs
 */
class IdPaymentType extends AbstractStructBase
{
    /**
     * The id1
     * @var int|null
     */
    protected ?int $id1 = null;
    /**
     * The idPaymentType
     * @var int|null
     */
    protected ?int $idPaymentType = null;
    /**
     * Constructor method for IdPaymentType
     * @uses IdPaymentType::setId1()
     * @uses IdPaymentType::setIdPaymentType()
     * @param int $id1
     * @param int $idPaymentType
     */
    public function __construct(?int $id1 = null, ?int $idPaymentType = null)
    {
        $this
            ->setId1($id1)
            ->setIdPaymentType($idPaymentType);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\IdPaymentType
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
     * Get idPaymentType value
     * @return int|null
     */
    public function getIdPaymentType(): ?int
    {
        return $this->idPaymentType;
    }
    /**
     * Set idPaymentType value
     * @param int $idPaymentType
     * @return \Maetva\ESeason\WebCampServices\StructType\IdPaymentType
     */
    public function setIdPaymentType(?int $idPaymentType = null): self
    {
        // validation for constraint: int
        if (!is_null($idPaymentType) && !(is_int($idPaymentType) || ctype_digit($idPaymentType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPaymentType, true), gettype($idPaymentType)), __LINE__);
        }
        $this->idPaymentType = $idPaymentType;
        
        return $this;
    }
}
