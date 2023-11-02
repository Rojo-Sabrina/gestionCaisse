<?php
    function addUtilisateur($nom,$prenom,$type,$mot_de_passe){
        $sql = "INSERT INTO utilisateur VALUES(null, '$nom','$prenom','$type','$mot_de_passe')";
        return executeSQL($sql);
    }

    function listUtilisateur(){
        $sql = "SELECT * FROM utilisateur";
        return executeSQL($sql);
    }

    function deleteUtilisateur($id_utilisateur){
        $sql = "DELETE FROM utilisateur WHERE id_utilisateur = $id_utilisateur";
        return executeSQL($sql);
    }

    function updateUtilisateur($id_utilisateur,$nom,$prenom,$type,$mot_de_passe){
        $sql = "UPDATE utilisateur SET nom='$nom', prenom='$prenom',type='$type', mot_de_passe='$mot_de_passe' WHERE id_utilisateur=$id_utilisateur";
        return executeSQL($sql);
    }

    function getUtilisateurById($id_utilisateur){
        $sql = "SELECT * FROM utilisateur WHERE id_utilisateur='$id_utilisateur'";
        return executeSQL($sql);
    }
?>