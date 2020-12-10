<?php

    class Controllers{
        public function home(){
            echo "home";
        }
        public function insertPersonne(){
            echo "ajout personne"; 
        }
        public static function loadView($page){
            include("views/".$page);
        }
    }
?>