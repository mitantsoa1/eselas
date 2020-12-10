<?php

    class Controllers{
        public function enregVoit(){
            self::loadView("enregistrementVoiture.php");
        }
        public function enregProp(){
            self::loadView("enregistrementProprio.php");

            if(isset($_POST['btnS'])){
                $bd = new Database();
                if($_POST['nom']!="" && $_POST['prenom']!="" && $_POST['adresse']!=""){
                    $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
                    $prenom = ucwords(htmlspecialchars(trim($_POST['prenom']))) ;
                    $adresse = htmlspecialchars(trim($_POST['nom']));
                }
                $bd -> insert("personne")
                   ->parametters(["nom","prenom","adresse"])
                   ->execute([$nom,$prenom,$adresse]);
            }
        }


        public static function loadView($page){
            include("Views/".$page);
        }
    }
?>