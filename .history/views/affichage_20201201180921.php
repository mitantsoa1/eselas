<?php
// include_once ('Models/voiture.class.php');
// include_once ('Models/proprietaire.class.php');
// include_once ('Controls/control.php');
// include_once ('Views/enregistrementProprio.php');
// include_once ('Views/enregistrementVoiture.php');
// session_start();
// $matricule=htmlspecialchars(trim($_POST['matricule']));
// $_SESSION['user']=$matricule;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
    <link rel="stylesheet" href="Publics/css/style.css">
    <link rel="stylesheet" href="Publics/css/bootstrap.css">
    <link rel="stylesheet" href="Publics/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/util.css">

</head>
<body>
    <div id="vide" class="container hide">
        <?php
            // session_start();
            // include_once('Models/Database.class.php');
            // require_once ("Controls/Controllers.class.php");
            // include_once('Models/Database.class.php');
            // require_once ("Controls/Controllers.class.php");

            $nom="";
            $id="";
            $prenom="";
            $adresse="";
            if(isset($_POST['idP'])){
                // echo json_encode("weee") ;
                include_once('../Models/Database.class.php');
                require_once ("../Controls/Controllers.class.php");
                // echo "AAAAAAA";
                $id=$_POST['idP'];
                $db = new Database();
                Database::init("localhost","stage","root","");
                // include('modifierPers.php');
                $tab= $db ->selectSP()
                            ->from("personne")
                            ->where("id","=")
                            ->execute([$id]);
                var_dump($tab);
                echo $tab[0]->nom;
                            $nom=$tab[0]->nom;
                            $id=$tab[0]->id;
                            $prenom=$tab[0]->prenom;
                            $adresse=$tab[0]->adresse;
            }
        ?>
         <form class="form-horizontal" method="POST" action="sauver">
            
            <h2  class="centre titre2"> Modification du proprietaire de la voiture</h2>
            

            <div class="form-group">
                <label class="control-label " for="nom">NOM:</label>
            
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo$tab[0]->nom;;?>">
            
            </div>

            <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">
            
            </div>

            <div class="form-group">
                <label class="control-label " for="prenom">PRENOM:</label>
                
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            
            </div>
            <div class="form-group">
                <label class="control-label " for="adresse">Adresse:</label>
                    
                    <input type="text" class="form-control" id="adresse"  name="adresse" value="<?php echo $adresse;?>">
                            
            </div>

            <div class="form-group">        
                <div class="col-sm-offset-5 col-sm-2">
                 <button name="btnSauv" class="btn btn-primary" value="Sauver">Sauver</button>
                </div>
            </div>
        </form>
    
    </div>
    </div>
<div class="container-fluid" id="affichage">
    <div class="row">
        <div class="col-md-5">

            <table class="m-t-100 table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>NOM</td>
                                <td>PRENOM</td>
                                <td>ADRESSE</td>
                                <td>ACTION</td>
                                <!-- <td>MARQUE</td>
                                <td>MATRICULE</td>
                                <td>NOMBRE DE PLACE</td>
                                <td>COULEUR</td> -->
                            </tr>
                        <?php  
                            require_once ("Controls/Controllers.class.php");
                            require_once ("Models/Database.class.php");

                                $db = new Database();
                                Database::init("localhost","stage","root","");
                                $table= $db ->selectSP()
                                            ->from("personne")
                                            ->order("id")
                                            ->executeSP();
                                for($i=0;$i<count($table);$i++){         
                                                
                                    echo "<tr>
                                            <td>".$table[$i]->id."</td>
                                            <td>".$table[$i]->nom."</td>
                                            <td>".$table[$i]->prenom."</td>
                                            <td>".$table[$i]->adresse."</td>
                                            <td>
                                            <a href='affichage' id='effacer' onclick='effacer(".$table[$i]->id.")'>Effacer</a>
                                            <a href='#' id='modifierP' onclick='modifierP(".$table[$i]->id.")'>Modifier</a>
                                            </td>

                                         </tr>
                                        "; 
                                }
                           
                        ?>

                        
            </table> 

        </div>

        <div class="col-md-7">
                <table  class="m-t-100 table table-bordered">
                        <tr>
                            <!-- <td>NOM</td>
                            <td>PRENOM</td>-->
                            <td>id</td> 
                            <td>MARQUE</td>
                            <td>MATRICULE</td>
                            <td>NOMBRE DE PLACE</td>
                            <td>COULEUR</td>
                            <td>ID_PROPRIETAIRE</td>
                            <td>ACTION</td>
                        </tr>          
                    <?php  
                            $tab= $db ->selectSP()
                            ->from("voiture")
                            ->order("id")
                            ->executeSP();
                        for($i=0;$i<count($tab);$i++){         
                                
                    echo "<tr>
                            <td>".$tab[$i]->id."</td>
                            <td>".$tab[$i]->marque."</td>
                            <td>".$tab[$i]->matricule."</td>
                            <td>".$tab[$i]->place."</td>
                            <td>".$tab[$i]->couleur."</td>
                            <td>".$tab[$i]->id_personne."</td>
                            <td>
                            <a href='affichage' id='supprimer' onclick='supprimer(".$tab[$i]->id.")'>Effacer</a>
                            <a href='affichage' id='modifierP' onclick='modifierVoit(".$tab[$i]->id.")'>Modifier</a>
                            </td>

                        </tr>
                        "; 
                }
                    ?>
                </table> 
        </div>
    </div> 
    <div class="col-md-10 col-md-offset-1">
   
<table class="m-t-100 table table-bordered">             
                <tr>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td>ADRESSE</td>
                    <td>MARQUE</td>
                    <td>MATRICULE</td>
                    <td>NOMBRE DE PLACE</td>
                    <td>COULEUR</td>
                    <td>ID_PROPRIETAIRE</td>
                </tr>

            <?php  


            $connexion = new PDO ("mysql:host=localhost;dbname=stage","root","");
                $sql="SELECT * FROM voiture AS v INNER JOIN personne AS p ON p.id= v.id_personne";         
                $stmt1 = $connexion -> prepare($sql);
                $stmt1 -> execute();
                $table=[];
                $i=0;
                    while($x= $stmt1->fetch(PDO::FETCH_ASSOC)){
                        $table=$x;
                        $i++;
                    }
                        echo "
                            <tr>                      
                                <td> ".$table['nom']."</td>
                                <td> ".$table['prenom']."</td>
                                <td> ".$table['adresse']."</td>
                                <td> ".$table['marque']."</td>
                                <td> ".$table['matricule']."</td>
                                <td> ".$table['place']."</td>
                                <td> ".$table['couleur']."</td>
                                <td> ".$table['id_personne']."</td>
                            </tr>
                        ";
                        // echo $table['nom'];
                    
            ?>
</table>
</div>
<!-- <table border="1">
                <tr>
                    <td>ID_PERSONNE</td>
                  
                   <td>MARQUE</td>
                    <td>MATRICULE</td>
                    <td>NOMBRE DE PLACE</td>
                    <td>COULEUR</td> 
                </tr>
</table>  -->
               
            
       
             
            <!-- $connexion = new PDO ("mysql:host=localhost;dbname=stage","root","");
                $sql="SELECT id FROM personne  ";         
                $stmt = $connexion -> prepare($sql);
                $stmt -> execute();
                $i=0;
                $x=0;
                    while($tab= $stmt->fetch(PDO::FETCH_ASSOC)){
                        $x= $tab['id'];
                        // echo $table."<br>"; 
                        $table[$i]=$x;
                        
                        $i++;                       
                    }                  
                        echo $table[0]." "; -->
        
    </div> 
    <script src="Publics/js/jquery.js"></script>
    <script src="Publics/js/bootstrap.js"></script>
    <script src="Publics/js/main.js"></script>               
</body>

    
</html>               
           



