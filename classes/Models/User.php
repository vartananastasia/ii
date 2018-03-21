<?php

namespace ApiWeMeet\Entity;

use Sex;
use UserGroup;
use Img;

/**
 * Class User
 * @package ApiWeMeet\Entity
 */
class User
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
     * @var string
     */
    private $secondName;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var Sex
     */
    private $sex;

    /**
     * @var Img
     */
    private $img;

    /**
     * @var UserGroup
     */
    private $userGroup;


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
     * @param $secondName
     * @return $this
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @param $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param Img $img
     * @return $this
     */
    public function setImg(Img $img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return obj Img
     */
    public function getImg()
    {
        return $this->img;
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
     * @return obj Sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param UserGroup $userGroup
     * @return $this
     */
    public function setUserGroup(UserGroup $userGroup)
    {
        $this->userGroupId = $userGroup;

        return $this;
    }

    /**
     * @return obj UserGroup
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }
}

