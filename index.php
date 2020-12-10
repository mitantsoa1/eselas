<?php

require_once ("Controls/Controllers.class.php");
// require_once ("Models/Database.class.php");
// Database::init("localhost","stage","root","");

if(isset($_GET['action'])){
    if(method_exists("Controllers",$_GET['action'])){
        $reflect = new ReflectionMethod("Controllers",$_GET['action']);
        $class = "Controllers";
        $reflect -> invoke(new $class);
    }else{
        Controllers::loadView("erreur.php");
    }
}else{
    Controllers::loadView("indexViews.php");
}

?>