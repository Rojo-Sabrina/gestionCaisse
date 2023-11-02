<?php
    function addBonentree($numbe,$date_bonentree,$id_fournisseur){
        $sql = "INSERT INTO bonentree VALUES(null,$numbe,'$date_bonentree',$id_fournisseur)";
        return executeSQL($sql);
     }
     function listBonentree(){
        $sql = "SELECT * FROM bonentree";
        return executeSQL($sql);
    }

    function deleteBonentree($num_bonentree){
        $sql = "DELETE FROM bonentree WHERE num_bonentree = $num_bonentree";
        return executeSQL($sql);
    }

    function updateBonentree($num_bonentree,$numbe, $date_bonentree,$id_fournisseur){
        $sql = "UPDATE bonentree SET numbe=$numbe ,date_bonentree='$date_bonentree',id_fournisseur=$id_fournisseur WHERE num_bonentree=$num_bonentree";
        return executeSQL($sql);
    }
        
    function getBonentreeById($num_bonentree){
        $sql = "SELECT * FROM bonentree WHERE num_bonentree=$num_bonentree";
        return executeSQL($sql);
    }
?>