<?php
    
    class Controllers{
      
        public function enregVoit(){
            self::loadView("enregistrementVoiture.php");

            if(isset($_POST['btnE'])){
                require_once('Models/Database.class.php');
                $bd = new Database();
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