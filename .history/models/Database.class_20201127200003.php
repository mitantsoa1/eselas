<?php
    class Database {
        private $query;
        private static $host;
        private static $dbname;
        private static $user;
        private static $pass;
        private static $conn;

        public static function init($host,$dbname,$user,$pass){
            self:: $host  = htmlspecialchars(trim($host));
            self:: $dbname  = htmlspecialchars(trim($dbname));
            self:: $user  = htmlspecialchars(trim($user));
            self:: $pass  = htmlspecialchars(trim($pass));
        }

        public static function db(){
            if(!isset(self::$conn)){
                self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname,self::$user,self::$pass);
            }
            return self::$conn;
        }
        public function insert($table){
            $table = htmlspecialchars(trim($table));
            $this ->query = "INSERT INTO ".$table ;
            return $this;
        }
        public function parametters($fields){
            $this->query.=" (";
            $cols="";
            $value=" VALUE (";
            for($i=0; $i<count($fields); $i++){
                $cols.=$fields[$i].",";
            }
            $cols = trim($cols,",");
            $cols.=")";
            for($i=0; $i<count($fields); $i++){
                $value.="?,";
            }
            $value = trim($value,",");
            $value.=")";

            return $this;

        }
        public function getQuery(){
            echo $this->query;
        }

        public function execute($data){
            if(strpos($this->query,"?") > -1){
                $req = self::db()->prepare($this->query);
                $req->execute();
            }
        }

    }

    $db = new Database();
    Database::init("localhost","stage","root","");
    $db ->insert("Personne")
        ->parametters(["nom","prenom","adresse"])
        ->execute();

?>