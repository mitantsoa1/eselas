<?php
    include_once "../Models/Database.class.php";
    // include "../Models/voiture.class.php";
    // $personne= new Personne();
    // $voiture= new Voiture();
    require_once ("Controllers.class.php");

    Database::init("localhost","stage","root","");
$db = new Database();
    header('Content-type: application/json');

    if(isset($_POST['id'])){
        $db = new Database();
               $db  ->delete("personne")
                    -> where("id","=")
                    ->execute([$_POST['id']]);      
    }
    if(isset($_POST['idV'])){
        $db = new Database();
               $db  ->delete("voiture")
                    -> where("id","=")
                    ->execute([$_POST['idV']]);
        echo json_encode("commande reussie!") ;     
    }



    if(isset($_POST['idP'])){
        include_once('../Models/Database.class.php');
        $id=$_POST['idP'];
        $db = new Database();
        Database::init("localhost","stage","root","");
        $tab= $db ->selectSP()
                    ->from("personne")
                    ->where("id","=")
                    ->execute([$id]);
                    echo json_encode($tab);
    }
    if(isset($_POST['idVoit'])){
        include_once('../Models/Database.class.php');
        require_once ("Controllers.class.php");
        // echo json_encode($_POST['idVoit']) ;
    // Database::init("localhost","stage","root","");
    // $db = new Database();
     $tab = $db ->selectSP()
                ->from("voiture")
                ->where("id","=")
                ->getQuery();
                ->execute([$idVoit]);
                var_dump($tab);
                // echo json_encode($tab);  
                // echo $tab[0]->marque;    
    }

    // if(isset($_POST['idP'])){
    //     echo json_encode('we');
            
    // }

//     if(isset($_POST['btnV'])){
//         // echo "okay";
//         // echo $_POST['btnIndexV'];
//         // echo json_encode("okay");
//         Controllers::loadView("enregistrementVoiture.php");
//     }
// if(isset($_POST['nom'])){
//     $bd = new Database();
//     echo 'bla bla bla';die();
//     if($_POST['nom']!="" && $_POST['prenom']!="" && $_POST['adresse']!=""){
//         $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
//         $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
//         $adresse = htmlspecialchars(trim($_POST['nom']));
//     }
//     $res= $bd->insert("personne")
//              ->parametters(["nom","prenom","adresse"])
//              ->execute([$nom,$prenom,$adresse]);
//          if($res=='success'){
//             echo json_encode("okay");
//         }   
//     }




    // if(isset($_POST['id'])){
    //     $personne->setid($_POST['id']);
    //     $res = $personne->deletePersonne();
    //     echo json_encode($res);
        
    // }
    // // if(isset($_POST['matricule'])){
    // //     echo "bla3";
    // //     // $voiture->setmatricule($_POST['matricule']);
    // //     // $res = $voiture->deleteVoiture();
    // //     // echo json_encode($res);   
    // // }
    
    // global $personne;
    // if(isset($_POST['id_p'])){
    //         $personne->setid($_POST['id_p']);
    //         $res = $personne->selectPersonne();
    //         echo json_encode($res);
    // }
    // if(isset($_POST['nom'])){
    //     $personne->setnom($_POST['nom']);
    //     $personne->setprenom($_POST['prenom']);
    //     $personne->setadresse($_POST['adresse']);
    //     $res = $personne->insertPersonne();
    //      if($res=='success'){
    //         echo json_encode("okay");
    //     }   
    // }

    // if(isset($_POST['matricule'])){
    //     // echo "aaa";
    //    $voiture->setmatricule($_POST['matricule']);
    //     $voiture->setmarque($_POST['marque']);      
    //    $voiture->setplace($_POST['place']);
    //     $voiture->setcouleur($_POST['couleur']);
    //     $voiture->setproprietaire($_POST['proprietaire']);
    //     $res = $voiture->insertvoiture();
    //      if($res=='successV'){
    //         // echo json_encode("okay");
    //         include_once 'Views/affichage.php';
    //    }   
    // }

        
    
?>