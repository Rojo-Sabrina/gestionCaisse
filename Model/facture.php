<?php
    function addFacture($remise_total,$num_bonsortie,$id_mode_paiement,$id_utilisateur){
        $sql = "INSERT INTO facture VALUES(null,$remise_total,$num_bonsortie,$id_mode_paiement,$id_utilisateur)";
        return executeSQL($sql);
     }
     function listFacture(){
        $sql = "SELECT * FROM facture";
        return executeSQL($sql);
    }

    function deleteFacture($id_facture){
        $sql = "DELETE FROM facture WHERE id_facture = $id_facture";
        return executeSQL($sql);
    }

    function updateFacture($id_facture,$remise_total,$num_bonsortie,$id_mode_paiement,$id_utilisateur){
        $sql = "UPDATE facture SET remise_total=$remise_total ,num_bonsortie=$num_bonsortie, 
        id_mode_paiement=$id_mode_paiement ,id_utilisateur=$id_utilisateur WHERE id_facture=$id_facture";
        return executeSQL($sql);
    }
        
    function getFactureById($id_facture){
        $sql = "SELECT * FROM facture WHERE id_facture=$id_facture";
        return executeSQL($sql);
    }
?>