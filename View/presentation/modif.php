<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Catégorie</title>
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
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Mini Shop</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Formulaire de modification</h5>
                    <p class="text-center small">Veuillez saisir votre modification</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="Controller/presentationController.php">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Identifiant</label>
                      <div class="input-group has-validation">
                        <input type="number" class="form-control" id="yourUsername" required
                        name="id_presentation" readonly="readonly" value="<?php echo $ligne[0]?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="libelle" class="form-label">Libellés</label>
                      <input type="text" class="form-control" id="libelle" required
                      name="libelle"  value="<?php echo $ligne[1]?>">
                    </div>

                    <div class="col-12">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="number" class="form-control" id="nombre" required
                      name="nombre"  value="<?php echo $ligne[2]?>">
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="modifier">Soumettre</button>
                    </div>
                  </form>

              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
      
   
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