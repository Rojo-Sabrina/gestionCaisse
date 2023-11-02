<?php
require_once '../Model/db.php';
require_once '../Model/utilisateur.php';
//Ajout
if (isset($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $type = $_POST['type'];
    $mdp = $_POST['mot_de_passe'];
    addUtilisateur($nom,$prenom,$type,$mdp );
    header("location:http://localhost/gestioncaisse/?ok=listuti");
}
//Suppression
if (isset($_GET['id_utilisateur'])){
    deleteUtilisateur($_GET['id_utilisateur']);
    header("location:http://localhost/gestioncaisse/?ok=listuti");
}
//Modification
if (isset($_POST['modifier'])){
    $id = $_POST['id_utilisateur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $type = $_POST['type'];
    $mdp = $_POST['mot_de_passe'];
    updateUtilisateur($id,$nom, $prenom,$type,$mdp );
    header("location:http://localhost/gestioncaisse/?ok=listuti");
}
?>