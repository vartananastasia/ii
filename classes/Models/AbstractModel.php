<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 10.08.2018
 * Time: 11:23
 */

namespace Models;

use BaseClasses\DB\ConstructQuery;

abstract class AbstractModel
{
    const TABLE_NAME = '';

    public static function get($id)
    {
        $dataBaseRequest = new ConstructQuery();
        $model = $dataBaseRequest->select(self::getTableName())->where('id', $id)->execute();
        return $model;
    }

    abstract function getThis();

    public function add()
    {
    }

    public function delete()
    {
    }

    public function update()
    {
    }

    abstract public static function migrate();

    public static function getTableName()
    {
        return static::TABLE_NAME;
    }
}