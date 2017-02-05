<?
include 'Feedback\DataBase.php';
use Feedback\DataBase as DB;

DB::download_message($_POST['name'], $_POST['email'], $_POST['message']);