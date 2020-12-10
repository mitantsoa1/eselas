<?php
    
    class Controllers{
      
        public function modifierP(){
            self::loadView("modifierPers.php");
            // if(isset($_POST['idP'])){
            //     include_once('../Models/Database.class.php');
            // require_once ("../Controls/Controllers.class.php");
            // die('stop');
            //     $id=$_POST['idP'];
            //     $db = new Database();
            //     Database::init("localhost","stage","root","");
            // include('modifierPers.php');
            //     $tab= $db ->selectSP()
            //                 ->from("personne")
            //                 ->where("id","=")
            //                 ->execute([$id]);
            //                 echo json_encode($tab);
            //     var_dump($tab);
            // echo $tab[0]->nom;
            //             $nom=$tab[0]->nom;
            //             $id=$tab[0]->id;
            //             $prenom=$tab[0]->prenom;
            //              $adresse=$tab[0]->adresse;
            // }
        }

        public function enregVoit(){
            self::loadView("enregistrementVoiture.php");

            if(isset($_POST['btnE'])){
                require_once('Models/Database.class.php');
                $bd = new Database();
                Database::init("localhost","stage","root","");
                if($_POST['marque']!="" && $_POST['matricule']!="" && $_POST['place']!="" && $_POST['couleur']!="" && $_POST['proprietaire']!=""){
                    $id = htmlspecialchars(trim($_POST['id']));
                    $marque = htmlspecialchars(trim($_POST['marque']));
                    $matricule = htmlspecialchars(trim($_POST['matricule'])) ;
                    $place = htmlspecialchars(trim($_POST['place']));
                    $couleur = htmlspecialchars(trim($_POST['couleur'])) ;
                    $proprietaire = htmlspecialchars(trim($_POST['proprietaire']));
                }
                $bd->insert("voiture")
                   ->parametters(["id","matricule","marque","place","couleur","id_personne"])
                   ->execute([$id,$marque,$matricule,$place,$couleur,$proprietaire]);
            }
        }
        public function enregProp(){
            self::loadView("enregistrementProprio.php");
            require_once('Models/Database.class.php');
            if(isset($_POST['btnS'])){
                $bd = new Database();
                Database::init("localhost","stage","root","");
                if($_POST['nom']!="" && $_POST['prenom']!="" && $_POST['adresse']!=""){
                    $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
                    $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
                    $adresse = htmlspecialchars(trim($_POST['adresse']));
                
                $bd->insert("personne")
                   ->parametters(["nom","prenom","adresse"])
                   ->execute([$nom,$prenom,$adresse]);
                }else{
                    echo "Veillez remplir tous les champs";
                }        
            }
        }
        public function affichage(){
            self::loadView("affichage.php");
        }
        public function sauverP(){
            
                if(isset($_POST['btnSauver'])){
                    echo"btnSauver";
                    $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
                    $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
                    $adresse = htmlspecialchars(trim($_POST['adresse']));
                    $idP = htmlspecialchars(trim($_POST['id']));
                    // echo $idP.$nom.$adresse.$prenom;
                require_once('Models/Database.class.php');
                $db = new Database();
                Database::init("localhost","stage","root","");
                    $db = new Database();
                               $db  ->update("personne")
                                    -> set(["nom","prenom","adresse"])
                                    ->where("id","=")
                                    ->execute([$nom,$prenom,$adresse,$idP]);

                        // echo json_encode("commande reussie!") ;     
                    
                }else{
                    echo "<h1>Veillez remplir tous les champs</h1>";
                }        
            
        }
        public function modifierV(){
            self::loadView("modifier.php");
        }
        public function modifierPers(){
            self::loadView("modifierPers.php");
        }
        public static function loadView($page){
            include("Views/".$page);
        }
    }
    
    
?>