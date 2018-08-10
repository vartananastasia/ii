<?php

use Registry as Reg;
use Template as Temp;

Class Controller_Index Extends Controller_Base
{
    function index()
    {
        $dialog = \Models\Dialog::get(1);
        BaseFunctions::gg($dialog);
        $phrase = \Models\Phrase::get(1);
        BaseFunctions::gg($phrase);
//        while ($d = $dialog->fetch()){
//            echo '<pre>';
//            print_r($d);
//            echo '</pre>';
//        }
//        $template = new Temp(new Reg);
//        $template->set('tables', $dialog);
//
//        $template->show('templates/index.html');
    }
}