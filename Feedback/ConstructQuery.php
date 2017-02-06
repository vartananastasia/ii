<?
namespace Feedback;

include('Feedback\DataBaseExecute.php');
use Feedback\DataBaseExecute as DB;

class ConstructQuery extends DB
{
    public static function insert($fields)
    {
        $in_to = '';
        $what =  '';
        foreach ($fields as $key=>$field){
            $in_to .= ', '.$key;
            $what .= ', "'.$field.'"';
        }
        $query = 'INSERT INTO message(  ID '.$in_to.')VALUES(0'.$what.');';
        return $query;
    }

    public static function showColumns($table)
    {
        $query = 'show columns from '.$table.';';
        return $query;
    }
}