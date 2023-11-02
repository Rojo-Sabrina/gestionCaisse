<?php
require_once '../Model/db.php';
require_once '../Model/acheter.php';
//Ajout
if (isset($_POST['valider'])){
    $qte = $_POST['quantite'];
    $montant = $_POST['montant_total'];
    $idart = $_POST['id_article'];
    $idpre = $_POST['id_presentation'];
    $num= $_POST['num_bonsortie'];
    addAcheter($qte,$montant,$idart,$idpre,$num);
    header("location:http://localhost/gestioncaisse/?ok=listach");
}
//Suppression
if (isset($_GET['id_achat'])){
    deleteAcheter($_GET['id_achat']);
    header("location:http://localhost/gestioncaisse/?ok=listach");
}
//Modification
if (isset($_POST['modifier'])){
    $idach = $_POST['id_achat'];
    $qte= $_POST['quantite'];
    $montant = $_POST['montant_total'];
    $idart= $_POST['id_article'];
    $idpre = $_POST['id_presentation'];
    $num = $_POST['num_bonsortie'];
    updateAcheter($idach,$qte, $montant,$idart,$idpre,$num);
    header("location:http://localhost/gestioncaisse/?ok=listach");
}
?>