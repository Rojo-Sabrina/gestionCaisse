<?php
require_once '../Model/db.php';
require_once '../Model/entrer.php';
//Ajout
if (isset($_POST['valider'])){
    $qte = $_POST['quantite'];
    $dateE = $_POST['date_entree'];
    $dateP = $_POST['date_peremption'];
    $numbone = $_POST['num_bonentree'];
    $cat = $_POST['id_categorie'];
    $idart = $_POST['id_article'];
    $idpre = $_POST['id_presentation'];
    addEntrer( $qte, $dateE, $dateP, $numbone,$cat, $idart, $idpre);
    header("location:http://localhost/gestioncaisse/?ok=listent");
}
//Suppression
if (isset($_GET['id_entrer'])){
    deleteEntrer($_GET['id_entrer']);
    header("location:http://localhost/gestioncaisse/?ok=listent");
}
//Modification
if (isset($_POST['modifier'])){
    $id = $_POST['id_entrer'];
    $qte= $_POST['quantite'];
    $dateE = $_POST['date_entree'];
    $dateP = $_POST['date_peremption'];
    $numbone = $_POST['num_bonentree'];
    $cat = $_POST['id_categorie'];
    $idart = $_POST['id_article'];
    $idpre = $_POST['id_presentation'];
    updateEntrer($id,$qte,$dateE,$dateP,$numbone,$id_cat, $idart,$idpre);
    header("location:http://localhost/gestioncaisse/?ok=listent");
}
?>