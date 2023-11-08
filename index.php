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
        
                                <li><a href="products/">Produits</a></li>
        
                                <li><a href="experiences/">Expériences</a></li>

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

        <div class="container-fluid header-cta" id="homepage-header-cta">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h1>Améliorer la vie du plus grand nombre grâce à la technologie.</h1>
                    <a href="about/">En savoir plus sur notre mission</a>

                </div>

            </div>

        </div>

    <!-- Header CTA End -->

    <!-- transition Container -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-10 justify-content-center">
                    <img src="https://images.unsplash.com/photo-1670272506154-080063eee4be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="" width="100%">
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-md-8 text-center p-4 justify-content-center">
                    
                    <img src="assets/img/Brands/Logo-Blue.svg" alt="logo" width="5%">
                    <br><br>
                    <p>Nous développons des technologies qui permettent aux utilisateur·ices de rester connectés, de trouver de nouvelles communautés et de développer leurs activités. </p>
                </div>

            </div>

        </div>

    <!-- transition Container End -->

    <!-- Last Product Studio -->

        <?php 
                                

            $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($conn, $sql);
                                
            $row_cnt = $query->num_rows;

            if($row_cnt > 0){
                                            
            ?>

            <?php 

                while (($dream = mysqli_fetch_assoc($query))){
                                        
            ?>

            <div class="container">

                <div class="row justify-content-center">

                    <a href="products/creation/?nom=<?= $dream['nom'];?>" class="item" 
                       style="background-image: linear-gradient(#FFF, #313131), url('assets/img/products/cover/<?= $dream['cover'];?>'); background-blend-mode: multiply; background-size: cover;"
                    >

                        <div class="prodText">
                            <p style="color: #FEC401">Nouveau</p>
                            <h2 style="color: #FFF"><?= $dream['nom'];?></h2>
                            <p style="color: #FFF"><?= $dream['intro'];?></p>
                            <p>En savoir plus</p>
                        </div>

                    </a>

                </div>

            </div>

            <?php } ?>

            <?php }

            else { ?>

            <div class="container-fluid pt-2" id="woven">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-md-9 py-5 justify-content-center text-center">

                            <br>
                            <h2>Creativité, Design & Code.<br>Profondément liés.</h2>
                            <br>
                            <p>Nos créateur·ices🤯 font de l'imagination une réalité✨<br>Dès qu'il y aura du nouveau, nous vous en informerons ici.</p>
                            <br>

                        </div>

                    </div>

                

                </div>

            </div>
                                    
            <?php }

        ?>
    
    <!-- Last Product End -->

    <!-- Last Programs -->
    
        <div class="container my-5">

            <div class="row justify-content-center">

                <div class="col-md-8 text-center justify-content-center">
                    
                    <h2 id="beyond">To infinity and beyond</h2>
                    <p>Nous dépassons les frontières pour proposer des expériences immersives dans le digital, et contribuer à la grande évolution des technologies sociales.</p>

                </div>

            </div>

        </div>
        
        <?php 
                                

            $sql = "SELECT * FROM experiences ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($conn, $sql);
                                
            $row_cnt = $query->num_rows;

            if($row_cnt > 0){
                                            
            ?>

            <?php 

                while (($dream = mysqli_fetch_assoc($query))){
                                        
            ?>

            <div class="container">

                <div class="row justify-content-center">

                    <a href="experiences/creation/?nom=<?= $dream['nom'];?>" class="item" 
                    style="background-image: linear-gradient(#FFF, #313131), url('assets/img/experiences/cover/<?= $dream['cover'];?>'); background-blend-mode: multiply; background-size: cover;"
                    >

                        <div class="prodText">
                            <p style="color: #FEC401">Nouveau</p>
                            <h2 style="color: #FFF"><?= $dream['nom'];?></h2>
                            <p style="color: #FFF"><?= $dream['intro'];?></p>
                            <p>En savoir plus</p>
                        </div>

                    </a>

                </div>

            </div>

            <?php } ?>

            <?php }

            else { ?>

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-md-9 justify-content-center text-center">

                            <img src="https://images.unsplash.com/photo-1614121181207-4b6c334d353d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80" alt="" width="80%">

                        </div>

                    </div>

                

                </div>
                <br><br>
                                    
            <?php }

        ?>

    <!-- Last Programs -->

    <!-- Last before -->

        <div class="container my-5">

            <div class="row">

                <div class="col-md-6 responsive-textcenter">

                    <span>Vision percutante</span>
                    <h3>Nous imaginons l’avenir en nous appuyant sur l'accessibilité, la confiance et l’inclusivité</h3>
                    <a href="about/">En savoir plus</a>

                </div>

                <div class="col-md-4">

                    <hr class="responsive-none">

                </div>

            </div>

            <br><br>

            <div class="row  responsive-none">

                <div class="col-md-8">
                    <hr>
                </div>

            </div>

        </div>

    <!-- Last Before End -->

    <!-- Footer -->

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-2">
                    <p style="color: #fff">Nous suivre</p>
                </div>

                <div class="col-md-9" id="liensUtiles">

                    <a href="https://www.instagram.com/datkominformatics/">Instagram</a>
                    <a href="https://twitter.com/datkominfrmtics">Twitter</a>

                </div>

            </div>    

            <hr style="color: #fff">

            <div class="row">

                <div class="col-md-4" id="footer-contact">

                    <a href="mailto:bonjour@datkominformatics.com"><i data-feather="mail"></i>  bonjour@datkominformatics.com</a> <br>
                    <hr style="color: #fff;">
                
                </div>

                <div class="col-md-4" id="liensPrincipales">

                    <a href="about">L'entreprise</a> <br>
                    <a href="products/">Les produits</a> <br>
                    <a href="experiences/">Les expériences</a> <br>
                    <a href="assistance/">Assistance</a>

                </div>


                <div class="col-md-4" id="liensUtiles">

                    <!-- <a href="../blog/">Blog</a> <br> -->
                    <a href="newsletters/">Newsletters</a> <br>

                </div>

            </div>

            <div class="row homepage-footer-juridical">

                <div class="col-md-9">

                    <a href="../"data-stick-cursor>
                        <img id="logo-abbr" src="assets/img/Brands/Logo-White.svg" alt="logo">
                    </a>

                    <span class="px-3">© <script>document.write(new Date().getFullYear())</script> DATKOM INFORMATICS</span>

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