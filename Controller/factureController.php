<?php
require_once '../Model/db.php';
require_once '../Model/facture.php';
//Ajout
if (isset($_POST['valider'])){
    $remise = $_POST['remise_total'];
    $num = $_POST['num_bonsortie'];
    $mp = $_POST['id_mode_paiement'];
    $iduti = $_POST['id_utilisateur'];
    addFacture($remise,$num,$mp,$iduti);
    header("location:http://localhost/gestioncaisse/?ok=listfac");
}
//Suppression
if (isset($_GET['id_facture'])){
    deleteFacture($_GET['id_facture']);
    header("location:http://localhost/gestioncaisse/?ok=listfac");
}
//Modification
if (isset($_POST['modifier'])){
    $idf = $_POST['id_facture'];
    $remise= $_POST['remise_total'];
    $num = $_POST['num_bonsortie'];
    $mp = $_POST['id_mode_paiement'];
    $iduti = $_POST['id_utilisateur'];
    updateFacture($idf,$remise,$num,$mp,$iduti);
    header("location:http://localhost/gestioncaisse/?ok=listfac");
}
?>