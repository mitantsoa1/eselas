<?php
session_start();

?>
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

    <div class="container-fluid">
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
                        </div>
                    </div>
                </div>
            </nav>
        </header>
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
</body>
</html>