<?php

namespace MSBios\Geo\Resource\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use MSBios\Geo\Resource\Doctrine\Entity;
use MSBios\I18n\Doctrine\Entity\EntityTranslationTrait;
use MSBios\Resource\Doctrine\RowStatusableAwareInterface;
use MSBios\Resource\Doctrine\RowStatusableAwareTrait;

/**
 * Class Region
 * @package MSBios\Geo\Resource\Doctrine\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="geo_t_regions",
 *     indexes={
 *          @ORM\Index(name="rowstatus", columns={"rowstatus"})}
 *     )
 * @Gedmo\TranslationEntity(class="RegionTranslation")
 */
class Region extends Entity implements RowStatusableAwareInterface
{
    use RowStatusableAwareTrait;
    use EntityTranslationTrait;

    /**
     * @var string Название
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     * @Gedmo\Translatable
     */
    private $name;

    /**
     * @var string Название
     * @ORM\Column(name="priority", type="integer", length=2, options={"default":0})
     */
    private $priority;

    /**
     * @ORM\OneToMany(
     *   targetEntity="RegionTranslation",
     *   mappedBy="object",
     *   cascade={"persist", "remove"}
     * )
     */
    private $translations;

    public function init()
    {
        $this->translations = new ArrayCollection;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
}
