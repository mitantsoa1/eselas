<?php
// session_start();
include_once('Models/Database.class.php');


$matricule="";
$marque="";
$couleur="";
$place="";
if(isset($_POST['id'])){
    $db = new Database();
    
            $db ->select("voiture")
                -> parametters(["id","matricule","marque","place","couleur","id_proprietaire"])
                ->where("id","=")
                ->execute([$_POST['id']]); 
            while($tab= $stmt->fetch(PDO::FETCH_ASSOC)){
                    // echo $tab['nom']." ".$tab['prix'];
                    $matricule = $tab['matricule'];
                    $marque = $tab['marque'];
                    $couleur=$tab['couleur'];
                    $place=$tab['place'];
                }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/bootstrap.css">
    <link rel="stylesheet" href="./Publics/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <form class="form-horizontal form " method="POST" action="">
            <h2 class="centre titre2">Modification des données</h2>

            <div class="form-group">
                <label class="control-label " for="marque">Marque:</label>        
                    <input type="text" class="form-control" id="marque" placeholder="Enter la marque de la voiture" name="marque" value=" <?php echo $marque; ?>">
            </div>
            

            <div class="form-group">
                <label class="control-label" for="matricule">Matricule:</label>         
                    <input type="text" class="form-control" id="matricule" placeholder="Enter le matricule" name="matricule" value=" <?php echo $matricule; ?>">
            </div>

            <div class="form-group">
                <label class="control-label" for="matricule">Couleur:</label>        
                <input type="text" class="form-control" id="couleur" placeholder="Enter le couleur" name="couleur" value=" <?php echo $couleur; ?>">             
            </div>

            <div class="form-group">
                <label class="control-label" for="place">Nombre de place:</label>        
                <input type="text" class="form-control" id="place" placeholder="Enter le nombre de places" name="place" value=" <?php echo $place; ?>">             
            </div>

<!--Pour l' option value-->
            <?php  
                $db = new Database();
    
                $db ->select("personne")
                    -> parametters(["id"])
                    ->executeSP(); 
                while($tab= $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $tab['nom']." ".$tab['prenom'];die();
                        // $matricule = $tab['matricule'];
                        // $marque = $tab['marque'];
                        // $couleur=$tab['couleur'];
                        // $place=$tab['place'];
                    }

        //     $connexion = new PDO ("mysql:host=localhost;dbname=stage","root","");
        //     $sql="SELECT id FROM personne  ";         
        //     $stmt = $connexion -> prepare($sql);
        //     $stmt -> execute();
        //     $i=0;
        //     $x=0;
        //      while($tab= $stmt->fetch(PDO::FETCH_ASSOC)){
        //             $x= $tab['id'];
        //             // echo $table."<br>"; 
        //             $table[$i]=$x;                       
        //             $i++;                       
        //     }                  
            
        //     $sql1="SELECT nom FROM personne ";         
        //     $stm = $connexion -> prepare($sql1);
        //     $stm -> execute();
        //     $j=0;
        //     $y=0;
        //      while($tab1= $stm->fetch(PDO::FETCH_ASSOC)){
        //             $y= $tab1['nom'];
        //             // echo $table."<br>"; 
        //             $table1[$j]=$y;                       
        //             $j++;                       
        //     }                
        //     ?>
        <!-- //   <p>
        //     <label for="proprietaire">Proprietaire</label><br />
        //     <select name="proprietaire" id="proprietaire">

        //      <?php   for($i=0;$i<count($table);$i++){ ?>                   
        //             <option value="<?php echo $table[$i]; ?>"><?php echo $table[$i].' : '.$table1[$i]; ?></option>
        //             <?php }  ?>
        //     </select>
        // </p> -->
<!--Fin option value-->

            <div class="form-group">        
                <div class="col-sm-offset-5 col-sm-2">
                <input type="submit" class="btn btn-primary" name="btnModifV" value="ModifierV">
                </div>
            </div>
        </form>  
    </div>

<script src="./exo/Publics/js/jquery.js"></script>
<script src="./exo/Publics/js/bootstrap.js"></script>

</body>
</html>