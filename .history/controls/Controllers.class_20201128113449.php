<?php

    class Controllers{
        public function enregVoit(){
            self::loadView("enregistrementVoiture.php");
        }
        public function enregProp(){
            self::loadView("enregistrementProprio.php");
        }
        public function insertPersonne(){
            echo "ajout personne"; 
        }
        public static function loadView($page){
            include("Views/".$page);
        }
    }
?>