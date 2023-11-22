<?php
    function addArticle($code_barre,$nom_article,$prix_unitaire,$id_categorie){
        $sql = "INSERT INTO article VALUES(null,'$code_barre','$nom_article',$prix_unitaire,$id_categorie)";
        return executeSQL($sql);
     }
     function listArticle_old(){
        $sql = "SELECT * FROM article";
        return executeSQL($sql);

    }
    function listArticle(){
        $sql = "SELECT id_article,code_barre,nom_article,prix_unitaire,nom_categorie 
        FROM article 
        INNER JOIN categorie ON article.id_categorie = categorie.id_categorie";
        return executeSQL($sql);
    }
    function listCatArticle($id_categorie){
        $sql = "SELECT * FROM article WHERE id_categorie=$id_categorie order by nom_article";
        return executeSQL($sql);
    }

    function deleteArticle($id_article){
        $sql = "DELETE FROM article WHERE id_article = $id_article";
        return executeSQL($sql);
    }

    function updateArticle($id_article,$code_barre,$nom_article,$prix_unitaire,$id_categorie){
        $sql = "UPDATE article SET code_barre='$code_barre',nom_article='$nom_article', 
        prix_unitaire=$prix_unitaire ,id_categorie=$id_categorie WHERE id_article=$id_article";
        return executeSQL($sql);
    }
        
    function getArticleById($id_article){
        $sql = "SELECT * FROM article WHERE id_article=$id_article";
        return executeSQL($sql);
    }
?>