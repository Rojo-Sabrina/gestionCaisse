<?php
require_once '../Model/db.php';
require_once '../Model/article.php';
//Ajout
if (isset($_POST['valider'])){
    $code = $_POST['code_barre'];
    $nom = $_POST['nom_article'];
    $prix = $_POST['prix_unitaire'];
    $idc = $_POST['id_categorie'];
    addArticle($code,$nom,$prix,$idc);
    header("location:http://localhost/gestioncaisse/?ok=listart");
}
//Suppression
if (isset($_GET['id_article'])){
    deleteArticle($_GET['id_article']);
    header("location:http://localhost/gestioncaisse/?ok=listart");
}
//Modification
if (isset($_POST['modifier'])){
    $id = $_POST['id_article'];
    $code= $_POST['code_barre'];
    $nom = $_POST['nom_article'];
    $prix = $_POST['prix_unitaire'];
    $idc = $_POST['id_categorie'];
    updateArticle($id,$code,$nom,$prix,$idc);
    header("location:http://localhost/gestioncaisse/?ok=listart");
}
?>