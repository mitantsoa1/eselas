<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malagasy</title>
    <link rel="stylesheet" href="Publics/vendor4/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Publics/vendor4/font-awesome4/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/francais.css">
    <link rel="stylesheet" href="Publics/css/general.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <div class="navbar-header">
                    <span class="navbar-brand">MALAGASY</span>
                </div>
            </div>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="accueil" class="navbar-brand" >retour à l'accueil</a></li>
                        <li>
                                        <button onclick='showAll()'>afficher tous</button>
                                        </li>
                                        <li>
                                        <button onclick='cours()'>cours</button>
                                        </li>
                                        <li>
                                            <button  onclick='exercice()'>exercice</button>
                                        </li>
                                        <li>
                                            <button  onclick='evaluation()'>evaluation</button>
                                        </li>
                           
                            <li class="active float_droite">
                                <a href="deconnexion" name="btnDeco" id="btnDeco" class="btn btn-danger"  onclick="return confirm('Se deconnecter?')">Se deconnecter 
                                    <span class="session_user">
                                        <?php echo $_SESSION['user']; ?>
                                    </span>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>   
</nav>
        <br><br><br><br>
    
    <?php
////////////////////////////////////********************///////////////////////////////

        $_SESSION['matiere']='Malagasy';


///////////////////////////////////*********************////////////////////////////////
            include_once('Models/Database.class.php');
                    $db = new Database();
                    Database::init("localhost","eselas","root","");
                    $t =$db ->selectSP()
                    ->from('professeurs')
                    ->executeSP();
                    for($i=0;$i<count($t);$i++){

                        if($t[$i]->nom == $_SESSION['user'] && $t[$i]->mdp == $_SESSION['mdp']){

                            $table=$db ->select(['id_professeur'])
                                        ->from('professeurs')
                                        ->where('nom','=')
                                        ->et(['mdp'],['='])
                                        ->execute([$_SESSION['user'],$_SESSION['mdp']]);

                            $id_prof = $table[0]->id_professeur;

                            $tab = $db  ->selectSP()
                                        ->from("matiere")
                                        ->where('id_professeur','=')
                                        ->execute([$id_prof]);

                            if(count($tab)>0 && ($tab[0]->nom == $_SESSION['matiere'])){

                                echo '<button name="b" id="b" class="btn btn-info">Publier ci</button>';
                            }
                        }
                    }    
    ?>
           <form action="publierMlg" method="POST" id="formFR" enctype="multipart/form-data" class="hide">
            <div class="form-group">
                <label for="titre">Titre:</label>
                <input type="text" class="form-control" id="titre" name="titre">
            </div>
            <div class="form-group">
                <textarea name="contenu" id="contenu" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo">
            </div>
            <button name="btnPMlg" id="btnPMlg" class="btn btn-danger">Publier</button>
        </form>
        <?php
        
            include_once "Models/Database.class.php";
            include_once 'Controls/Controllers.class.php';
            $db = new Database();
            Database::init("localhost", "eselas", "root", "");

            $tab = $db  ->selectSP()
                        ->from("matiere")
                        ->where('nom','=')
                        ->execute([$_SESSION['matiere']]);

                        $id_mat = $tab[0]->id_matiere;

            $table = $db->selectSP()
                        ->from("publication")
                        ->where("id_matiere","=")
                        ->order("id", "DESC")
                        ->execute([$id_mat]);

            // var_dump($table);exit;
            for($i=0;$i<count($table);$i++){

                echo '<div class= "'.$table[$i]->categorie.'">
                    <table class= "'.$table[$i]->categorie.'">
                        <tr  class ="'.$table[$i]->categorie.'">
                              <td class="text-muted date">'.$table[$i]->date.'</td>
                        </tr >
                        <tr  class="date">
                              <td class="text-muted date">'.$table[$i]->categorie.'</td>
                        </tr >
                        <tr  class="date">
                              <td class="date"> Titre: <h4 class="titre4">'.$table[$i]->titre.'</h4></td>
                        </tr>
                        <tr  class="date">
                            
                            <td class="date"><span class="contenu">'.$table[$i]->contenu.'</span></td>
                        </tr> 
                        <tr  class="date">
                            <td class="date">
                                <img src="Publics/images/'.$table[$i]->photo.'" alt="" class="img-fluid">
                            </td>
                        </tr>
                        <tr  class="commentaire">
                            <td>
                                <a href="#"><i class="fa fa-comment fa-lg"></i></a>
                            </td>
                        </tr>
                       
                    </table>
            </div>';

            }
        ?>

            <div id="reception"></div>
            <div id="imgR"></div>


    </div>

    <script src="Publics/js/jquery.js"></script>
    <script src="Publics/vendor4/bootstrap/js/bootstrap.js"></script>
    <script src="Publics/js/francais.js"></script>
    <script src="Publics/js/ajax.js"></script>
</body>
</html>