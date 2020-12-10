<?php
    class Database {
        private $query;
        private $conn;

        public function insert($table){
            $table = htmlspecialchars(trim($table));
            $this ->query = "INSERT INTO ".$table ;
            echo $this ->query;

            return $this;
        }


    }
?>