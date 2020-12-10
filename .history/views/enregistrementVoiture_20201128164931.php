 <?php
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
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
        <form class="form-horizontal" method="POST" action="affichage">
            <h2 class="centre titre2">Enregistrement de la voiture</h2>

            <div class="form-group">
                <label class="control-label " for="id">id:</label>        
                    <input type="text" class="form-control" id="id" placeholder="Enter la marque de la voiture" name="id">
            </div>
            <div class="form-group">
                <label class="control-label " for="marque">Marque:</label>        
                    <input type="text" class="form-control" id="marque" placeholder="Enter la marque de la voiture" name="marque">
            </div>

            <div class="form-group">
                <label class="control-label" for="matricule">Matricule:</label>         
                    <input type="text" class="form-control" id="matricule" placeholder="Enter le matricule" name="matricule">
            </div>

            <div class="form-group">
                <label class="control-label" for="matricule">Couleur:</label>        
                <input type="text" class="form-control" id="couleur" placeholder="Enter le couleur" name="couleur">             
            </div>

            <div class="form-group">
                <label class="control-label" for="place">Nombre de place:</label>        
                <input type="text" class="form-control" id="place" placeholder="Enter le nombre de places" name="place">             
            </div>

            <?php  
            $connexion = new PDO ("mysql:host=localhost;dbname=stage","root","");
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
                
                $sql1="SELECT nom FROM personne  ";         
                $stm = $connexion -> prepare($sql1);
                $stm -> execute();
                $j=0;
                $y=0;
                 while($tab1= $stm->fetch(PDO::FETCH_ASSOC)){
                        $y= $tab1['nom'];
                        // echo $table."<br>"; 
                        $table1[$j]=$y;                       
                        $j++;                       
                }                  
    ?>
          <p>
            <label for="proprietaire">Proprietaire</label><br />
            <select name="proprietaire" id="proprietaire">

             <?php   for($i=0;$i<count($table);$i++){ ?>                   
                    <option value="<?php echo $table[$i]; ?>"><?php echo $table[$i].' : '.$table1[$i]; ?></option>
                    <?php }  ?>
            </select>
        </p>



            <!-- <div class="b">
                <div class="form-group">
                    <label class="control-label" for="proprietaire">Proprietaire:</label>        
                    <input type="number" class="form-control" id="proprietaire" placeholder="Enter le proprietaire" name="proprietaire">             
                </div>
            </div> -->
            <div class="form-group">  
                <div class="row">      
                    <div class="col-sm-offset-3 col-sm-2">
                        <button class="btn btn-primary" name="btnE" id="btnE" value="Enregistrer">Enregistrer </button> <br><br>
                    </div>
                    <div class="col-sm-offset-2 col-sm-2">
                        <a class="btn btn-warning" id="btnEM" value="Modifier">Modifier</a>
                    </div>
                </div>
            </div>
        </form>  
    </div>

<script src="Publics/js/jquery.js"></script>
<script src="Publics/js/bootstrap.js"></script>
<script src="Publics/js/main.js"></script>

</body>
</html>