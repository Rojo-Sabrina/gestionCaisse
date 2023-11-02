<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Article</title>
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

                  <form class="row g-3 needs-validation" method="POST" action="Controller/acheterController.php">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Identifiant</label>
                      <div class="input-group has-validation">
                        <input type="number" class="form-control" id="yourUsername" required
                        name="id_achat" readonly="readonly" value="<?php echo $ligne[0]?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Quantité</label>
                      <input type="number" class="form-control" id="yourPassword" required
                      name="quantite"  value="<?php echo $ligne[1]?>">
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Montant total</label>
                      <input type="number" class="form-control" id="yourPassword" required
                      name="montant_tota" value="<?php echo $ligne[2]?>">
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
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Article</title>
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

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
   <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Mini Shop</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->
  </ul><!-- End Messages Dropdown Items -->
    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Menu</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listfou">
          <i class="bi bi-cart-plus"></i>
          <span>Fournisseur</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listbone">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Bon d'entrée</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listent">
          <i class="bi bi-bag-plus"></i>
          <span>Entrer</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listpre">
          <i class="bi bi-back"></i>
          <span>Présentation</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listart">
          <i class="bi bi-speaker"></i>
          <span>Article</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listcat">
          <i class="bi bi-snow3"></i>
          <span>Catégorie </span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listach">
          <i class="bi bi-cart3"></i>
          <span>Acheter</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listbons">
          <i class="bi bi-box-arrow-right"></i>
          <span>Bon de sortie </span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listcli">
          <i class="bi bi-people"></i>
          <span>Clients</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listuti">
          <i class="bi bi-people-fill"></i>
          <span>Utilisateur</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listmod">
          <i class="bi bi-currency-exchange"></i>
          <span>Mode de paiement</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?ok=listfac">
          <i class="bi bi-file-earmark-text"></i>
          <span>Facture</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
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

                  <form class="row g-3 needs-validation" method="POST" action="Controller/acheterController.php">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Identifiant</label>
                      <div class="input-group has-validation">
                        <input type="number" class="form-control" id="yourUsername" required
                        name="id_achat" readonly="readonly" value="<?php echo $ligne[0]?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Quantité</label>
                      <input type="number" class="form-control" id="yourPassword" required
                      name="quantite"  value="<?php echo $ligne[1]?>">
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Montant total</label>
                      <input type="number" class="form-control" id="yourPassword" required
                      name="montant_total" value="<?php echo $ligne[2]?>">
                    </div>

                    <div>
                <label>Nom article</label>
                <select class="form-select" name="id_article">
                    <option value="">Choisissez l'article</option>
                    <?php
                        require_once 'Model/db.php';
                        require_once 'Model/article.php';
                        $lisc = listArticle();
                        while ($cligne = mysqli_fetch_row($lisc)) {
                            echo "<option value='$cligne[0]'>$cligne[1]</option>";
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
                        while ($cligne = mysqli_fetch_row($lisc)) {
                            echo "<option value='$cligne[0]'>$cligne[1]</option>";
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
                        while ($cligne = mysqli_fetch_row($lisc)) {
                            echo "<option value='$cligne[0]'>$cligne[1]</option>";
                        } 
                    ?>
                </select>           
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