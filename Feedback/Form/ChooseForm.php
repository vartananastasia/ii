<?
namespace Feedback;

include('Feedback\DB\ConstructQuery.php');
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
       foreach ($data as $item){
           echo '<a href="form.php?form='.$item.'">'.$item.'</a><br>';
       }

       $db_execution = new CQ();
       $fields = $db_execution->execute(CQ::CreateTable('newtable'));

       return true;
   }
}