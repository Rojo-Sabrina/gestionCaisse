<?php
require_once '../Model/db.php';
require_once '../Model/fournisseur.php';
//Ajout
if (isset($_POST['valider'])){
    $nom = $_POST['nom_fournisseur'];
    $adr = $_POST['adresse'];
    $con = $_POST['contact'];
    addFournisseur($nom,$adr,$con );
    header("location:http://localhost/gestioncaisse/?ok=listfou");
}
//Suppression
if (isset($_GET['id_fournisseur'])){
    deleteFournisseur($_GET['id_fournisseur']);
    header("location:http://localhost/gestioncaisse/?ok=listfou");
}
//Modification
if (isset($_POST['modifier'])){
    $id_fournisseur = $_POST['id_fournisseur'];
    $nom_fournisseur = $_POST['nom_fournisseur'];
    $adresse = $_POST['adresse'];
    $contact = $_POST['contact'];
    updateFournisseur($id_fournisseur,$nom_fournisseur, $adresse,$contact );
    header("location:http://localhost/gestioncaisse/?ok=listfou");
}
?>