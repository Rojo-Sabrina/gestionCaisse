<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="./Script/script.js"></script>
    <title>Liste Fournisseur</title>
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
<h1>Liste des fournisseurs</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Menu</a></li>
    <li class="breadcrumb-item">Utilisateur</li>
    </ol>
    
    
</nav>
</div><!-- End Page Title -->

<section class="section">
<div class="row">
    <div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Liste des utilisateurs</h5>
            <button type="button" class="btn btn-primary" style=" position: absolute; top: 73px; left: 1140px;" data-bs-toggle="modal" data-bs-target="#basicModal">
                Ajout utilisateur
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Formulaire d'ajout d'utilisateur</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <!--formulaire ajout-->
                            <form class="row g-3" method="POST" action="Controller/utilisateurController.php">
                                <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nom utilisateur</label>
                                <input type="text" class="form-control" id="inputNanme4" name="nom">
                                </div>

                                <div class="col-12">
                                <label for="inputNanme4" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="inputNanme4" name="prenom">
                                </div>

                                <div class="col-12">
                                <label for="inputNanme4" class="form-label">type</label>
                                  <select class="form-control" id="inputNanme4" name="type">
                                      <option value="1">Administrateur</option>
                                      <option value="0">Employés</option>
                                 </select>
                                </div>

                                <div class="col-12">
                                <label for="inputNanme4" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="inputNanme4" name="mot_de_pass">
                                </div>
                            
                                <div class="text-center">
                                <button type="submit" name="valider" class="btn btn-primary">Ajouter</button>
                                <button type="reset" name="annuler" class="btn btn-secondary">Annuler</button>
                                </div>
                            </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
        <table class="table datatable table-striped">
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Nom utilisateur</th>
                <th scope="col">Prénom</th>
                <th scope="col">Type</th>
                <th scope="col">Mot de passe</th>
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
                        <td><a href= 'Controller/utilisateurController.php?id_utilisateur=$svg[0]'
                        onclick ='return confirmation();'> <img src='assets/img/supprimer.jpg' width='50' height='50'>
                        </a></td>
                        <td><a href='?ok=edituti&id_utilisateur=$svg[0]'><img src='assets/img/icone modifier.jpg' width='50' height='50'>
                        </a></td>
                            </tr>";
                    }
                ?>              
            </tr>
        </table> 


        </div>
    </div>
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