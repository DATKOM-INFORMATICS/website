<?php 

    //on determine la page
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }

    require_once '../config/index.php';

    // Nombre de créa

    $resultstudio = $conn->query("SELECT COUNT(*) AS nb FROM experiences");
    $crea = $resultstudio->fetch_assoc();

    $crea_nb = (int) $crea['nb'];

    $parPage = 6;

    $pages = ceil($crea_nb/$parPage);

    $premier = ($currentPage * $parPage) - $parPage;


    $sql = "SELECT * FROM experiences ORDER BY id DESC LIMIT $premier, $parPage";
    $query = mysqli_query($conn, $sql);

    $creations = $query->fetch_all(MYSQLI_ASSOC);

    $row_cnt = $query->num_rows;


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

        <div class="container-fluid"  id="exp-header-cta">

            <div class="container header-cta">

                <div class="row justify-content-center">
    
                    <div class="col-md-12 text-center">
    
                        <h1 id="exp-header-title"><img src="../assets/img/Brands/Logo-Blue.svg" alt="logo" width="5%" id="logexp"> est une véritable solution.</h1>
                        <p>Les expériences seront construit de manière collective, et conjugueront les idées créatives et les technologies pratiques développées chaque jour par diverses personnes à l’imagination débordante.</p>
                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->

    <hr style="color: #087CEE">

    <!-- Portfolio -->

        <div class="container">

            <div class="row" id="dreamstudio-row">

                <?php 
                                
                    if($row_cnt > 0){
                
                ?>

                    <?php foreach ($creations as $creation): ?>

                        <div id="dreamstudio-case">

                            <a href="creation/?nom=<?= $creation['nom']; ?>">

                                <img src="../assets/img/experiences/cover/<?php echo $creation['cover'] ?>" alt="<?php echo $creation['nom'] ?>" width="100%">
                                <h1 id="dreamstudio-case-title"><?php echo $creation['nom'] ?></h1>
                                <h4 id="case-category" style="font-family: Gilroy_Light"><?php echo $creation['intro'] ?></h4>

                            </a>

                            <div class="row justify-content-center">

                                <div class="col-md-6 text-center">

                                    <nav class="navbar">

                                        <a class="<?= ($currentPage == 1) ? "none_page" : "" ?>" href="./?page=<?= $currentPage - 1 ?>">Page précédente</a>
                                        <a class="<?= ($currentPage == $pages) ? "none_page" : "" ?>" href="./?page=<?= $currentPage + 1 ?>">Page suivante</a>

                                    </nav>

                                </div>

                            </div>

                        </div>


                    <?php endforeach ?>

                <?php }

                    else { 
                ?>


                    <div class="row justify-content-center">

                        <div class="col-md-6">

                            <div class="py-5 text-center goodExp">

                                <i data-feather="heart"></i> <br>
                                <h3>Les bonnes<br>idées méritent<br>d'être expérimentées.</h3> 

                            </div>

                        </div>

                    </div>


                <?php } ?>

            </div>



        </div>
    
    <!-- Portfolio End -->

    <br>

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>

</body>
</html>