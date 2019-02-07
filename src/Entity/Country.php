<?php

namespace MSBios\Geo\Resource\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use MSBios\I18n\Doctrine\Entity\EntityTranslationTrait;
use MSBios\Resource\Doctrine\RowStatusableAwareInterface;
use MSBios\Resource\Doctrine\RowStatusableAwareTrait;
use OpenPower\Resource\Entity;

/**
 * Class Country
 * @package MSBios\Geo\Resource\Doctrine\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="geo_t_country",
 *     indexes={
 *          @ORM\Index(name="rowstatus", columns={"rowstatus"})}
 *     )
 * @Gedmo\TranslationEntity(class="CountryTranslation")
 */
class Country extends Entity implements RowStatusableAwareInterface
{
    use RowStatusableAwareTrait;
    use EntityTranslationTrait;

    /**
     * @var string
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     */
    private $code;

    /**
     * @var string Название
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     * @Gedmo\Translatable
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(name="phonecode", type="integer", length=5, nullable=false)
     */
    private $phonecode;

    /**
     * Country constructor.
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPhonecode()
    {
        return $this->phonecode;
    }

    /**
     * @param $phonecode
     * @return $this
     */
    public function setPhonecode($phonecode)
    {
        $this->phonecode = $phonecode;
        return $this;
    }
}