<?php
    function addMode_paiement($type_paiement){
        $sql = "INSERT INTO mode_paiement VALUES(null, '$type_paiement')";
        return executeSQL($sql);
    }

    function listMode_paiement(){
        $sql = "SELECT * FROM mode_paiement";
        return executeSQL($sql);
    }

    function deleteMode_paiement($id_presentation){
        $sql = "DELETE FROM mode_paiement WHERE id_mode_paiement = $id_mode_paiement";
        return executeSQL($sql);
    }

    function updateMode_paiement($id_mode_paiement, $type_paiement){
        $sql = "UPDATE mode_paiement SET type_paiement='$type_paiement' WHERE id_mode_paiement=$id_mode_paiement";
        return executeSQL($sql);
    }

    function getMode_paiementById($id_mode_paiement){
        $sql = "SELECT * FROM mode_paiement WHERE id_mode_paiement='$id_mode_paiement'";
        return executeSQL($sql);
    }
?>