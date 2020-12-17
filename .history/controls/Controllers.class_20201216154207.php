<?php
    session_start();
    class Controllers{

        public static function loadView($page){
            include("Views/".$page);
        }
       
        // enregistrement
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
                $mdp = htmlspecialchars(trim($_POST['mdp']));
                    
                    $tab = $db  ->selectSP()
                                ->from("etudiants")
                                ->where("num_inscription","=")
                                ->execute([$num_inscription]);
                    if(count($tab)>0){
                        echo "Erreur ! le numéro est déjà pris. Veillez choisir un autre.";
                    }else{
                        $db  ->insert("etudiants")
                             ->parametters(["nom","prenom","adresse","email","telephone","niveau","num_inscription","mdp"])
                             ->execute([$nom,$prenom,$adresse,$email,$telephone,$niveau,$num_inscription,$mdp]);
                    }   
            }
        }

            // fin enregistrement

            // connexion

        public function connecter(){
            self::loadView("formP.php");
            if (isset($_POST['btnConnecter'])) {
                if ($_POST['nom']) {
                    require_once('Models/Database.class.php');
                    $db = new Database();
                    Database::init("localhost", "eselas", "root", "");

                    $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
                    $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
                    $niveau = htmlspecialchars(trim($_POST['niveau']));
                    $mdp = htmlspecialchars(trim($_POST['mdp']));
                    $num_inscription = htmlspecialchars(trim($_POST['num_inscription']));
                    $selected = htmlspecialchars(trim($_POST['select']));
                    
                    if($selected ==2){
                         $tab = $db  ->selectSP()
                                ->from("etudiants")
                                ->where("num_inscription","=")
                                ->et(["niveau","nom","prenom","mdp"], ["=","=","=","="])
                                ->execute([$num_inscription,$niveau,$nom,$prenom,$mdp]);
                    }else{
                        $tab = $db  ->selectSP()
                                    ->from("professeurs")
                                    ->where("nom","=")
                                    ->et(["prenom","mdp"], ["=","="])
                                    ->execute([$nom,$prenom,$mdp]);
                    }
                   

               
                    if (count($tab)>0) {
                        $_SESSION['user']=$nom;
                        $_SESSION['mdp']=$mdp;
                        $accueil="  <script>
                                        $('.containerFormP').remove();
                                    </script>";
                        echo $accueil;
                        self::loadView("accueil.php");
                    } else {
                        self::loadView("erreurConnex.php");
                    }
                }else{
                    echo "Veillez completer les champs !";
                }
            }
        }
        public function francais(){
            if(!isset($_SESSION['user'])){
                echo "<h2 class='text-center'>Vous devez connecter</h2>";
                self::loadView("erreur.php");
                echo ' <a href="connecter" name="btnCo" id="btnCo" class="btn btn-primary text-center">Se connecter</a>';
            }else{
                self::loadView("francais.php");
            }   
        }
        public function publierFr(){
            
            if (isset($_POST['btnP'])) {
                require_once('Models/Database.class.php');
                $db = new Database();
                Database::init("localhost", "eselas", "root", "");

                $titre = htmlspecialchars(trim($_POST['titre']));
                $contenu = htmlspecialchars(trim($_POST['contenu']));
                $photo = basename($_FILES["photo"]["name"]);
                $rep = "Publics/images/";
                $chemin = $rep. basename($_FILES["photo"]["name"]);
                move_uploaded_file($_FILES["photo"]["tmp_name"], $chemin);

                $db ->selectSP()
                    ->from("professeurs")
                    ->where("nom","=")
                    ->et("mdp","=")
                    ->execute([$_SESSION['user'],$_SESSION['mdp']]);

                $db  ->insert("publication")
                             ->parametters(["titre","contenu","photo","id_professeur"])
                             ->execute([$titre,$contenu,$photo]);
               self::loadView("francais.php");
            }
        }

        public function deconnexion(){
            self::loadView("deconnexion.php");
        }

        // fin connexion

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
        
    }
    
    
?>