<?php
require_once '../Model/db.php';
require_once '../Model/mode_paiement.php';
//Ajout
if (isset($_POST['valider'])){
    $type = $_POST['type_paiement'];
    addMode_paiement($type, );
    header("location:http://localhost/gestioncaisse/?ok=listmod");
}
//Suppression
if (isset($_GET['id_mode_paiement'])){
    deleteMode_paiement($_GET['id_mode_paiement']);
    header("location:http://localhost/gestioncaisse/?ok=listmod");
}
//Modification
if (isset($_POST['modifier'])){
    $id = $_POST['id_mode_paiement'];
    $type = $_POST['type_paiement'];
    updateMode_paiement($id,$type );
    header("location:http://localhost/gestioncaisse/?ok=listmod");
}
?>