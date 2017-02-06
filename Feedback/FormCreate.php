<?
namespace Feedback;

include('Feedback\DataBaseExecute.php');
use Feedback\DataBaseExecute as DB;
include('form-vau/settings.php');

class FormCreate
{
    public static function create()
    {
        $db_execution = new DB();
        $query = 'show columns from '.$GLOBALS['db_table'].';';
        $fields = $db_execution->execute($query);
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