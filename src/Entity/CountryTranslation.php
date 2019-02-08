<?php

namespace OpenPower\Resource\Entity;

use Doctrine\ORM\Mapping as ORM;
use MSBios\I18n\Doctrine\Entity\ObjectTranslation;

/**
 * Class CountryTranslation
 * @package OpenPower\Resource\Entity
 * @ORM\Entity
 * @ORM\Table(name="geo_t_country_translations",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="lookup_unique_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class CountryTranslation extends ObjectTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}
