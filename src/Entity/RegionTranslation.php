<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace OpenPower\Resource\Entity;

use Doctrine\ORM\Mapping as ORM;
use MSBios\I18n\Doctrine\Entity\ObjectTranslation;

/**
 * Class RegionTranslation
 * @package OpenPower\Resource\Entity
 * @ORM\Entity
 * @ORM\Table(name="ppw_t_region_translations",
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
