<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace MSBios\Geo\Resource\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use MSBios\I18n\Doctrine\Entity\ObjectTranslation;

/**
 * Class RegionTranslation
 * @package MSBios\Geo\Resource\Doctrine\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="geo_t_region_translations",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="lookup_unique_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class RegionTranslation extends ObjectTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}
