<?php
    function addEntrer($quantite,$date_entree,$date_peremption,$num_bonentree,$id_categorie,$id_article, $id_presentation){
        $sql = "INSERT INTO entrer VALUES(null,$quantite,'$date_entree','$date_peremption',$num_bonentree,$id_categorie, $id_article, $id_presentation )";
        return executeSQL($sql);
     }
     function listEntrer(){
        $sql = "SELECT * FROM entrer";
        return executeSQL($sql);
    }

    function deleteEntrer($id_entrer){
        $sql = "DELETE FROM entrer WHERE id_entrer = $id_entrer";
        return executeSQL($sql);
    }

    function updateEntrer($id_entrer,$quantite,$date_entree,$date_peremption,$num_bonentree,$id_categorie,$id_article, $id_presentation){
        $sql = "UPDATE entrer SET quantite=$quantite ,date_entree='$date_entree',date_peremption='$date_peremption' ,num_bonentree=$num_bonentree, id_categorie=$id_categorie,id_article= $id_article, id_presentation=$id_presentation
        WHERE id_entrer=$id_entrer";
        return executeSQL($sql);
    }
        
    function getEntrerById($id_entrer){
        $sql = "SELECT * FROM entrer WHERE id_entrer=$id_entrer";
        return executeSQL($sql);
    }
?>