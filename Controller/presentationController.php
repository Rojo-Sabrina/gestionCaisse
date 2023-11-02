<?php
require_once '../Model/db.php';
require_once '../Model/presentation.php';
//Ajout
if (isset($_POST['valider'])){
    $lib = $_POST['libelle'];
    $nbr = $_POST['nombre'];
    addPresentation($lib,$nbr );
    header("location:http://localhost/gestioncaisse/?ok=listpre");
}
//Suppression
if (isset($_GET['id_presentation'])){
    deletePresentation($_GET['id_presentation']);
    header("location:http://localhost/gestioncaisse/?ok=listpre");
}
//Modification
if (isset($_POST['modifier'])){
    $idpre = $_POST['id_presentation'];
    $lib = $_POST['libelle'];
    $nbr = $_POST['nombre'];
    updatePresentation($idpre,$lib, $nbr );
    header("location:http://localhost/gestioncaisse/?ok=listpre");
}
?>