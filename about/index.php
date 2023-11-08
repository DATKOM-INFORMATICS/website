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

        <div class="container-fluid"  id="about-header-cta">

            <div class="container header-cta">

                <div class="row justify-content-center">
    
                    <div class="col-md-12 text-center">
    
                        <h1 id="exp-header-title">La vision nous porte toujours plus loin.</h1>

                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Vision -->

        <div class="container mb-5">

            <div class="row justify-content-center responsive-none">

                <div class="col-md-10">
                    <img src="https://images.unsplash.com/photo-1515444744559-7be63e1600de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" width="100%">
                </div>

            </div>  

            <div class="row justify-content-center">

                <div class="col-md-8 text-center py-4">
                    
                    <br><br>
                    <p>La création de produits excellents nécessite d'innover en sortant des sentiers battus, ce qui est une conviction profonde et permanente de notre entreprise. Nous nous définissons par l'innovation et la simplicité, et nous s'intéressons qu'aux marchés où nous pouvons apporter une contribution significative. Nous créeons des solutions numériques qui révolutionnent la vie des gens. Une collaboration étroite avec les utilisateur·ices est essentielle pour nous permettre une innovation que d'autres ne peuvent pas réaliser. Cette vision est tellement ancrée dans notre équipe qu'elle est capable de réussir n'importe quel projet, peu importe où elle se trouve.</p>
                </div>

            </div>

        </div>
    
    <!-- Vision End -->

    <!-- Mission -->

        <div class="container py-5 my-5">

            <div class="row justify-content-center">
        
                <div class="col-md-10 text-center">

                    <span>Notre Mission</span>
                    <h1 id="about-title">Améliorer la vie du plus grand nombre grâce à la technologie.</h1>
                    <br>
                </div>

            </div>        

        </div>

    <!-- Mission End -->

    <!-- Valeurs -->

        <div class="container py-5 my-5">

            <div class="row justify-content-center">

                <div class="col-md-8 text-center">

                    <br>
                    <h1 id="about-title">Nos valeurs sont au cœur de tout.</h1>

                </div>

            </div>  

            <div class="row">

                <div class="col-md-12">

                    <div class="slick-carousel">

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>1.</h6>
                                <hr>
                                <br>

                                <h3>Excellence</h3>

                                <br>
                                <p>Aucun défi n’est trop grand. Nous continuons à apprendre, à itérer et à nous améliorer.</p>
                            
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>2.</h6>
                                <hr>
                                <br>

                                <h3>Innovation</h3>

                                <br>
                                <p>Nous existons pour trouver une meilleure solution</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>3.</h6>
                                <hr>
                                <br>

                                <h3>Passion</h3>

                                <br>
                                <p>Si vous êtes passionné par votre travail, vous serez meilleur.</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>4.</h6>
                                <hr>
                                <br>

                                <h3>Inclusivité</h3>

                                <br>
                                <p>Nous nous efforçons de créer un environnement inclusif afin de bâtir une meilleure entreprise et de donner un exemple positif au monde.</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>5.</h6>
                                <hr>
                                <br>

                                <h3>Confiance</h3>

                                <br>

                                <p>Si l’on croit et que l’on fait confiance aux personnes qui nous entourent, tout est 
                                possible. C’est pourquoi nous construisons notre lieu de travail sur la confiance, 
                                le respect, l’inclusion et l’intégrité.
                                </p>
                                
                            </div>

                        </div>
                        
                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>6.</h6>
                                <hr>
                                <br>

                                <h3>Intégrité</strong></h3>

                                <br>

                                <p>Nous sommes honnêtes, transparents et déterminés à faire ce qu’il y a de mieux pour nos clients et notre entreprise.</p>
                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>7.</h6>
                                <hr>
                                <br>

                                <h3>Bien-être</h3>

                                <br>
                                <p>Vous comptez énormément.<br>Être épanoui, c’est essentiel.<br>C'est pourquoi nous poursuivons notre engagement au bien être de chacun de nos collaborateurs, ainsi que de nos utilisateur·ices.</p>                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>8.</h6>
                                <hr>
                                <br>

                                <h3>Accessibilité</h3>

                                <br>

                                <p>Les meilleurs produits pas seulement dans les bonnes mains, mais dans toutes les mains.</p>
                                
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="row justify-content-end text-end">

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

                <div class="col-md-7 text-center">

                    <h1 id="about-title">Ce qu'il y a de mieux avec notre culture, c'est d'y voir notre Mindset</h1>

                </div>

            </div>        

            <div class="row my-5">

                <div class="col-md-6">

                    <div class="culturecard">
                        <div class="card-body">
                            <h4 class="card-title" style="color: #87CEEB">Tous créatifs</h4>
                            <p class="card-text">
                            Chaque collaborateur est libre d’envisager de nouvelles approches pour 
                            résoudre des problèmes complexes, ils sont libres et encouragés à imaginer la 
                            prochaine idée qui changera le monde
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="culturecard">
                        <div class="card-body">
                            <h4 class="card-title" style="color: #87CEEB">Comme les Mugiwara</h4>
                            <p class="card-text">
                            Nous sommes des compagnons sur un même bateau<br>
                            Alors trouve ta place au sein de l'équipe et dessine, expérience après expérience, ton propre parcours.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <!-- Culture End --> 

    <br>

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/carousel.js"></script>

</body>
</html>