<?php
require_once '../Model/db.php';
require_once '../Model/clients.php';
//Ajout
if (isset($_POST['valider'])){
    $nom = $_POST['nom'];
    $contact = $_POST['contact'];
    $adresse = $_POST['adresse'];
    addClients($nom,$contact,$adresse);
    header("location:http://localhost/gestioncaisse/?ok=listcli");
}
//Suppression
if (isset($_GET['id_clients'])){
    deleteClients($_GET['id_clients']);
    header("location:http://localhost/gestioncaisse/?ok=listcli");
}
//Modification
if (isset($_POST['modifier'])){
    $idcli = $_POST['id_clients'];
    $nom = $_POST['nom'];
    $contact = $_POST['contact'];
    $adresse = $_POST['adresse'];
    updateClients($idcli,$nom, $contact, $adresse );
    header("location:http://localhost/gestioncaisse/?ok=listcli");
}
?>