<?php

namespace ApiWeMeet\Entity;

use FriendGroup;
use User;

/**
 * Class UserFriend
 * @package ApiWeMeet\Entity
 */
class UserFriend
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
     * @var FriendGroup
     */
    private $friendGroup;


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
    public function setFriend(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User
     */
    public function getFriend()
    {
        return $this->user;
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
}

