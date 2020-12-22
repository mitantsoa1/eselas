<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <div class="navbar-header">
                    <span class="navbar-brand" >FRANCAIS</span>
                </div>
            </div>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="accueil" class="navbar-brand" >retour à l'accueil</a></li>
                        <li><a href="cours">cours</a></li>
                        <li><a href="exercice">exercice</a></li>
                        <li><a href="evaluation" >evaluation</a></li>
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