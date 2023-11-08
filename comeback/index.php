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
    <meta name="description" content="On vous promet tout ce qu'il faut savoir en un seul mail par semaine.">

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

        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    <!--  -->

    <title>Come back • datkominformatics | Entreprise Informatique</title>
    <style>
        .wif{
            border: 1px solid #313131;
            border-radius: 15px;
        }
        #whatif {
            color: #087CEE;
            font-size: 70px;
        }
        #whatif strong{
            color: #87CEEB;
        }
        #reload{
            background-color: #87CEEB;
            border-radius: 50%;
            color: #FFF;
            border: none;
            padding: 1.2%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .subtn{
            background-color: #87CEEB;
            color: #FFF;
        }
        input, button{
            font-family: 'Gilroy_Light' !important;
        }
        #weblink{
            color: #087CEE;
            text-decoration: underline !important;
        }
        #weblink:hover{
            color: #fec401;
            text-decoration: underline !important;
        }
    </style>
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

    <!-- Content -->
    <div class="container-fluid">

        <div class="row p-5 justify-content-center p-2">

            <div class="col-md-8 mt-2 col-5 p-5 text-center wif">

                <h1 id="whatif">
                    Et si pour le<br>come back, <img src="../assets/img/Brands/Logo-Blue.svg" alt="logo" width="10%"><br>
                    <strong id="ideas">...</strong>
                    <button id="reload" onclick="randomWord()"><i data-feather="rotate-ccw"></i></button>
                </h1>
                
                <br>

                <div class="row justify-content-center">

                    <div class="col-md-7">

                        <form action="" method="post">

                            <div class="input-group input-group-lg mb-3">

                                <input type="text" name="nom" class="form-control" placeholder="Donne ta réponse">
                                <button class="btn subtn" name="submit" type="submit" id="button-addon2">Envoyer</button>

                            </div>

                        </form>

                    </div>

                </div>

                <br>
                <a href="https://www.datkominformatics.com" id="weblink">datkominformatics.com</a>

            </div>

        </div>

    </div>


    <script>

        feather.replace();

        //Preloader
        $(window).on("load", function(){ 
        // Preloader 
            $('#loader').fadeOut('slow');
            $('.ios-loader').fadeOut('slow'); 
        });  

        let randomWords = [
            "organisait un évènement",
            "créait un émoji",
            "faisait de l'humour", 
            "écrivait un livre",
            "adoptait un animal"];
        let wordDiv = document.getElementById( 'ideas' );

        function randomWord() {
            wordDiv.innerHTML = randomWords[ Math.floor(  Math.random() * randomWords.length ) ];
        }

    </script>


</body>
</html>
<?php 

    if(isset($_POST['submit'])){

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // 

    $reponse = trim(addslashes($_POST['nom']));
    
    

    if(empty($reponse)){
      ?>
      
        <script>
          swal("Oops...", "Aucune réponse n'a été donnée!", "error");
        </script>

      <?php
    } else{

      $sql = $conn -> query("INSERT INTO `comeback` (`reponse`) VALUES('$reponse')");

      if($sql) {
        ?>

          <script>
            swal("Super","Nous avons reçus votre réoonse", "success");
          </script>

        <?php
      } 
      else {
        ?>

          <script>
            swal("Oops...", "Quelque chose s'est mal placée :(", "error");
          </script>

        <?php
      }
      mysqli_close($conn);

    }

  }


?>
