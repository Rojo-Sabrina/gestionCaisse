<?php
// Changement liste déroulante
require_once '../Model/db.php';
require_once 'Model/article.php';

// Afficher les données reçues
echo "Données reçues : ";
var_dump($_POST);

if (!empty($_POST["id_categorie"])) {
    // Récupération de l'id de la catégorie
    $id_categorie = $_POST['id_categorie'];
    $lisac = listCatArticle($id_categorie);
    ?>
    <select name="article" class="form-select">
        <option selected="selected">Fidio ilay article</option>
        <?php
        while ($row = mysqli_fetch_row($lisac)) {
            ?>
            <option value="<?php echo $row[0];?>"><?php echo $row[2];?></option>
            <?php
        }
        ?>
    </select>
    <?php
}
?>