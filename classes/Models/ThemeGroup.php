<?php

namespace ApiWeMeet\Entity;

use Color;

/**
 * Class ThemeGroup
 * @package ApiWeMeet\Entity
 */
class ThemeGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Color
     */
    private $color;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Color $color
     * @return $this
     */
    public function setColor(Color $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }
}

