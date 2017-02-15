<?
namespace Feedback;

include('Feedback\DB\DataBaseExecute.php');
use Feedback\DataBaseExecute as DB;

class ConstructQuery extends DB
{
    public static function insert($fields, $table)
    {
        $in_to = '';
        $what =  '';
        foreach ($fields as $key=>$field){
            $in_to .= ', '.$key;
            $what .= ', "'.$field.'"';
        }
        $query = 'INSERT INTO '.$table.'(  ID '.$in_to.')VALUES(0'.$what.');';
        return $query;
    }

    public static function showColumns($table)
    {
        $query = 'show columns from '.$table.';';
        return $query;
    }

    public static function select($table)
    {
        $query = 'select * from '.$table.';';
        return $query;
    }

    public static function showTables()
    {
        $query = 'show tables;';
        return $query;
    }

    public static function where($query, $field, $value)
    {
        $query = str_replace(';', '', $query);
        $j = explode('_', $field);
        $field_spec = end($j);
        if ($field_spec == 'id'){
            $query = $query . ' where ' . $field . '=' . $value;
        }else {
            $query = $query . ' where ' . $field . '="' . $value . '"';
        }
        return $query.';';
    }
}