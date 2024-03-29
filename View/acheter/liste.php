<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="./Script/script.js"></script>
    <title>Liste Achat</title>
     <!-- Favicons -->
   <link href="assets/img/favicon.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<div>
      <?php require_once('menu.php'); ?>
    </div>

  <div>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Liste des Achats</h1>
        <nav>
          <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.php">Menu</a></li>
           <li class="breadcrumb-item">Achat</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Liste des achats</h5>
                <button type="button" class="btn btn-primary" style=" position: absolute; top: 75px; left: 1170px;" data-bs-toggle="modal" data-bs-target="#basicModal">
                  Ajout achat
                </button>
                <div class="modal fade" id="basicModal" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Formulaire d'ajout d'achat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!--formulaire ajout-->
                        <form class="row g-3" method="POST" action="Controller/acheterController.php">
                          <div class="col-12">
                            <label for="qte" class="form-label">Quantité</label>
                              <input type="number" class="form-control" id="qte" name="quantite">
                          </div>

                          <div class="col-12">
                            <label for="montant" class="form-label">Montant total</label>
                            <input type="number" class="form-control" id="montant" name="montant_total">
                          </div>
                                
                          <div>
                            <label>Article</label>
                            <select class="form-select" name="id_article">
                              <option value="">Choisissez l'article</option>
                              <?php
                                require_once 'Model/db.php';
                                require_once 'Model/article.php';
                                $lisc = listArticle();
                                while ($ligne = mysqli_fetch_row($lisc)) {
                                echo "<option value='$ligne[0]'>$ligne[2]</option>";
                                } 
                              ?>
                            </select>
                          </div>

                          <div>
                            <label>Présentation</label>
                            <select class="form-select" name="id_presentation">
                              <option value="">Choisissez la présentation</option>
                              <?php
                                require_once 'Model/db.php';
                                require_once 'Model/presentation.php';
                                $lisc = listPresentation();
                                while ($ligne = mysqli_fetch_row($lisc)) {
                                echo "<option value='$ligne[0]'>$ligne[1]</option>";
                                } 
                              ?>
                            </select>
                          </div>

                          <div>
                           <label>N° Bon de sortie</label>
                           <select class="form-select" name="num_bonsortie">
                              <option value="">Choisissez le bon de sortie</option>
                              <?php
                               require_once 'Model/db.php';
                               require_once 'Model/bonsortie.php';
                               $lisc = listBonsortie();
                               while ($ligne = mysqli_fetch_row($lisc)) {
                               echo "<option value='$ligne[0]'>$ligne[1]</option>";
                               } 
                              ?>
                           </select>
                          </div>

                          <div class="text-center">
                            <button type="submit" name="valider" class="btn btn-primary">Ajouter</button>
                            <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
                          </div>
                        </form><!-- Vertical Form -->
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
            </div>
          </div>
        </div>
      </select>
      <table class="table datatable table-striped">
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Quantité</th>
                <th scope="col">Montant total</th>
                <th scope="col">Nom article</th>
                <th scope="col">Présentation</th>
                <th scope="col">N° Bon de sortie</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Modifier</th>
            </tr>
            <tr>
                <?php
                    while ($svg = mysqli_fetch_row($link)) {
                        echo "<tr>
                        <td>$svg[0]</td>
                        <td>$svg[1]</td>
                        <td>$svg[2]</td>
                        <td>$svg[3]</td>
                        <td>$svg[4]</td>
                        <td>$svg[5]</td>
                        <td><a href='Controller/acheterController.php?id_achat=$svg[0]'
                        onclick ='return confirmation();'> <img src='assets/img/supprimer.jpg' width='50' height='50'>
                        </a></td>
                        <td><a href='?ok=editach&id_achat=$svg[0]'><img src='assets/img/icone modifier.jpg' width='50' height='50'>
                        </a></td>
                            </tr>";
                    }
                ?>              
            </tr>
      </table> 

    </main><!-- End #main -->
  </div>

    
     
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>