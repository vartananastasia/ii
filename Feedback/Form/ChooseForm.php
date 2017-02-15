<?
namespace Feedback;

include('Feedback\ConstructQuery.php');
use Feedback\ConstructQuery as CQ;
include('form-vau/settings.php');

class ChooseForm
{
   public static function allForms(){

       $db_execution = new CQ();
       $fields = $db_execution->execute(CQ::showTables());
       while ($row = $fields->fetch())
       {
           if(substr_count($row[0], 'form_')){
               $data[] = $row[0];
           }
       }
       return $data;
   }
}