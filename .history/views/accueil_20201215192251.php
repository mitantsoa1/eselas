<?php
// session_start();
include_once('Controls/Controllers.class.php');
if(!isset($_SESSION['user'])){
    Controllers::loadView("indexViews.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eselas</title>
    <link rel="stylesheet" href="Publics/vendor4/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Publics/vendor4/font-awesome4/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/style.css">
    <link rel="stylesheet" href="Publics/navigation.css">


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100" >

<!-- header -->

    <div class="container-fluid">
        
        <nav class="navbar navbar-fixed-top loader-hidden" id="mainNav" style="background-color: cyan;margin: 150px;">
        <div class="container ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img class="img" id="logo" src="Publics/image/page3-img1.png" alt="Logo ">
                </a>
            </div>
        
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#menu1" class="js-scroll-trigger">Menu1</a>
                    </li>
                    <li>
                        <a href="#menu2" class="js-scroll-trigger">Menu2</a>
                    </li>
                    <li>
                        <a href="#menu3" class="js-scroll-trigger">Menu3</a>
                    </li>
                    <li>
                        <a href="#menu4" class="js-scroll-trigger">Menu4</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
       
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
<a href="francais" class="btn btn-info">français</a>
                <footer>
                    <h5> <a href="#"> Lien </a> </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisici</p>
                    <nav class="navFooter">
                        <a href="#" class="social"><i class="fa fa-facebook-square"></i> Facebook</a>
                       <a href="#"  class="social"><i class="fa fa-twitter"></i> Twitter</a> 
                    </nav>
                </footer>
            </div>
</body>
</html>