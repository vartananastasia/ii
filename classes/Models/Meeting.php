<?php

namespace ApiWeMeet\Entity;

use User;
use FriendGroup;
use Sex;
use ThemeType;
use Theme;
use Place;

/**
 * Class Meeting
 * @package ApiWeMeet\Entity
 */
class Meeting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Theme
     */
    private $theme;

    /**
     * @var User
     */
    private $user;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $time;

    /**
     * @var string
     */
    private $note;

    /**
     * @var Place
     */
    private $place;

    /**
     * @var Sex
     */
    private $sex;

    /**
     * @var FriendGroup
     */
    private $friendGroup;

    /**
     * @var ThemeType
     */
    private $themeType;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Theme $theme
     * @return $this
     */
    public function setTheme(Theme $theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return Theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
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
     * @param \DateTime $date
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Theme $time
     * @return $this
     */
    public function setTime(Theme $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param Place $place
     * @return $this
     */
    public function setPlace(Place $place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param Sex $sex
     * @return $this
     */
    public function setSex(Sex $sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return Sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param FriendGroup $friendGroup
     * @return $this
     */
    public function setFriendGroup(FriendGroup $friendGroup)
    {
        $this->friendGroup = $friendGroup;

        return $this;
    }

    /**
     * @return FriendGroup
     */
    public function getFriendGroup()
    {
        return $this->friendGroup;
    }

    /**
     * @param ThemeType $themeType
     * @return $this
     */
    public function setThemeType(ThemeType $themeType)
    {
        $this->themeType = $themeType;

        return $this;
    }

    /**
     * @return ThemeType
     */
    public function getThemeType()
    {
        return $this->themeType;
    }
}

