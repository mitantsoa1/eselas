<?php

require_once ("controls/Controllers.class.php");
if(isset($_GET['action'])){
    if(method_exists("Controllers",$_GET['action'])){
        $reflect = new ReflectionMethod("Controllers",$_GET['action']);
        $class = "Controllers";
        $reflect -> invoke(new $class);
    }
}

?>