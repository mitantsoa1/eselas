<?php
// session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexViews</title>
    <link rel="stylesheet" href="Publics/css/bootstrap.css">
    <link rel="stylesheet" href="Publics/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/style.css">
</head>
<body>
    <h2 class="centre">BIENVENU</h2>
    <form action="" method="POST" class="formulaire" style="display: inline;margin-left:20%;">

        <a href="#" id="btnIndexV" name="btnIndexV" class=" btn btn-primary">
            Cliquer ici pour enregistrer votre voiture 
        </a>  

    </form>

    <form action="?action=registerP" method="post" class="formulaire" style="display: inline; margin-left:20%;">
    <input type="submit" name="btnIndex1" class=" btn btn-success" value="Clique ici pour enregistrer un nouveau proprietaire">      
    </form>
    
    <script src="Publics/js/jquery.js"></script>
    <script src="Publics/js/bootstrap.js"></script>
    <script src="Publics/js/main.js"></script>
</body>
</html>