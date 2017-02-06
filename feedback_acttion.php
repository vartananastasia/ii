<?
require 'Feedback\Message.php';
include('Feedback\Validation.php');
use Feedback\Message as Mes;
use Feedback\Validation as Valid;

$mes = new Mes($_POST, Valid::column_valid());