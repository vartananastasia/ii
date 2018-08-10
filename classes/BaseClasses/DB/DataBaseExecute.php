<?
namespace BaseClasses\DB;

class DataBaseExecute
{
    private $_connect;
    protected $query;

    public function __construct()
    {
        try {
            $this->_connect = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            echo 'Unable to connect: ' . $e->getMessage();
        }
        $this->query = '';
    }

    public function execute()
    {
        $execution = $this->_connect->query($this->query);
        $execution->execute();
        $result = $execution->fetchAll();
        self::shat($this->_connect);
        return $result;
    }

    private static function shat(\PDO $db_conn)
    {
        $db_conn = null;  //TODO: close connection
    }
}