<?php

use Registry as Reg;
use Template as Temp;
use BaseClasses\DB\ConstructQuery as CQ;

Class Controller_Index Extends Controller_Base
{
    function index()
    {
        $db_execution = new BaseClasses\DB\ConstructQuery();
        $tables = $db_execution->execute(CQ::showTables());
        $columns = $db_execution->execute(CQ::showColumns($tables->fetch()[0]));

        $template = new Temp(new Reg);
        $template->set('tables', $tables->fetch());

        $template->show('templates/index.html');
    }
}