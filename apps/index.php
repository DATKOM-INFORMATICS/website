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
    
    <title>Expériences • datkominformatics | Entreprise Informatique</title>
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

        <div class="container-fluid"  id="apps-header-cta">

            <div class="container header-cta">

                <div class="row justify-content-center">
    
                    <div class="col-md-9 text-center">
    
                        <h1 id="apps-header-title">Lumière sur nos apps signés.</h1>
                        <p class="about-text">Des apps aussi puissantes qu’intuitives, conçues pour créer des expériences extraordinaires.</p>
                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Apps List -->

        <div class="container pb-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-9">

                   <div class="app-card text-center p-5" id="app-connect">

                        <img src="../assets/img/Brands/connect.png" alt="" width="6%" class="my-2">
                        <h1 class="card-title">Connect - The Student Guide.</h1>
                        <p>Découvrez Connect : Le guide le plus sûr pour les étudiants étrangers en France.</p>
                        <a href="connect/">En savoir plus</a>

                    </div>

                </div>

            </div>

        </div>
    
    <!-- Apps List End -->

    <br>

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>

</body>
</html>