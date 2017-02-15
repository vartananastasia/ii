<?
namespace Feedback;

use Feedback\ConstructQuery as CQ;

class Message
{
    private $fields = [];

    public function __construct($fields,Form $form)
    {
        $this->fields = $fields;
        $valid = $form->getInputValidation();
        $download = true;

        foreach ($this->fields as $key => $field) {
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
            $table = 'form_'.$form->getName();
            $this->download_message($fields, $table);
        }else{
            echo 'Несоответствие данных';
        }
    }

    private function download_message($fields, $table)
    {
        $db_execution = new CQ();
        $mess = $db_execution->execute(CQ::insert($fields, $table));
        return $mess;
    }
}