<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;
include('form-vau/settings.php');

class Input
{
    private $name;
    private $form;
    private $type;
    private $validation = [];
    private $html;

    public function __construct()
    {
        $this->name = 'Имя';
        $this->form = 'feedback';
        $this->type = 'text';
        $this->validation = ['not_null'];

        switch ($this->type){
            case 'textarea':
                $this->html = self::htmlTextarea($this->name);
                break;
            case 'text':
                $this->html = self::htmlText($this->name);
                break;
            case 'checkbox':
                $this->html = self::htmlCheckbox($this->name);
                break;
            case 'radio':
                $this->html = self::htmlRadio($this->name);
                break;
        }
    }

    public function __get($field){
        switch ($field){
            case 'name':
                return $this->name;
                break;
            case 'form':
                return $this->form;
                break;
            case 'type':
                return $this->type;
                break;
            case 'validation':
                return $this->validation;
                break;
            case 'html':
                return $this->html;
                break;
        }
    }

    private function htmlTextarea($name){
        return "<textarea name='{$name}'></textarea>";
    }

    private function htmlText($name){
        return "<input type='text' name='{$name}'>";
    }

    private function htmlCheckbox(){
    }

    private function htmlRadio(){
    }
}