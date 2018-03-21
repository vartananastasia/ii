<?php

namespace ApiWeMeet\Entity;

/**
 * Class Color
 * @package ApiWeMeet\Entity
 */
class Color
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}

