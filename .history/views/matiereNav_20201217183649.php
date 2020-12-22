<?php
    include_once('Controls/Controllers.class.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <div class="navbar-header">
                    <span class="navbar-brand">LOGO</span>
                </div>
            </div>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="accueil" class="navbar-brand" >retour à l'accueil</a></li>
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

                            echo "
                            <li>
                                <a href='francais'  onclick='effacer(".$table[$i]->id.")'>effacer </a>
                            </li>
                            <li>
                             <a href='francais'  onclick='modifierP(".$table[$i]->id.")'>Modifier</a>
                            </li>
                            <li>
                             <a href='francais'  onclick='modifierP(".$table[$i]->id.")'>Modifier</a>
                            </li>
                        "; 
                    }
                        ?>
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