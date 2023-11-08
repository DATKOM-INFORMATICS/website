<?php 

  require_once '../../../../config/index.php';  
  session_start();

  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: ../../../index.php');
    exit;
  }

  if(isset($_GET['nom'])){

    $nom = $_GET['nom'];

    if(empty($nom)){
      header('location: ../index.php');
    } else{


        $result = $conn->query("SELECT * FROM experiences WHERE nom = '".$nom."'");
        $projet = $result -> fetch_row();

    }

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


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- data-table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- App Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../../../assets/css/dashboard.css" rel="stylesheet">

  <!-- feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>


  <!-- Slick -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
 
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
          
          <a href="../"  class="bi bi-list toggle-sidebar-btn">
            <i data-feather="x"></i>
          </a>

        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <br><br><br>

  <div class="container">

    <div class="row">

      <div class="col-lg-12">
          
        <div class="pagetitle">
          <h1><?php echo $projet[1]; ?></h1>
        </div>

        <div class="card">

          <div class="card-body">

            <h5 class="card-title"><?php echo $projet[2]; ?></h5>
            <h6><?php echo $projet[3]; ?></h6>
            <p><?php echo $projet[3]; ?></p>
            <a href="<?php echo $projet[5]; ?>" target="_blank" rel="noopener noreferrer"><i data-feather="external-link"></i></a>

            <hr>

            <img src="../../../../assets/img/experiences/cover/<?php echo $projet[4]; ?>" alt="" width="100%">

            <hr>


          </div>

        </div>

      </div>

    </div>

  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i data-feather="arrow-up"></i></a>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    
    feather.replace();

    $(document).ready(function() {
        $('.datatable').DataTable();
    } );

  </script>

  <script>

    $('.slick-carousel-creation').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.Prec-btn-crea'),
    nextArrow: $('.Suiv-btn-crea'),
    responsive: [
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
        }
        }
    ] 
    });

  </script>

</body>

</html>