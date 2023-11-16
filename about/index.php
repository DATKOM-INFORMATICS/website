<?php 

    require_once '../config/index.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Notre lieu secret où nos créatifs donnent vie à vos rêves.">

    <!-- icon -->
    <link rel="shortcut icon" href="../assets/img/Brands/Logo-Blue.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/img/Brands/Logo-Blue.svg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>


    <!-- Links -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

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
    
    <title>A propos • datkominformatics | Entreprise Informatique</title>
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

    <!-- Header Nav -->

        <?php include_once '../components/headernav.php'; ?>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid"  id="products-header-cta">

            <div class="container header-cta">

                <div class="row justify-content-center">
    
                    <div class="col-md-12 text-center">
    
                        <h1 id="products-header-title">La barre est placée haut.<br>Et nous visons plus<br>haut encore.</h1>
                        <p class="text-white">Apprenez-en davantage sur nous.</p>
    
                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Vision -->

        <div class="container py-5 my-5">

                <div class="row justify-content-center">
    
                    <div class="col-md-10">
    
                        <p>Notre Vision</p>
                        <h1 id="about-title">Plus grande et plus<br>claire pour vous.</h1>
                        <p class="about-text col-md-8">Être la référence mondiale de l'innovation numérique, en créant des produits simples et utiles qui révolutionnent la vie des gens.</p>

                    </div>
    
                </div>
    
        </div>
    
    <!-- Vision End -->

    <!-- Mission -->

        <div class="container py-5 my-5">

            <div class="row justify-content-center">
        
                <div class="col-md-10">

                    <p>Notre Mission</p>
                    <h1 id="about-title">Innovation pour<br>tout le monde.</h1>
                    <p class="about-text col-md-8">Créer des solutions numériques innovantes et simples qui révolutionnent la façon dont les gens vivent, travaillent et interagissent.</p>

                </div>

            </div>        

        </div>

    <!-- Mission End -->

    <!-- Valeurs -->

        <div class="container py-5 my-5">

            <div class="row justify-content-center">

                <div class="col-md-10">

                    <br>
                    <h1 id="about-title">Nos valeurs sont au cœur de tout.</h1>

                </div>

            </div>  

            <div class="row justify-content-center">

                <div class="col-md-1O">

                    <div class="slick-carousel">

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h3>Excellence</h3>

                                <p>Nous nous efforçons d'être les meilleurs dans ce que nous faisons.</p>
                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h3>Innovation</h3>

                                <p>Nous existons pour trouver une meilleure solution.</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h3>Intégration</h3>

                                <p>Nous créons un environnement inclusif et respectueux.</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h3>Accessibilité</h3>

                                <p>Nous nous engageons à rendre nos produits et services accessibles à tous.</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center text-center">

                <div class="col-md-6">

                    <a href="" class="Prec-btn"><i data-feather="arrow-left"></i></a>
                    <a href="" class="Suiv-btn"><i data-feather="arrow-right"></i></a>

                </div>

            </div>

        </div>

    <!-- Valeurs End -->

    <!-- Culture -->

        <div class="container pb-5">

            <div class="row justify-content-center">

                <div class="col-md-10 text-center">

                    <p>Notre culture</p>
                    <h1 id="about-title">L'humain d'abord.</h1>
                    <br>
                </div>

            </div>        

            <div class="row justify-content-center my-1">

                <div class="col-md-4">

                    <div class="culturecard" style="background-color: #087CEE;">
                        <div class="px-3 text-center">
                            <br>
                            <h2 class="card-title" style="color: #fff">Chaque voix peut ouvrir de nouvelles voies.</h2>
                            <br>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="culturecard">
                        <div class="px-3 text-center">
                            <br>
                            <h2 class="card-title" style="color: #087CEE">Ensemble aujourd'hui.<br>Et chaque jour.</h2>
                            <br>
                        </div>
                    </div>

                </div>


            </div>

        </div>

    <!-- Culture End --> 

    <!-- Projection -->

        <div class="container py-5 my-5">

            <div class="row justify-content-center">

                <div class="col-md-10 text-center">

                    <p>Initiative en action</p>
                    <h1 id="about-title">Et ce n'est que le début.</h1>
                    
                </div>

            </div>

        </div>

    <!-- Projection End --> 

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/carousel.js"></script>

</body>
</html>