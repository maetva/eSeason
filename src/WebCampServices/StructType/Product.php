<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product StructType
 * @subpackage Structs
 */
class Product extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The idProduct
     * @var \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null;
    /**
     * The idSite
     * @var int|null
     */
    protected ?int $idSite = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nameForStatistic
     * @var string|null
     */
    protected ?string $nameForStatistic = null;
    /**
     * The picture
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    protected ?array $picture = null;
    /**
     * The criterion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\Criterion[]
     */
    protected ?array $criterion = null;
    /**
     * The type
     * @var \Maetva\ESeason\WebCampServices\StructType\CategoryType|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CategoryType $type = null;
    /**
     * The surface
     * @var int|null
     */
    protected ?int $surface = null;
    /**
     * The room
     * @var int|null
     */
    protected ?int $room = null;
    /**
     * The bathroom
     * @var int|null
     */
    protected ?int $bathroom = null;
    /**
     * The capacity
     * @var int|null
     */
    protected ?int $capacity = null;
    /**
     * The rankCategory
     * @var int|null
     */
    protected ?int $rankCategory = null;
    /**
     * The categSelectPlace
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace|null
     */
    protected ?\Maetva\ESeason\WebCampServices\StructType\CategSelectPlace $categSelectPlace = null;
    /**
     * Constructor method for Product
     * @uses Product::setDescription()
     * @uses Product::setIdProduct()
     * @uses Product::setIdSite()
     * @uses Product::setName()
     * @uses Product::setNameForStatistic()
     * @uses Product::setPicture()
     * @uses Product::setCriterion()
     * @uses Product::setType()
     * @uses Product::setSurface()
     * @uses Product::setRoom()
     * @uses Product::setBathroom()
     * @uses Product::setCapacity()
     * @uses Product::setRankCategory()
     * @uses Product::setCategSelectPlace()
     * @param string $description
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @param int $idSite
     * @param string $name
     * @param string $nameForStatistic
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $picture
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion[] $criterion
     * @param \Maetva\ESeason\WebCampServices\StructType\CategoryType $type
     * @param int $surface
     * @param int $room
     * @param int $bathroom
     * @param int $capacity
     * @param int $rankCategory
     * @param \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace $categSelectPlace
     */
    public function __construct(?string $description = null, ?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null, ?int $idSite = null, ?string $name = null, ?string $nameForStatistic = null, ?array $picture = null, ?array $criterion = null, ?\Maetva\ESeason\WebCampServices\StructType\CategoryType $type = null, ?int $surface = null, ?int $room = null, ?int $bathroom = null, ?int $capacity = null, ?int $rankCategory = null, ?\Maetva\ESeason\WebCampServices\StructType\CategSelectPlace $categSelectPlace = null)
    {
        $this
            ->setDescription($description)
            ->setIdProduct($idProduct)
            ->setIdSite($idSite)
            ->setName($name)
            ->setNameForStatistic($nameForStatistic)
            ->setPicture($picture)
            ->setCriterion($criterion)
            ->setType($type)
            ->setSurface($surface)
            ->setRoom($room)
            ->setBathroom($bathroom)
            ->setCapacity($capacity)
            ->setRankCategory($rankCategory)
            ->setCategSelectPlace($categSelectPlace);
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
    /**
     * Get idProduct value
     * @return \Maetva\ESeason\WebCampServices\StructType\IdProduct|null
     */
    public function getIdProduct(): ?\Maetva\ESeason\WebCampServices\StructType\IdProduct
    {
        return $this->idProduct;
    }
    /**
     * Set idProduct value
     * @param \Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setIdProduct(?\Maetva\ESeason\WebCampServices\StructType\IdProduct $idProduct = null): self
    {
        $this->idProduct = $idProduct;
        
        return $this;
    }
    /**
     * Get idSite value
     * @return int|null
     */
    public function getIdSite(): ?int
    {
        return $this->idSite;
    }
    /**
     * Set idSite value
     * @param int $idSite
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setIdSite(?int $idSite = null): self
    {
        // validation for constraint: int
        if (!is_null($idSite) && !(is_int($idSite) || ctype_digit($idSite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSite, true), gettype($idSite)), __LINE__);
        }
        $this->idSite = $idSite;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
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
     * Get nameForStatistic value
     * @return string|null
     */
    public function getNameForStatistic(): ?string
    {
        return $this->nameForStatistic;
    }
    /**
     * Set nameForStatistic value
     * @param string $nameForStatistic
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setNameForStatistic(?string $nameForStatistic = null): self
    {
        // validation for constraint: string
        if (!is_null($nameForStatistic) && !is_string($nameForStatistic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameForStatistic, true), gettype($nameForStatistic)), __LINE__);
        }
        $this->nameForStatistic = $nameForStatistic;
        
        return $this;
    }
    /**
     * Get picture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[]
     */
    public function getPicture(): ?array
    {
        return isset($this->picture) ? $this->picture : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureForArrayConstraintsFromSetPicture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productPictureItem) {
            // validation for constraint: itemType
            if (!$productPictureItem instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
                $invalidValues[] = is_object($productPictureItem) ? get_class($productPictureItem) : sprintf('%s(%s)', gettype($productPictureItem), var_export($productPictureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picture property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set picture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType[] $picture
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setPicture(?array $picture = null): self
    {
        // validation for constraint: array
        if ('' !== ($pictureArrayErrorMessage = self::validatePictureForArrayConstraintsFromSetPicture($picture))) {
            throw new InvalidArgumentException($pictureArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($picture) && count($picture) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($picture)), __LINE__);
        }
        if (is_null($picture) || (is_array($picture) && empty($picture))) {
            unset($this->picture);
        } else {
            $this->picture = $picture;
        }
        
        return $this;
    }
    /**
     * Add item to picture value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function addToPicture(\Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType) {
            throw new InvalidArgumentException(sprintf('The picture property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\MultimediaObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->picture) && count($this->picture) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->picture)), __LINE__);
        }
        $this->picture[] = $item;
        
        return $this;
    }
    /**
     * Get criterion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion[]
     */
    public function getCriterion(): ?array
    {
        return isset($this->criterion) ? $this->criterion : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCriterion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriterion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriterionForArrayConstraintsFromSetCriterion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productCriterionItem) {
            // validation for constraint: itemType
            if (!$productCriterionItem instanceof \Maetva\ESeason\WebCampServices\StructType\Criterion) {
                $invalidValues[] = is_object($productCriterionItem) ? get_class($productCriterionItem) : sprintf('%s(%s)', gettype($productCriterionItem), var_export($productCriterionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The criterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Criterion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set criterion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion[] $criterion
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setCriterion(?array $criterion = null): self
    {
        // validation for constraint: array
        if ('' !== ($criterionArrayErrorMessage = self::validateCriterionForArrayConstraintsFromSetCriterion($criterion))) {
            throw new InvalidArgumentException($criterionArrayErrorMessage, __LINE__);
        }
        if (is_null($criterion) || (is_array($criterion) && empty($criterion))) {
            unset($this->criterion);
        } else {
            $this->criterion = $criterion;
        }
        
        return $this;
    }
    /**
     * Add item to criterion value
     * @throws InvalidArgumentException
     * @param \Maetva\ESeason\WebCampServices\StructType\Criterion $item
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function addToCriterion(\Maetva\ESeason\WebCampServices\StructType\Criterion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\ESeason\WebCampServices\StructType\Criterion) {
            throw new InvalidArgumentException(sprintf('The criterion property can only contain items of type \Maetva\ESeason\WebCampServices\StructType\Criterion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->criterion[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return \Maetva\ESeason\WebCampServices\StructType\CategoryType|null
     */
    public function getType(): ?\Maetva\ESeason\WebCampServices\StructType\CategoryType
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param \Maetva\ESeason\WebCampServices\StructType\CategoryType $type
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setType(?\Maetva\ESeason\WebCampServices\StructType\CategoryType $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get surface value
     * @return int|null
     */
    public function getSurface(): ?int
    {
        return $this->surface;
    }
    /**
     * Set surface value
     * @param int $surface
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setSurface(?int $surface = null): self
    {
        // validation for constraint: int
        if (!is_null($surface) && !(is_int($surface) || ctype_digit($surface))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($surface, true), gettype($surface)), __LINE__);
        }
        $this->surface = $surface;
        
        return $this;
    }
    /**
     * Get room value
     * @return int|null
     */
    public function getRoom(): ?int
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param int $room
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setRoom(?int $room = null): self
    {
        // validation for constraint: int
        if (!is_null($room) && !(is_int($room) || ctype_digit($room))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($room, true), gettype($room)), __LINE__);
        }
        $this->room = $room;
        
        return $this;
    }
    /**
     * Get bathroom value
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathroom;
    }
    /**
     * Set bathroom value
     * @param int $bathroom
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setBathroom(?int $bathroom = null): self
    {
        // validation for constraint: int
        if (!is_null($bathroom) && !(is_int($bathroom) || ctype_digit($bathroom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bathroom, true), gettype($bathroom)), __LINE__);
        }
        $this->bathroom = $bathroom;
        
        return $this;
    }
    /**
     * Get capacity value
     * @return int|null
     */
    public function getCapacity(): ?int
    {
        return $this->capacity;
    }
    /**
     * Set capacity value
     * @param int $capacity
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setCapacity(?int $capacity = null): self
    {
        // validation for constraint: int
        if (!is_null($capacity) && !(is_int($capacity) || ctype_digit($capacity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
        }
        $this->capacity = $capacity;
        
        return $this;
    }
    /**
     * Get rankCategory value
     * @return int|null
     */
    public function getRankCategory(): ?int
    {
        return $this->rankCategory;
    }
    /**
     * Set rankCategory value
     * @param int $rankCategory
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setRankCategory(?int $rankCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($rankCategory) && !(is_int($rankCategory) || ctype_digit($rankCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rankCategory, true), gettype($rankCategory)), __LINE__);
        }
        $this->rankCategory = $rankCategory;
        
        return $this;
    }
    /**
     * Get categSelectPlace value
     * @return \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace|null
     */
    public function getCategSelectPlace(): ?\Maetva\ESeason\WebCampServices\StructType\CategSelectPlace
    {
        return $this->categSelectPlace;
    }
    /**
     * Set categSelectPlace value
     * @param \Maetva\ESeason\WebCampServices\StructType\CategSelectPlace $categSelectPlace
     * @return \Maetva\ESeason\WebCampServices\StructType\Product
     */
    public function setCategSelectPlace(?\Maetva\ESeason\WebCampServices\StructType\CategSelectPlace $categSelectPlace = null): self
    {
        $this->categSelectPlace = $categSelectPlace;
        
        return $this;
    }
}
