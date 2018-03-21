<?php

namespace ApiWeMeet\Entity;

use Permition;
use UserGroup;

/**
 * Class UserGroupPermission
 * @package ApiWeMeet\Entity
 */
class UserGroupPermission
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var UserGroup
     */
    private $userGroup;

    /**
     * @var Permition
     */
    private $permission;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param UserGroup $userGroup
     * @return $this
     */
    public function setUserGroup(UserGroup $userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * @return UserGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * @param Permition $permission
     * @return $this
     */
    public function setPermission(Permition $permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * @return Permition
     */
    public function getPermission()
    {
        return $this->permission;
    }
}

