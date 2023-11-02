<?php
require_once '../Model/db.php';
require_once '../Model/bonsortie.php';
//Ajout
if (isset($_POST['valider'])){
    $numbs = $_POST['numbs'];
    $date = $_POST['date_bonsortie'];
    $idcli = $_POST['id_clients'];
    addBonsortie($numbs,$date,$idcli);
    header("location:http://localhost/gestioncaisse/?ok=listbons");
}
//Suppression
if (isset($_GET['num_bonsortie'])){
    deleteBonsortie($_GET['num_bonsortie']);
    header("location:http://localhost/gestioncaisse/?ok=listbons");
}
//Modification
if (isset($_POST['modifier'])){
    $num = $_POST['num_bonsortie'];
    $numbs = $_POST['numbs'];
    $date= $_POST['date_bonsortie'];
    $idcli = $_POST['id_clients'];
    updateBonsortie($num,$numbs,$date,$idcli);
    header("location:http://localhost/gestioncaisse/?ok=listbons");
}
?>