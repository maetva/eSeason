<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCpgCancel StructType
 * @subpackage Structs
 */
class RequestCpgCancel extends AbstractStructBase
{
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
     * The idElement
     * @var string|null
     */
    protected ?string $idElement = null;
    /**
     * The element
     * @var string|null
     */
    protected ?string $element = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * Constructor method for RequestCpgCancel
     * @uses RequestCpgCancel::setIdUser()
     * @uses RequestCpgCancel::setPassword()
     * @uses RequestCpgCancel::setIdElement()
     * @uses RequestCpgCancel::setElement()
     * @uses RequestCpgCancel::setComment()
     * @param string $idUser
     * @param string $password
     * @param string $idElement
     * @param string $element
     * @param string $comment
     */
    public function __construct(?string $idUser = null, ?string $password = null, ?string $idElement = null, ?string $element = null, ?string $comment = null)
    {
        $this
            ->setIdUser($idUser)
            ->setPassword($password)
            ->setIdElement($idElement)
            ->setElement($element)
            ->setComment($comment);
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel
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
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel
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
     * Get idElement value
     * @return string|null
     */
    public function getIdElement(): ?string
    {
        return $this->idElement;
    }
    /**
     * Set idElement value
     * @param string $idElement
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel
     */
    public function setIdElement(?string $idElement = null): self
    {
        // validation for constraint: string
        if (!is_null($idElement) && !is_string($idElement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idElement, true), gettype($idElement)), __LINE__);
        }
        $this->idElement = $idElement;
        
        return $this;
    }
    /**
     * Get element value
     * @return string|null
     */
    public function getElement(): ?string
    {
        return $this->element;
    }
    /**
     * Set element value
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WBC_Element::valueIsValid()
     * @uses \Maetva\ESeason\WebCampServices\EnumType\WBC_Element::getValidValues()
     * @throws InvalidArgumentException
     * @param string $element
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel
     */
    public function setElement(?string $element = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\ESeason\WebCampServices\EnumType\WBC_Element::valueIsValid($element)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\ESeason\WebCampServices\EnumType\WBC_Element', is_array($element) ? implode(', ', $element) : var_export($element, true), implode(', ', \Maetva\ESeason\WebCampServices\EnumType\WBC_Element::getValidValues())), __LINE__);
        }
        $this->element = $element;
        
        return $this;
    }
    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->comment) ? $this->comment : null;
    }
    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }
        
        return $this;
    }
}
