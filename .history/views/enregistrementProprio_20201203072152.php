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
        <form class="form-horizontal" method="POST" action="">
            
            <h2  class="centre titre2"> Enregistrement du proprietaire de la voiture</h2>
            

            <div class="form-group">
                <label class="control-label " for="nom">NOM:</label>
            
                    <input type="text" class="form-control" id="nom" placeholder="Nom du proprietaire" name="nom">
            
            </div>

            <div class="form-group">
                <label class="control-label " for="prenom">PRENOM:</label>
                
                    <input type="text" class="form-control" id="prenom" placeholder="Prenom du proprietaire" name="prenom">
            
            </div>
            <div class="form-group">
                <label class="control-label " for="adresee">Adresse:</label>
                    
                    <input type="text" class="form-control" id="adresse" placeholder="Enter l' adresse" name="adresse">
                            
            </div>

            <div class="form-group">        
                <div class="col-sm-offset-5 col-sm-2">
                <button id="btnS" name="btnS" class="btn btn-primary" value="Sauvegarder">Sauvegarder</button>
                </div>
            </div>

        </form>
<a href="affichage" class="btn bt-info">affichage</a>    
    </div>

<script src="Publics/js/jquery.js"></script>
<script src="./exo/Publics/js/bootstrap.js"></script>
<script src="Publics/js/main.js"></script>
</body>
</html>