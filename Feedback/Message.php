<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;

class Message
{
    public function __construct($fields, $valid)
    {
        $download = true;
        foreach ($fields as $key => $field) {
            if (count($valid[$key])>0) {
                $write = true;
                foreach ($valid[$key] as $validation) {
                    if (!Validation::$validation($field)){
                        $write = false;
                    }
                }
                if ($write) {
                    $this->$key = $field;
                }else{
                    $download = false;
                }
            }
        }
        if ($download) {
            $this->download_message($fields);
        }else{
            echo 'Несоответствие данных';
        }
    }

    private function download_message($fields)
    {
        $db_execution = new CQ();
        $mess = $db_execution->execute(CQ::insert($fields, $GLOBALS['db_table']));
        return $mess;
    }
}