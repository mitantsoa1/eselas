<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormP</title>
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/bootstrap.css">
    <link rel="stylesheet" href="./Publics/css/font-awesome.css">
</head>
<body>
    <div class="container hide" id="formP">

        <form class="form-horizontal" method="POST" action="">

            <h2  class="centre titre2"> Modification du proprietaire de la voiture</h2>
            <div class="form-group">
                <label class="control-label " for="nom">NOM:</label>

                    <input type="text" class="form-control" id="nomP" placeholder="Nom du proprietaire" name="nom">

            </div>

            <div class="form-group">
                <label class="control-label " for="prenom">PRENOM:</label>

                    <input type="text" class="form-control" id="prenomP" placeholder="Prenom du proprietaire" name="prenom">

            </div>
            <div class="form-group">
                <label class="control-label " for="adresee">Adresse:</label>

                    <input type="text" class="form-control" id="adresseP" placeholder="Enter l' adresse" name="adresse">

            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                <button id="btnS" name="btnS" class="btn btn-primary" value="Sauvegarder">Sauvegarder</button>
                </div>
            </div>

        </form>
    </div>
<a href="affichage" class="btn btn-warning ">affichage</a>
    </div>

<script src="Publics/js/jquery.js"></script>
<script src="Publics/js/bootstrap.js"></script>
<script src="Publics/js/main.js"></script>
</body>
</html>
