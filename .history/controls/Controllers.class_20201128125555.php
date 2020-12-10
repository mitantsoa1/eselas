<?php

    class Controllers{
        public function enregVoit(){
            self::loadView("enregistrementVoiture.php");
        }
        public function enregProp(){
            self::loadView("enregistrementProprio.php");
        }
        public static function loadView($page){
            include("Views/".$page);
        }
    }
?>