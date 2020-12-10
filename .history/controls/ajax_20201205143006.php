<?php
    include_once "../Models/Database.class.php";
    // include "../Models/voiture.class.php";
    // $personne= new Personne();
    // $voiture= new Voiture();
    require_once ("Controllers.class.php");

    Database::init("localhost","eselas","root","");
$db = new Database();
    header('Content-type: application/json');

   if(isset($_POST['nom'])){
        echo json_encode($_POST['nom']);
    }
    
?>