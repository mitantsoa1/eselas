<?php
    class Database {
        private $query;
        private static $host;
        private static $dbname;
        private static $user;
        private static $pass;
        private static $conn;
        private $reqA;

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
        public function paramettersNV($fields){
            $this->query.=" (";
            $cols="";
            for($i=0; $i<count($fields); $i++){
                $cols.=$fields[$i].",";
            }
            $cols = trim($cols,",");
            $cols.=")";
            
            $this->query.=$cols;
 
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
        }
        public function executeAff($data,$tab){
           
            if(strpos($this->query,"?") > -1){
                $this->reqA = self::db()->prepare($this->query);
                $this->reqA->execute($data); 
                while($tab= $this->reqA->fetch(PDO::FETCH_ASSOC)){
                    echo "ICI";
                    var_dump($tab);
            }
            
            }
        }
        public function executeSP($req){
                $req = self::db()->prepare($this->query);
                $req->execute();     
        }
        
        public function select($table){
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
        public function innerJoin($table1,$table2,$id1,$id2){
            $table1 = htmlspecialchars(trim($table1));
            $table2 = htmlspecialchars(trim($table2));
            $id1 = htmlspecialchars(trim($id1));
            $id2 = htmlspecialchars(trim($id2));

            $this->query .=" INNER JOIN ".$table2." ON ".$table1.".".$id1."=".$table2.".".$id2;
            return $this; 
        }

    }
    

    
//     $db = new Database();

//     Database::init("localhost","stage","root","");
// $db  ->select("voiture")
// -> paramettersNV(["matricule","marque","place","couleur","id_proprietaire"])
// ->where("matricule","=")
// ->getQuery();
// ->innerJoin("voiture","personne","id_personne","id")
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