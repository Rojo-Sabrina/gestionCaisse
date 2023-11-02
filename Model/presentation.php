<?php
    function addPresentation($libelle,$nombre){
        $sql = "INSERT INTO presentation VALUES(null, '$libelle',$nombre)";
        return executeSQL($sql);
    }

    function listPresentation(){
        $sql = "SELECT * FROM presentation";
        return executeSQL($sql);
    }

    function deletePresentation($id_presentation){
        $sql = "DELETE FROM presentation WHERE id_presentation = $id_presentation";
        return executeSQL($sql);
    }

    function updatePresentation($id_presentation, $libelle, $nombre){
        $sql = "UPDATE presentation SET libelle='$libelle', nombre='$nombre' WHERE id_presentation=$id_presentation";
        return executeSQL($sql);
    }

    function getPresentationById($id_presentation){
        $sql = "SELECT * FROM presentation WHERE id_presentation='$id_presentation'";
        return executeSQL($sql);
    }
?>