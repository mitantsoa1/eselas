<?php
    include "../Models/proprietaire.class.php";
    include "../Models/voiture.class.php";
    // $personne= new Personne();
    // $voiture= new Voiture();
    header('Content-type: application/json');

    if(isset($_POST['btnIndexV'])){
        
        echo json_encode("btnIndexV_recu");
    }





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