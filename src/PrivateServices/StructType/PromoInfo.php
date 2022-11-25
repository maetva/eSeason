<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromoInfo StructType
 * @subpackage Structs
 */
class PromoInfo extends AbstractStructBase
{
    /**
     * The totalAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var float
     */
    protected float $totalAmount;
    /**
     * The basicAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var float
     */
    protected float $basicAmount;
    /**
     * The promotion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Maetva\ESeason\PrivateServices\StructType\Promo[]
     */
    protected array $promotion;
    /**
     * Constructor method for PromoInfo
     * @uses PromoInfo::setTotalAmount()
     * @uses PromoInfo::setBasicAmount()
     * @uses PromoInfo::setPromotion()
     * @param float $totalAmount
     * @param float $basicAmount
     * @param \Maetva\ESeason\PrivateServices\StructType\Promo[] $promotion
     */
    public function __construct(float $totalAmount, float $basicAmount, array $promotion)
    {
        $this
            ->setTotalAmount($totalAmount)
            ->setBasicAmount($basicAmount)
            ->setPromotion($promotion);
    }
    /**
     * Get totalAmount value
     * @return float
     */
    public function getTotalAmount(): float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Maetva\ESeason\PrivateServices\StructType\PromoInfo
     */
    public function setTotalAmount(float $totalAmount): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get basicAmount value
     * @return float
     */
    public function getBasicAmount(): float
    {
        return $this->basicAmount;
    }
    /**
     * Set basicAmount value
     * @param float $basicAmount
     * @return \Maetva\ESeason\PrivateServices\StructType\PromoInfo
     */
    public function setBasicAmount(float $basicAmount): self
    {
        // validation for constraint: float
        if (!is_null($basicAmount) && !(is_float($basicAmount) || is_numeric($basicAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basicAmount, true), gettype($basicAmount)), __LINE__);
        }
        $this->basicAmount = $basicAmount;
        
        return $this;
    }
    /**
     * Get promotion value
     * @return \Maetva\ESeason\PrivateServices\StructType\Promo[]
     */
    public function getPromotion(): array
    {
        return $this->promotion;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionForArrayConstraintsFromSetPromotion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $promoInfoPromotionItem) {
            // validation for constraint: itemType
            if (!$promoInfoPromotionItem instanceof \Maetva\ESeason\PrivateServices\StructType\Promo) {
                $invalidValues[] = is_object($promoInfoPromotionItem) ? get_class($promoInfoPromotionItem) : sprintf('%s(%s)', gettype($promoInfoPromotionItem), var_export($promoInfoPromotionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The promotion property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\Promo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set promotion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\Promo[] $promotion
     * @return \Maetva\ESeason\PrivateServices\StructType\PromoInfo
     */
    public function setPromotion(array $promotion): self
    {
        // validation for constraint: array
        if ('' !== ($promotionArrayErrorMessage = self::validatePromotionForArrayConstraintsFromSetPromotion($promotion))) {
            throw new InvalidArgumentException($promotionArrayErrorMessage, __LINE__);
        }
        $this->promotion = $promotion;
        
        return $this;
    }
    /**
     * Add item to promotion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\PrivateServices\StructType\Promo $item
     * @return \Maetva\ESeason\PrivateServices\StructType\PromoInfo
     */
    public function addToPromotion(\Maetva\ESeason\PrivateServices\StructType\Promo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\PrivateServices\StructType\Promo) {
            throw new InvalidArgumentException(sprintf('The promotion property can only contain items of type \Maetva\ESeason\PrivateServices\StructType\Promo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->promotion[] = $item;
        
        return $this;
    }
}
