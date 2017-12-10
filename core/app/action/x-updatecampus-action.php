<?php
$var1= 'name';
    
    if ('name'== $var1)
    {
        $p = CampusData2::getById($_POST["pk"]);
        $p->name = $_POST["value"];
        $p->update();
    }

?>