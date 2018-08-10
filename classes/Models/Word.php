<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 10.08.2018
 * Time: 11:25
 */

class Word extends AbstractModel
{
    private $id;
    private $name;

    const TABLE_NAME = 'word';

    public static function migrate()
    {
        return [
            'id' => ['type' => 'int(11)', 'is' => 'pk'],
            'name' => ['type' => 'text'],
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}