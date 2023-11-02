<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
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
        <a class="nav-link collapsed" data-bs-target="#facturation" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Facturation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="facturation" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?ok=listcli">
              <i class="bi bi-circle"></i><span>Clients</span>
            </a>
          </li>
          <li>
            <a href="?ok=listfac">
              <i class="bi bi-circle"></i><span>Facture</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-basket"></i><span>Stock</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="?ok=listfou">
                <i class="bi bi-circle"></i><span>Fournisseur</span>
               </a>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Produits</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
               <ul id="charts-nav1" class="nav-content collapse" data-bs-parent="#charts-nav">
                  <li>
                    <a href="?ok=listcat">
                      <i class="bi bi-circle"></i><span>Catégorie</span>
                    </a>
                  </li>
                  <li>
                    <a href="?ok=listpre">
                      <i class="bi bi-circle"></i><span>Présentation</span>
                    </a>
                 </li>
                 <li>
                    <a href="?ok=listart">
                      <i class="bi bi-circle"></i><span>Article</span>
                    </a>
                 </li>
                </ul>
              </li>       
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admini" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-square"></i><span>Administration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admini" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?ok=listuti">
              <i class="bi bi-circle"></i><span>Utilisateur</span>
            </a>
          </li>
  
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#enregistre" data-bs-toggle="collapse" href="#">
          <i class="bi bi-save2"></i><span>Enregistrement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="enregistre" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?ok=listbone">
              <i class="bi bi-circle"></i><span>Bon d'entrée</span>
            </a>
          </li>
          <li>
            <a href="?ok=listent">
              <i class="bi bi-circle"></i><span>Entrer</span>
            </a>
          </li>
  
        </ul>
      </li><!-- End Charts Nav -->

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
        <a class="nav-link collapsed" href="?ok=listmod">
          <i class="bi bi-currency-exchange"></i>
          <span>Mode de paiement</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      
    </ul>

  </aside><!-- End Sidebar-->
<div>
    


   
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