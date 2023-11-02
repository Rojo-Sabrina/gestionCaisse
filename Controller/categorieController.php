<?php
require_once '../Model/db.php';
require_once '../Model/categorie.php';
//Ajout
if (isset($_POST['valider'])){
    $nom = $_POST['nom_categorie'];
    addCategorie($nom);
    header("location:http://localhost/gestioncaisse/?ok=listcat");
}
//Suppression
if (isset($_GET['id_categorie'])){
    deleteCategorie($_GET['id_categorie']);
    header("location:http://localhost/gestioncaisse/?ok=listcat");
}
//Modification
if (isset($_POST['modifier'])){
    $id_categorie = $_POST['id_categorie'];
    $nom_categorie = $_POST['nom_categorie'];
    updateCategorie($id_categorie, $nom_categorie);
    header("location:http://localhost/gestioncaisse/?ok=listcat");
}
?>