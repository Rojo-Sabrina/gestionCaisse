<?php
    function addFournisseur($nom_fournisseur,$adresse,$contact){
        $sql = "INSERT INTO fournisseur VALUES(null, '$nom_fournisseur','$adresse','$contact')";
        return executeSQL($sql);
    }

    function listFournisseur(){
        $sql = "SELECT * FROM fournisseur";
        return executeSQL($sql);
    }

    function deleteFournisseur($id_fournisseur){
        $sql = "DELETE FROM fournisseur WHERE id_fournisseur = $id_fournisseur";
        return executeSQL($sql);
    }

    function updateFournisseur($id_fournisseur, $nom_fournisseur, $adresse, $contact){
        $sql = "UPDATE fournisseur SET nom_fournisseur='$nom_fournisseur', adresse='$adresse', contact='$contact' WHERE id_fournisseur=$id_fournisseur";
        return executeSQL($sql);
    }

    function getFournisseurById($id_fournisseur){
        $sql = "SELECT * FROM fournisseur WHERE id_fournisseur='$id_fournisseur'";
        return executeSQL($sql);
    }
?>