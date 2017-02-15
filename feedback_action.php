<?
require 'Feedback\Message.php';
include('Feedback\Form\Form.php');
use Feedback\Message as Mes;

$message = new Mes($_POST, new Feedback\Form($_GET['form']));