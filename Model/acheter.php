<?php
    function addAcheter($quantite,$montant_total,$id_article,$id_presentation,$num_bonsortie){
        $sql = "INSERT INTO acheter VALUES(null,$quantite,'$montant_total',$id_article,$id_presentation,$num_bonsortie)";
        return executeSQL($sql);
     }
     function listAcheter(){
        $sql = "SELECT * FROM acheter";
        return executeSQL($sql);
    }

    function deleteAcheter($id_achat){
        $sql = "DELETE FROM acheter WHERE id_achat = $id_achat";
        return executeSQL($sql);
    }

    function updateAcheter($id_achat,$quantite,$montant_total,$id_article,$id_presentation,$num_bonsortie){
        $sql = "UPDATE acheter SET quantite=$quantite ,montant_total='$montant_total', 
        id_article=$id_article ,id_presentation=$id_presentation, num_bonsortie=$num_bonsortie WHERE id_achat=$id_achat";
        return executeSQL($sql);
    }
        
    function getAcheterById($id_achat){
        $sql = "SELECT * FROM acheter WHERE id_achat=$id_achat";
        return executeSQL($sql);
    }
?>