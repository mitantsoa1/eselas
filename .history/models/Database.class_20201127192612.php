<?php
    class Database {
        private $query;
        private $conn;

        public function insert($table){
            $table = htmlspecialchars(trim($table));
            $this ->query = "INSERT INTO ".$table ;
            return $this;
        }
        public function parametters($fields){
            $this->query.=" (";
            $cols="";
            $value="";
            for($i=0; $i<count($fields); $i++){
                $cols.=$fields[$i].",";
            }
            $cols = trim($cols,",");
            $cols.=")";
            for($i=0; $i<count($fields); $i++){
                $cols.=$fields[$i].",";
            }
            echo $this->query.$cols;

        }


    }

    $db = new Database();
    $db ->insert("Personne")->parametters(["nom","prenom","adresse"]);

?>