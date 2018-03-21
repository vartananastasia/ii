<?
namespace BaseClasses\DB;

class DataBaseExecute
{
    private $connect;

    public function __construct()
    {
        try {
            $this->connect = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo 'Unable to connect: ' . $e->getMessage();
        }
    }

    public function execute($query)
    {
        $execution = $this->connect->query($query);
        self::shat($this->connect);
        return $execution;
    }

    private static function shat(\PDO $db_conn)
    {
        $db_conn = null;  //TODO: close connection
    }
}