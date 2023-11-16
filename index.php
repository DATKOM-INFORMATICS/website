<?php 

    require_once 'config/index.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Découvrez le mode innovant de DATKOM-INFORMATICS et participez à des expériences immersives.">
    <meta property="og:image" content="assets/img/Brands/LogoBlue.jpg" >

    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/Brands/Logo-Blue.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/Brands/Logo-Blue.svg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>


    <!-- Links -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- CNDs -->

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Slick -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <!--  -->

    <title>datkominformatics | Entreprise Informatique</title>
</head>
<body>
    
    <!-- Loader -->

        <div id="loader">

            <div class="ios-loader">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
                <div class="bar bar10"></div>
                <div class="bar bar11"></div>
                <div class="bar bar12"></div>
            </div>

        </div>

    <!-- End loader -->

    <!-- Header Nav -->

    <div class="head-top"></div>
    <div class="container-fluid" id="header-navbar">

        <div class="row">

            <div class="col-md-3 col-5">

                <a href="" class="brand-logo" data-stick-cursor>
                    <img id="logo-abbr" src="assets/img/Brands/Logo-Blue.svg" alt="logo">
                </a>

            </div>

            <div class="col-md-8 col-5"></div>

            <div class="col-md-1 col-2">

                <div class="button_container" id="toggle" data-stick-cursor>

                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

        <!-- Burger Navigation -->
        <div class="burgerMenu" id="overlay">

            <div class="container-fluid">

                <div class="row justify-content-end">

                    <div class="col-md-9">
                        
                        <nav class="overlay-menu">

                            <ul>

                                <li><a href="./">Accueil</a></li>
        
                                <li><a href="apps/">Apps</a></li>

                                <li><a href="about/">A propos de nous</a></li>

                                <li><a href="assistance/">Assistance</a></li>

        
                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <a href="apps/connect/">
            <div class="container-fluid header-cta" id="homepage-header-cta">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">

                            <img src="assets/img/Brands/connect.png" alt="" width="10%">
                            <h1>Une expérience<br>puissamment<br>connectée.</h1>
                            <div class="homepage-links">
                                <a href="https://connectnow.fr/features/">Les nouveautés</a>
                                <a href="https://connectnow.fr/dl" id="dld">Télécharger</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </a>

    <!-- Header CTA End -->

    <!-- transition Container -->

        <div class="container-fluid pt-2" id="woven">

                <div class="container ">

                    <div class="row justify-content-center">

                        <div class="col-md-8 py-5 my-5 justify-content-center text-center">

                            <br>
                            <h1>Creativité, Design & Code.<br>Profondément liés.</h1>
                            <br>
                            <p>Nous concevons nos produits en intégrant des capacités et des expériences utilisateur uniques pour former un véritable écosystème. Nous développons des technologies qui permettent aux utilisateur·ices de rester connectés, de trouver de nouvelles communautés et de développer leurs activités.</p>
                            <br>
                            <a href="about/">Découvrez l'entreprise</a>

                        </div>

                    </div>

                

                </div>

        </div>

    <!-- transition Container End -->

    <!-- Last Programs -->
    
        <div class="container py-5 my-5">

            <div class="row justify-content-center">

                <div class="col-md-8 text-center justify-content-center">
                
                    <span>Inside 2024</span>
                    <h1 id="beyond">Encore plus grand.</h1>
                    <p>"Inside", met en lumière nos principales réalisations de l'année.</p>
                    <a href="inside/">En savoir plus</a>

                </div>

            </div>

        </div>
        

    <!-- Last Programs -->

    <!-- Footer -->

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-4" id="liensUtiles">
                        <p style="color: #fff">Nous suivre</p>
                        <a href="https://www.instagram.com/datkominformatics/">Instagram</a> <br>
                        <a href="https://twitter.com/datkominfrmtics">Twitter</a>
                    </div>

                    <div class="col-md-4" id="liensUtiles">
                        <p style="color: #fff">À propos</p>
                        <a href="https://www.datkominformatics.com/about/">L'entreprise</a> <br>
                        <a href="https://www.datkominformatics.com/apps/">Les apps</a> <br>
                        <a href="https://www.datkominformatics.com/assistance/">Assistance</a> <br>
                        <a href="mailto:bonjour@datkominformatics.com">Nous contacter</a>
                    </div>

                </div>    

                <hr style="color: #fff">

                <div class="row mt-5 homepage-footer-juridical">

                    <div class="col-md-9">

                        <a href="../"data-stick-cursor>
                            <img id="logo-abbr" src="assets/img/Brands/Logo-White.svg" alt="logo">
                        </a>

                        <span class="px-3"> Copyright © <script>document.write(new Date().getFullYear())</script> DATKOM INFORMATICS. Tous droits réservés.</span>

                        <!-- <a href="">Mentions Legales</a>
                        <a href="">Politique de confidentialité</a> -->

                    </div>

                </div>

            </div>

        </footer>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/carousel.js"></script>

</body>
</html>