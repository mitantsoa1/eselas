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

            $nom =$_POST['nom'];
            $prenom = $_POST['prenom'] ;
            $niveau = $_POST['niveau'];
            $mdp = $_POST['mdp'];
            $num_inscription = ['num_inscription'];
            $tab = $db  ->selectSP()
                        ->from("etudiants")
                        ->where("num_inscription","=")
                        ->et(["niveau","nom","prenom","mdp"], ["=","=","=","="])
                        ->execute([$num_inscription,$niveau,$nom,$prenom,$mdp]);
                        if (count($tab)>0) {
                           echo json_encode("oui");
                        } else {
                            echo json_encode("non");
                        }
          
    }

    if(isset($_POST['id_comment'])){
        $db = new Database();
        Database::init("localhost", "eselas", "root", "");
        $tab = $db ->selectSP()
                    ->from('comment')
                    ->where("publication.id_comment","=")
                    ->execute([$_POST['id_publication']]);
                    

        // $table = $db ->selectSP()
        //              ->from("publication")
        //              ->where("categorie","=")
        //              ->et(["id_matiere"],["="])
        //              ->execute([$_POST['chercher'],$tab[0]->id_matiere]);   

                     echo json_encode($tab);
                    // var_dump($table);
    }
    
?>