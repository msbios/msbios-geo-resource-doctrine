<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */
namespace MSBios\Geo\Resource\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Doctrine\Entity as DefaultEntity;
use MSBios\Doctrine\IdentifierAwareTrait;

/**
 * Class Entity
 *
 * @package MSBios\Geo\Resource\Doctrine
 * @ORM\MappedSuperclass
 */
abstract class Entity extends DefaultEntity
{
    use IdentifierAwareTrait;
}
