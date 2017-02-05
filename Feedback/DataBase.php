<?
namespace Feedback;

include 'form-vau/settings.php';

class DataBase
{
    public static function download_message($name, $email, $message)
    {
        $query = 'INSERT INTO message(  ID ,name ,email ,message)VALUES(0, "'.$name.'", "'.$email.'", "'.$message.'");';
        $sth = self::set_query($query);
        $mess = $sth[1];
        self::shat($sth[0]);
        return $mess;
    }

    private static function set_query($query)
    {
        $dbh = self::conn();
        return [$dbh, $dbh->query($query)];
    }

    private static function conn()
    {
        $dbh = new \PDO('mysql:host='.$GLOBALS['db_host'].';dbname='.$GLOBALS['db_name'], $GLOBALS['db_user'], $GLOBALS['db_password']);
        return $dbh;
    }

    private static function shat(\PDO $db_conn)
    {
        $db_conn = null;
    }
}