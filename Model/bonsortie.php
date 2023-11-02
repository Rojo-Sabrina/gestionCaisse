<?php
    function addBonsortie($numbs,$date_bonsortie,$id_clients){
        $sql = "INSERT INTO bonsortie VALUES(null,$numbs,'$date_bonsortie',$id_clients)";
        return executeSQL($sql);
     }
     function listBonsortie(){
        $sql = "SELECT * FROM bonsortie";
        return executeSQL($sql);
    }

    function deleteBonsortie($num_bonsortie){
        $sql = "DELETE FROM bonsortie WHERE num_bonsortie = $num_bonsortie";
        return executeSQL($sql);
    }

    function updateBonsortie($num_bonsortie,$numbs,$date_bonsortie,$id_clients){
        $sql = "UPDATE bonsortie SET numbs=$numbs,date_bonsortie='$date_bonsortie', id_clients=$id_clients WHERE num_bonsortie=$num_bonsortie";
        return executeSQL($sql);
    }
        
    function getBonsortieById($num_bonsortie){
        $sql = "SELECT * FROM bonsortie WHERE num_bonsortie=$num_bonsortie";
        return executeSQL($sql);
    }
?>