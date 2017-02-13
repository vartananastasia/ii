<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;
include('form-vau/settings.php');

class FormCreate
{
    private $fields = [];
    public $html = '';

    public function __construct()
    {
        $this->fields = self::getFields();
        $this->html = self::constructForm($this->fields);
    }

    private static function getFields()
    {
        $db_execution = new CQ();
        $fields = $db_execution->execute(CQ::showColumns($GLOBALS['db_table']));
        while ($row = $fields->fetch())
        {
            $data[$row['Field']] = $row['Type'];
        }
        return $data;
    }

    private static function constructForm($data)
    {
        $form = '';
        foreach ($data as $key => $field)
        {
            if($key!='ID') {
                $form .= '<input type="text" name="' . $key . '" value="default">';
            }
        }
        return $form;
    }
}