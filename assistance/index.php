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
    
    <title>Assistance • datkominformatics | Entreprise Informatique</title>
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
    
                    <div class="col-md-12 text-start">
    
                        <h1 id="exp-header-title">Bonjour, comment pouvons-nous vous aider ?</h1>

                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Vision -->

        <div class="container mb-5">

            
            <div class="row">

                <div class="col-md-7 responsive-textcenter">
                    
                    <h3>Aide et assistance</h3>   
                    <p>Vous avez des questions ou vous souhaitez signaler un problème concernant un produit ou un service ? Nous sommes là pour vous aider.</p>
                    <a href="mailto:support@datkominformatics.com">Obtenir de l'aide</a>

                    <br><br>

                    <h3>Nous contacter</h3>
                    <p>Vous souhaitez travailler avec nous, ou simplement nous dire bonjour ?</p>
                    <a href="mailto:bonjour@datkominformatics.com">Engagez la discussion</a>
                
                </div>

            </div>

        </div>
    
    <!-- Vision End -->

    <br>

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/carousel.js"></script>

</body>
</html>