<?php

namespace MSBios\Geo\Resource\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use MSBios\Geo\Resource\Doctrine\Entity;
use MSBios\Resource\Doctrine\RowStatusableAwareInterface;
use MSBios\Resource\Doctrine\RowStatusableAwareTrait;
use MSBios\Resource\Doctrine\TimestampableAwareInterface;
use MSBios\Resource\Doctrine\TimestampableAwareTrait;

/**
 * Class ZipCode
 * @package MSBios\Geo\Resource\Doctrine\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="geo_t_zip_codes",
 *     indexes={
 *          @ORM\Index(name="rowstatus", columns={"rowstatus"})
 *     },
 *     uniqueConstraints={
 *          @ORM\UniqueConstraint(name="zipcode_unique",
 *             columns={"code"})
 *     }
 * )
 */
class ZipCode extends Entity implements
    ZipCodeInterface,
    TimestampableAwareInterface,
    RowStatusableAwareInterface
{
    use TimestampableAwareTrait;
    use RowStatusableAwareTrait;

    /**
     * @var string
     * @ORM\Column(name="code", type="string", length=250, nullable=false)
     */
    private $code;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @var Region
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(name="regionid", referencedColumnName="id", onDelete="CASCADE")
     */
    private $region;

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param $region
     * @return $this
     */
    public function setRegion(Region $region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @var string
     * @ORM\Column(name="area", type="string", length=250, nullable=false)
     */
    private $area;

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param string $area
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @var string
     * @ORM\Column(name="city", type="string", length=250, nullable=false)
     */
    private $city;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}
