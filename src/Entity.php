<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */
namespace OpenPower\Resource;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Resource\Doctrine\Entity as DefaultEntity;

/**
 * Class Entity
 * @package OpenPower\Resource
 * @ORM\MappedSuperclass
 */
abstract class Entity extends DefaultEntity
{
    // ...
}
