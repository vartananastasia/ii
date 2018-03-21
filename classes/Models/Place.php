<?php

namespace ApiWeMeet\Entity;

/**
 * Class Place
 * @package ApiWeMeet\Entity
 */
class Place
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $coordinates;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return $this
     */
    public function getCoordinates()
    {
        return $this;
    }
}

