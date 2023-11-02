<?php
    function addClients($nom,$contact, $adresse){
        $sql = "INSERT INTO clients VALUES (null, '$nom','$contact', '$adresse')";
        return executeSQL($sql);
    }

    function listClients(){
        $sql = "SELECT * FROM clients";
        return executeSQL($sql);
    }

    function deleteClients($id_clients){
        $sql = "DELETE FROM clients WHERE id_clients = $id_clients";
        return executeSQL($sql);
    }

    function updateClients($id_clients, $nom, $contact, $adresse){
        $sql = "UPDATE clients SET nom='$nom', contact='$contact' WHERE id_clients=$id_clients";
        return executeSQL($sql);
    }

    function getClientsById($id_clients){
        $sql = "SELECT * FROM clients WHERE id_clients='$id_clients'";
        return executeSQL($sql);
    }
?>