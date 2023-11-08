<?php 

  require_once '../../../../config/index.php';
  session_start();

  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: ../../../index.php');
    exit;
  }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>App • datkominformatics | Entreprise Informatique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../../assets/img/Brands/Logo-Blue.svg" rel="icon">
  <link href="../../../../assets/img/Brands/Logo-Blue.svg" rel="apple-touch-icon">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- App Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../../../assets/css/dashboard.css" rel="stylesheet">

  <!-- feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <!-- summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../" class="logo d-flex align-items-center">
        <img src="../../../../assets/img/Brands/Logo-Blue.svg" alt="logo">
        <span class="d-none d-lg-block">datkominformatics</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item p-2">
          
          <a href="../">
            <i data-feather="close"></i>
            Fermer
          </a>

        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <br><br><br>
  <div class="container">

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Création d'une nouvelle fiche</h5>
          
            <hr>

            <form action="" method="post" enctype="multipart/form-data">

              <label for="">Quel est le nom du produit ?</label><br>
              <input type="text" name="nom" id="" class="form-control">
              <br>
              
              <label for="">Une intro</label>
              <textarea name="intro" id="" class="form-control" cols="30" rows="3"></textarea>
              <br>

              <label for="">A propos du projet</label>
              <textarea name="about" id="" class="form-control" cols="30" rows="5"></textarea>
              <br>

              <label>Choisissez un cover</label>
              <input type="file" name="cover" class="form-control">
              <br>
              

              <label for="">Un lien du projet</label><span class="text-secondary"> ( siteweb/réseaux sociaux/... )</span><br>
              <input type="text" name="lienprojet" id="" class="form-control" placeholder="https://www.datkominformatics.com">
              <br>


              <div class="text-end">

                <button class="contact-btn">Annuler</button>
                <button type="submit" name="submit" class="contact-btn" id="contact-submit">Envoyer</button>

              </div>

            </form>

          </div>
        </div>

      </div>
    </div>

  </div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i data-feather="arrow-up"></i></a>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    
    feather.replace();

    $(document).ready(function() {
        $('.datatable').DataTable();
    } );

    $('#summernote').summernote({
      height: 290, 
    });

  </script>

  <!-- sweet alert -->


</body>
</html>
<?php 

  if(isset($_POST['submit'])){

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // 

    $nom = trim(addslashes($_POST['nom']));
    $intro = trim($_POST['intro']);
    $about = $_POST['about'];
    $lienprojet = trim($_POST['lienprojet']);

    //Cover
      $output_dir = "../../../../assets/img/products/cover/";/* Path for file upload */

      /* Try to create the directory if it does not exist */
      if (!file_exists($output_dir)){
        @mkdir($output_dir, 0777);
      }      
      move_uploaded_file($_FILES["cover"]["tmp_name"],$output_dir . $_FILES["cover"]["name"]);
      $cover = $_FILES["cover"]["name"];         

    // Cover end
    

    if(empty($nom) && empty($about) && empty($lienprojet)){
      ?>
      
        <script>
          swal("Oops...", "les champs nom & catégorie principale sont vides :(", "error");
        </script>

      <?php
    } else{

      $sql = $conn -> query("INSERT INTO `products` (`nom`, `intro`, `about`, `cover`,`lien`) VALUES('$nom','$intro','$about','$cover','$lienprojet')");

      if($sql) {
        ?>

          <script>
            swal("Réussi","Votre fiche a été ajoutéé", "success");
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
