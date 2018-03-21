<?php

namespace ApiWeMeet\Entity;

use Meeting;
use User;

/**
 * Class Chat
 * @package ApiWeMeet\Entity
 */
class Chat
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
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $note;

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
     * @return obj User
     */
    public function getUser()
    {
        return $this->user;
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
     * @param Meeting $meeting
     * @return $this
     */
    public function setMeeting(Meeting $meeting)
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * @return obj Meeting
     */
    public function getMeeting()
    {
        return $this->meeting;
    }
}

