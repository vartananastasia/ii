<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;
include('form-vau/settings.php');

class FormCreate
{
    public static function create()
    {
        $db_execution = new CQ();
        $fields = $db_execution->execute(CQ::showColumns($GLOBALS['db_table']));
        while ($row = $fields->fetch())
        {
            $data[$row['Field']] = $row['Type'];
        }
        return self::constructForm($data);
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