<?
namespace Feedback;

include 'form-vau/settings.php';

class DataBaseExecute
{
    private $connect;

    public function __construct()
    {
        $this->connect = new \PDO('mysql:host='.$GLOBALS['db_host'].';dbname='.$GLOBALS['db_name'], $GLOBALS['db_user'], $GLOBALS['db_password']);
    }

    public function execute($query)
    {
        $execution = $this->connect->query($query);
        self::shat($this->connect);
        return $execution;
    }

    private static function shat(\PDO $db_conn)
    {
        $db_conn = null;
    }
}