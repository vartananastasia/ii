<?php

namespace ApiWeMeet\Entity;

use ThemeGroup;

/**
 * Class Theme
 * @package ApiWeMeet\Entity
 */
class Theme
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
     * @var ThemeGroup
     */
    private $themeGroup;


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
     * @param ThemeGroup $themeGroup
     * @return $this
     */
    public function setThemeGroup(ThemeGroup $themeGroup)
    {
        $this->themeGroup = $themeGroup;

        return $this;
    }

    /**
     * @return ThemeGroup
     */
    public function getThemeGroup()
    {
        return $this->themeGroup;
    }
}

