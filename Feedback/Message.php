<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;

class Message
{
    public function __construct($fields)
    {
        foreach ($fields as $key => $field) {
            $this->$key = $field;
        }
        $this->download_message($fields);
    }

    private function download_message($fields)
    {
        $db_execution = new CQ();
        $mess = $db_execution->execute(CQ::insert($fields));
        return $mess;
    }
}