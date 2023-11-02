<?php
require_once '../Model/db.php';
require_once '../Model/bonentree.php';
//Ajout
if (isset($_POST['valider'])){
    $numbe = $_POST['numbe'];
    $date = $_POST['date_bonentree'];
    $idf = $_POST['id_fournisseur'];
    addBonentree($numbe,$date,$idf);
    header("location:http://localhost/gestioncaisse/?ok=listbone");
}
//Suppression
if (isset($_GET['num_bonentree'])){
    deleteBonentree($_GET['num_bonentree']);
    header("location:http://localhost/gestioncaisse/?ok=listbone");
}
//Modification
if (isset($_POST['modifier'])){
    $num = $_POST['num_bonentree'];
    $numbe= $_POST['numbe'];
    $date= $_POST['date_bonentree'];
    $idf = $_POST['id_fournisseur'];
    updateBonentree($num,$numbe,$date,$idf);
    header("location:http://localhost/gestioncaisse/?ok=listbone");
}
?>