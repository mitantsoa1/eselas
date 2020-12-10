<?php
    
    class Controllers{
       

        public function inscrire(){
            self::loadView("inscription.php");

            if(isset($_POST['btnInscription'])){
                require_once('Models/Database.class.php');
                $db = new Database();
                Database::init("localhost","eselas","root","");
                    
                $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
                $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
                $adresse = htmlspecialchars(trim($_POST['adresse']));
                $email = htmlspecialchars(trim($_POST['email']));
                $telephone = htmlspecialchars(trim($_POST['telephone']));
                $niveau = htmlspecialchars(trim($_POST['niveau']));
                $num_inscription = htmlspecialchars(trim($_POST['num_inscription']));
                    
                    $tab = $db  ->selectSP()
                                ->from("etudiants")
                                ->where("num_inscription","=")
                                ->execute([$num_inscription]);
                    if(count($tab)>0){
                        echo "Erreur ! le numéro est déjà pris. Veillez choisir un autre.";
                    }else{
                        $db  ->insert("etudiants")
                             ->parametters(["nom","prenom","adresse","email","telephone","niveau","num_inscription"])
                            //  ->getQuery();
                             ->execute([$nom,$prenom,$adresse,$email,$telephone,$niveau,$num_inscription]);
                    }   
            }
        }
    //     public function enregProp(){
    //         self::loadView("enregistrementProprio.php");
    //         require_once('Models/Database.class.php');
    //         if(isset($_POST['btnS'])){
    //             $bd = new Database();
    //             Database::init("localhost","stage","root","");
    //             if($_POST['nom']!="" && $_POST['prenom']!="" && $_POST['adresse']!=""){
    //                 $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
    //                 $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
    //                 $adresse = htmlspecialchars(trim($_POST['adresse']));
                
    //             $bd->insert("personne")
    //                ->parametters(["nom","prenom","adresse"])
    //                ->execute([$nom,$prenom,$adresse]);
    //             }else{
    //                 echo "Veillez remplir tous les champs";
    //             }        
    //         }
    //     }
    //     public function affichage(){
    //         self::loadView("affichage.php");
    //     }
    //     public function sauverP(){
            
    //             if(isset($_POST['btnSauver'])){
    //                 echo"commande réussie!";
    //                 $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
    //                 $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
    //                 $adresse = htmlspecialchars(trim($_POST['adresse']));
    //                 $idP = htmlspecialchars(trim($_POST['id']));
    //                 // echo $idP.$nom.$adresse.$prenom;
    //             require_once('Models/Database.class.php');
    //             Database::init("localhost","stage","root","");
    //                 $db = new Database();
    //                            $db  ->update("personne")
    //                                 -> set(["nom","prenom","adresse"])
    //                                 ->where("id","=")
    //                                 ->execute([$nom,$prenom,$adresse,$idP]);

    //                     // echo json_encode("commande reussie!") ;     
                    
    //             }else{
    //                 echo "<h1>Veillez remplir tous les champs</h1>";
    //             }        
            
    //     }
    //     public function sauverV(){
            
    //         if(isset($_POST['btnSauverV'])){
    //             $id = $_POST['id'];
    //             $marque = htmlspecialchars(trim($_POST['marque'])) ;
    //             $matricule = htmlspecialchars(trim($_POST['matricule']));
    //             $place = htmlspecialchars(trim($_POST['place']));
    //             $couleur = htmlspecialchars(trim($_POST['couleur']));
    //             $proprietaire = htmlspecialchars(trim($_POST['proprietaire']));

    //         require_once('Models/Database.class.php');
    //         Database::init("localhost","stage","root","");
    //             $db = new Database();
    //                        $db  ->update("voiture")
    //                             // ->paramettersNV(["matricule","marque","place","couleur","id_personne"])
    //                             ->set(["matricule","marque","place","couleur","id_personne"])
    //                             ->where("id","=")
    //                             // ->getQuery();
    //                             ->execute([$matricule,$marque,$place,$couleur,$proprietaire,$id]);
    //                 $tab = $bd  ->selectSP()
    //                             ->from("voiture")
    //                             ->where("matricule","=")
    //                             ->execute([$matricule]);
    //                 if(count($tab)>0){
    //                     echo "Erreur ! le numéro est pris. Veillez choisir un autre.";
    //                 }else{
    //                     $db     ->update("voiture")
    //                             ->set(["matricule","marque","place","couleur","id_personne"])
    //                             ->where("id","=")
    //                             ->execute([$matricule,$marque,$place,$couleur,$proprietaire,$id]);
    //                 }   
    //         }
        
    // }

    //     public function modifierV(){
    //         self::loadView("modifier.php");
    //     }
    //     public function modifierPers(){
    //         self::loadView("modifierPers.php");
    //     }
    //     public function inscrire(){
    //         self::loadView("inscription.php");
    //     }
        public static function loadView($page){
            include("Views/".$page);
        }
    }
    
    
?>