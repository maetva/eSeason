<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplementFilled StructType
 * @subpackage Structs
 */
class SupplementFilled extends AbstractStructBase
{
    /**
     * The idSupp
     * @var int|null
     */
    protected ?int $idSupp = null;
    /**
     * The number
     * @var int|null
     */
    protected ?int $number = null;
    /**
     * The totalPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * Constructor method for SupplementFilled
     * @uses SupplementFilled::setIdSupp()
     * @uses SupplementFilled::setNumber()
     * @uses SupplementFilled::setTotalPrice()
     * @uses SupplementFilled::setCode()
     * @param int $idSupp
     * @param int $number
     * @param float $totalPrice
     * @param string $code
     */
    public function __construct(?int $idSupp = null, ?int $number = null, ?float $totalPrice = null, ?string $code = null)
    {
        $this
            ->setIdSupp($idSupp)
            ->setNumber($number)
            ->setTotalPrice($totalPrice)
            ->setCode($code);
    }
    /**
     * Get idSupp value
     * @return int|null
     */
    public function getIdSupp(): ?int
    {
        return $this->idSupp;
    }
    /**
     * Set idSupp value
     * @param int $idSupp
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled
     */
    public function setIdSupp(?int $idSupp = null): self
    {
        // validation for constraint: int
        if (!is_null($idSupp) && !(is_int($idSupp) || ctype_digit($idSupp))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSupp, true), gettype($idSupp)), __LINE__);
        }
        $this->idSupp = $idSupp;
        
        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled
     */
    public function setNumber(?int $number = null): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Maetva\ESeason\WebCampServices\StructType\SupplementFilled
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
