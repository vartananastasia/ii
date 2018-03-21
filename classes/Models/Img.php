<?php

namespace ApiWeMeet\Entity;

/**
 * Class Img
 * @package ApiWeMeet\Entity
 */
class Img
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $link;


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
    public function setLink($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->name;
    }
}

