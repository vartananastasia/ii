<?php

namespace ApiWeMeet\Entity;

/**
 * Class UserTheme
 * @package ApiWeMeet\Entity
 */
class UserTheme
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Theme
     */
    private $theme;

    /**
     * @var boolean
     */
    private $notify;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @param $notify
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNotify()
    {
        return $this->notify;
    }
}

