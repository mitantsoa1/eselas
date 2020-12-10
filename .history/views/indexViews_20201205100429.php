<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eselas</title>
    <link rel="stylesheet" href="Publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="Publics/css/font-awesome.min.css">
    <link rel="stylesheet" href="Publics/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100" >

<!-- header -->

<?php
include_once 'formP.php';
?>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top navigation">
                <div class="container-fluid">
                    <div class="navMenu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMenu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>  
                            </button>
                            <span class="navbar-brand logo">LOGO</span>
                        </div>
                        <div class="collapse navbar-collapse" id="navMenu">
                                <ul class="nav navbar-nav menu">
                                        <li><a href="#menu1" class="ali">Menu1</a> </li>
                                        <li><a href="#menu2"class="ali">Menu2</a> </li>
                                        <li><a href="#menu3"class="ali">Menu3</a> </li>
                                        <li><a href="#menu4"class="ali">Menu4</a> </li>
                                        <li><a href="#menu5"class="ali">Menu5</a> </li>
                                        <li><a href="#content" class="ali">Menu6</a> </li>
                                </ul> 
                                <div>
                                    <button type="button" class="btn btn-primary connecter ali" data-toggle="modal" data-target="#userModal" id="addnewbtn">
                                        <i class="glyphicon glyphicon-log-in"></i> Se Connecter 
                                    </button>
                                </div>
                                <!-- <a href="#" class="connecter ali"> <i class="glyphicon glyphicon-log-in"></i>  <i class="fa fa-user-circle-o"></i>Se Connecter</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

        <!-- fin header -->

    <div class="container">
            <div id="monCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#monCarousel" data-slide-to="1"></li>
                    <li data-target="#monCarousel" data-slide-to="2"></li>
                    <li data-target="#monCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Publics/images/152288.jpg" alt="" >
                        <div class="carousel-caption">
                            <h4>IMAGE1</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/152288.jpg" alt="" >
                        <div class="carousel-caption">
                            <h4>IMAGE2</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/152288.jpg" alt="" >
                        <div class="carousel-caption">
                            <h4>IMAGE3</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/152288.jpg" alt="" >
                        <div class="carousel-caption">
                            <h4>IMAGE4</h4>
                        </div>
                    </div>

                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" ></span>
                    </a>

                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" ></span>
                    </a>
                </div>
            </div>
    </div>
        <!-- fin Caroussel -->
 <div class="contenu container">
     <div>
        <h1 id="menu1">Eselas1</h1>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>

        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>


        <h1 id="menu2">Eselas2</h1>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h1 id="menu3">Eselas3</h1>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h1 id="menu4">Eselas4</h1>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h1 id="menu5">Eselas5</h1>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
        <h2>contenu</h2>
    </div>

            <div class="container" id="content">
                <div class="row">
                <section class="article">
                    <h2 class="text-center">Titre</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                </section>
                    <div class="col-md-6">
                        <section class="article2">
                            <h2 class="text-center">Titre</h2>
                            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                            <input type="button" value="Read More">
                        </section>
                        <section class="article2">
                            <div>
                                <h2 class="text-center">Titre</h2>
                                <img src="image/forza-motorsport-4_1920x1080.jpg" alt="">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint hic distinctio tempora commodi quam laborum suscipit? Dignissimos asperiores esse odio similique necessitatibus provident minima molestiae consequuntur vitae nulla, totam animi?</p>
                                <input type="button" value="Read More">
                            </div>
                        </section>
                    </div>
                                              
                
                        <div class="col-md-6">
                            <section class="article2">
                                <h2 class="text-center">Titre</h2>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                                <input type="button" value="Read More">
                            </section>
                            <section class="article2">
                                <div>
                                    <h2 class="text-center">Titre</h2>
                                    <img src="image/forza-motorsport-4_1920x1080.jpg" alt="">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint hic distinctio tempora commodi quam laborum suscipit? Dignissimos asperiores esse odio similique necessitatibus provident minima molestiae consequuntur vitae nulla, totam animi?</p>
                                    <input type="button" value="Read More">
                                </div>
                            </section>
                        </div>
                </div>  
                
                <footer>
                    <h5> <a href="#"> Lien </a> </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisici</p>
                    <nav class="navFooter">
                        <a href="#" class="social"><i class="fa fa-facebook-square"></i> Facebook</a>
                       <a href="#"  class="social"><i class="fa fa-twitter"></i> Twitter</a> 
                    </nav>
                </footer>
            </div>
    </div>



    </div>



<script src="Publics/js/jquery.min.js"></script>
<script src="Publics/js/bootstrap.min.js"></script>
<script src="Publics/js/main.js"></script>
</body>
</html>
