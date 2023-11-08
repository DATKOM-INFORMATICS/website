<?php 

  require_once '../../../config/index.php';  
  session_start();

  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: ../../index.php');
    exit;
  }

  $resultnbr = $conn->query("SELECT COUNT(*) AS nb FROM experiences");
  $nbr_item = $resultnbr->fetch_assoc();

  $result = $conn->query("SELECT * FROM experiences ORDER BY id DESC");
  $projets = $result->fetch_all(MYSQLI_ASSOC);

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
  <link href="../../../assets/img/Brands/Logo-Blue.svg" rel="icon">
  <link href="../../../assets/img/Brands/Logo-Blue.svg" rel="apple-touch-icon">


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- data-table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- App Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../../../assets/css/dashboard.css" rel="stylesheet">

  <!-- feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</head>

<body>

  <?php include_once '../components/topheader.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">Experiences</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Experiences<br><span><?php echo $nbr_item['nb']; ?> créations</span></h5>
              
                <div>

                  <a href="add/">Creer une nouvelle fiche d'Experiences</a>

                </div>

                <hr>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Numéro</th>
                      <th scope="col">Nom</th>
                      <th scope="col">intro</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach ($projets as $projet): ?>

                    <tr>
                      <th scope="row"><?php echo $projet['id'] ?></th>                    
                      <td><?php echo $projet['nom'] ?></td>
                      <td><?php echo $projet['intro'] ?></td>
                      <td><a href="creation/?nom=<?=$projet['nom']  ?>">Voir la fiche</a></td>
                    </tr>

                  <?php endforeach ?>

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i data-feather="arrow-up"></i></a>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    
    feather.replace();

    $(document).ready(function() {
        $('.datatable').DataTable();
    } );

  </script>

</body>

</html>