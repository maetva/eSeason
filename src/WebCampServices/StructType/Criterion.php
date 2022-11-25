<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Criterion StructType
 * @subpackage Structs
 */
class Criterion extends AbstractStructBase
{
    /**
     * The idCriterion
     * @var int|null
     */
    protected ?int $idCriterion = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The family
     * @var string|null
     */
    protected ?string $family = null;
    /**
     * The rank
     * @var int|null
     */
    protected ?int $rank = null;
    /**
     * The showForm
     * @var bool|null
     */
    protected ?bool $showForm = null;
    /**
     * Constructor method for Criterion
     * @uses Criterion::setIdCriterion()
     * @uses Criterion::setName()
     * @uses Criterion::setFamily()
     * @uses Criterion::setRank()
     * @uses Criterion::setShowForm()
     * @param int $idCriterion
     * @param string $name
     * @param string $family
     * @param int $rank
     * @param bool $showForm
     */
    public function __construct(?int $idCriterion = null, ?string $name = null, ?string $family = null, ?int $rank = null, ?bool $showForm = null)
    {
        $this
            ->setIdCriterion($idCriterion)
            ->setName($name)
            ->setFamily($family)
            ->setRank($rank)
            ->setShowForm($showForm);
    }
    /**
     * Get idCriterion value
     * @return int|null
     */
    public function getIdCriterion(): ?int
    {
        return $this->idCriterion;
    }
    /**
     * Set idCriterion value
     * @param int $idCriterion
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion
     */
    public function setIdCriterion(?int $idCriterion = null): self
    {
        // validation for constraint: int
        if (!is_null($idCriterion) && !(is_int($idCriterion) || ctype_digit($idCriterion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idCriterion, true), gettype($idCriterion)), __LINE__);
        }
        $this->idCriterion = $idCriterion;
        
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
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion
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
     * Get family value
     * @return string|null
     */
    public function getFamily(): ?string
    {
        return $this->family;
    }
    /**
     * Set family value
     * @param string $family
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion
     */
    public function setFamily(?string $family = null): self
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family, true), gettype($family)), __LINE__);
        }
        $this->family = $family;
        
        return $this;
    }
    /**
     * Get rank value
     * @return int|null
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }
    /**
     * Set rank value
     * @param int $rank
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion
     */
    public function setRank(?int $rank = null): self
    {
        // validation for constraint: int
        if (!is_null($rank) && !(is_int($rank) || ctype_digit($rank))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->rank = $rank;
        
        return $this;
    }
    /**
     * Get showForm value
     * @return bool|null
     */
    public function getShowForm(): ?bool
    {
        return $this->showForm;
    }
    /**
     * Set showForm value
     * @param bool $showForm
     * @return \Maetva\ESeason\WebCampServices\StructType\Criterion
     */
    public function setShowForm(?bool $showForm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showForm) && !is_bool($showForm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showForm, true), gettype($showForm)), __LINE__);
        }
        $this->showForm = $showForm;
        
        return $this;
    }
}
