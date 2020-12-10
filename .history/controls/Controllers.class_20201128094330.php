<?php

    class Controllers{
        public function home(){
            echo "home";
        }
        public function insertPersonne(){
            echo "ajout personne"; 
        }
        public function loadView($page){
            include("views/".$page);
        }
    }
?>