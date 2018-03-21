<?php

namespace ApiWeMeet\Entity;

/**
 * Class UserMeeting
 * @package ApiWeMeet\Entity
 */
class UserMeeting
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
     * @var Meeting
     */
    private $meeting;


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
     * @param Meeting $meeting
     * @return $this
     */
    public function setMeeting(Meeting $meeting)
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * @return Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }
}

