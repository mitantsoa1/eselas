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
            $this->query.=$cols.$value;
 
            return $this;

        }
        public function getQuery(){
            echo $this->query;
        }

        public function execute($data){
           
            if(strpos($this->query,"?") > -1){
                $req = self::db()->prepare($this->query);
                
                $req->execute($data);
                
            }
        }    public function select($table){
            $table = htmlspecialchars((trim($table)));
            $this->query = "SELECT INTO ".$table;

            return $this;
        }
        public function update($table){
            $this->query = "UPDATE ".$table;

            return $this;
        }
        public function set($fields){
            $this->query .=" SET ";
            for ($i=0; $i<count($fields); $i++){
                $this->query .= $fields[$i]." = ? ";
            }

            return $this;
        }

        public function where($primary,$operator){
            $this->query.=" WHERE ".$primary." ".$operator." ?";
            return $this;
        }

        public function delete($table){
            $table = htmlspecialchars(trim($table));
            $this->query = "DELETE FROM ".$table;
            return $this;

        }
        public function et($col,$operator){
            $this->query .= " AND ".$col." ".$operator." ?";

            return $this;
        }
        public function ou($col,$operator){
            $this->query .= " OR ".$col." ".$operator." ?";

            return $this;
        }
        public function retour(){
            return "success";
        }
        public function innerJoin($table1,$table2,$id){
            $table1 = htmlspecialchars(trim($table1));
            $table2 = htmlspecialchars(trim($table2));
            $id = htmlspecialchars(trim($id));

            $this->query .="INNER JOIN ".$table2." ON ".$this->table1.".".$id."=".$table2.".".$id;
            return $this;
        }

    }
    

    
//     $db = new Database();

//     Database::init("localhost","stage","root","");
// $db  ->select("voiture")
// -> parametters(["id","matricule","marque","place","couleur","id_proprietaire"])
// ->where("id","=")
// ->getQuery();
// $db = new Database();
//     $db ->insert("personne")
//         ->set(["nom","prenom"])
//         -> where("prenom","=")
//         ->getQuery();
// $db->delete("personne")
// -> where("nom","=")
//        ->getQuery();
?>