<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 10.08.2018
 * Time: 11:36
 */
namespace Models;

class Phrase extends AbstractModel
{
    private $id;
    private $userId;
    private $text;

    const TABLE_NAME = 'phrase';

    public static function migrate()
    {
        return [
            'id' => ['type' => 'int(11)', 'is' => 'pk'],
            'user_id' => ['type' => 'int(11)', 'is' => 'fk'],
            'text' => ['type' => 'text']
        ];
    }

    public function getThis()
    {
        // TODO: Implement getThis() method.
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getText()
    {
        return $this->text;
    }
}