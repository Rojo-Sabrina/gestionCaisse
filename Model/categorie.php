<?php
    function addCategorie($nom_categorie){
        $sql = "INSERT INTO categorie VALUES(null, '$nom_categorie')";
        return executeSQL($sql);
    }

    function listCategorie(){
        $sql = "SELECT * FROM categorie";
        return executeSQL($sql);
    }

    function deleteCategorie($id_categorie){
        $sql = "DELETE FROM categorie WHERE id_categorie = $id_categorie";
        return executeSQL($sql);
    }

    function updateCategorie($id_categorie, $nom_categorie){
        $sql = "UPDATE categorie SET nom_categorie='$nom_categorie' WHERE id_categorie=$id_categorie";
        return executeSQL($sql);
    }

    function getCategorieById($id_categorie){
        $sql = "SELECT * FROM categorie WHERE id_categorie='$id_categorie'";
        return executeSQL($sql);
    }
?>