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
    $db = new Database();
            Database::init("localhost", "eselas", "root", "");

            $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
            $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
            $niveau = htmlspecialchars(trim($_POST['niveau']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $num_inscription = htmlspecialchars(trim($_POST['num_inscription']));
            $tab = $db  ->selectSP()
                        ->from("etudiants")
                        ->where("num_inscription","=")
                        ->et(["niveau","nom","prenom","mdp"], ["=","=","=","="])
                        ->execute([$num_inscription,$niveau,$nom,$prenom,$mdp]);

       
            if (count($tab)>0) {
                self::loadView("accueil.php");
            } else {
                self::loadView("erreurConnex.php");
            }
    }
    
?>