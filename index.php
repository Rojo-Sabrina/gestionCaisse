<?php
if(isset($_GET['ok'])){
    require_once 'menu.php';
    switch ($_GET['ok']){
        //CATEGORIE
        case 'addcat':
            require_once 'View/categorie/ajout.php';
            break;
        case 'listcat':
            require_once 'Model/db.php';
            require_once 'Model/categorie.php';
            $link = listCategorie();
            require_once 'View/categorie/liste.php';
            break;
        case 'editcat':
            require_once 'Model/db.php';
            require_once 'Model/categorie.php';
            $tab = getCategorieById($_GET['id_categorie']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/categorie/modif.php';
            break;
        //ARTICLE
        case 'addart':
            require_once 'View/article/ajout.php';
            break;
        case 'listart':
            require_once 'Model/db.php';
            require_once 'Model/article.php';
            $link = listArticle();
            require_once 'View/article/liste.php';
            break;
        case 'editart':
            require_once 'Model/db.php';
            require_once 'Model/article.php';
            $tab = getArticleById($_GET['id_article']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/article/modif.php';
            break;
             //FOURNISSEUR
        case 'addfou':
            require_once 'View/fournisseur/ajout.php';
            break;
        case 'listfou':
            require_once 'Model/db.php';
            require_once 'Model/fournisseur.php';
            $link = listFournisseur();
            require_once 'View/fournisseur/liste.php';
            break;
        case 'editfou':
            require_once 'Model/db.php';
            require_once 'Model/fournisseur.php';
            $tab = getFournisseurById($_GET['id_fournisseur']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/fournisseur/modif.php';
            break;
             //BON D'ENTREE
        case 'addbone':
            require_once 'View/bonentree/ajout.php';
            break;
        case 'listbone':
            require_once 'Model/db.php';
            require_once 'Model/bonentree.php';
            $link = listBonentree();
            require_once 'View/bonentree/liste.php';
            break;
        case 'editbone':
            require_once 'Model/db.php';
            require_once 'Model/bonentree.php';
            $tab = getBonentreeById($_GET['num_bonentree']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/bonentree/modif.php';
            break;
             //PRESENTATION
        case 'addpre':
            require_once 'View/presentation/ajout.php';
            break;
        case 'listpre':
            require_once 'Model/db.php';
            require_once 'Model/presentation.php';
            $link = listPresentation();
            require_once 'View/presentation/liste.php';
            break;
        case 'editpre':
            require_once 'Model/db.php';
            require_once 'Model/presentation.php';
            $tab = getPresentationById($_GET['id_presentation']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/presentation/modif.php';
            break;
            //ENTRER
        case 'addent':
            require_once 'View/entrer/ajout.php';
            break;
        case 'listent':
            require_once 'Model/db.php';
            require_once 'Model/entrer.php';
            $link = listEntrer();
            require_once 'View/entrer/liste.php';
            break;
        case 'editent':
            require_once 'Model/db.php';
            require_once 'Model/entrer.php';
            $tab = getEntrerById($_GET['id_entrer']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/entrer/modif.php';
            break;
            //CLIENTS
        case 'addcli':
            require_once 'View/clients/ajout.php';
            break;
        case 'listcli':
            require_once 'Model/db.php';
            require_once 'Model/clients.php';
            $link = listClients();
            require_once 'View/clients/liste.php';
            break;
        case 'editcli':
            require_once 'Model/db.php';
            require_once 'Model/clients.php';
            $tab = getClientsById($_GET['id_clients']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/clients/modif.php';
            break;
              //BON DE SORTIE
        case 'addbons':
            require_once 'View/bonsortie/ajout.php';
            break;
        case 'listbons':
            require_once 'Model/db.php';
            require_once 'Model/bonsortie.php';
            $link = listBonsortie();
            require_once 'View/bonsortie/liste.php';
            break;
        case 'editbons':
            require_once 'Model/db.php';
            require_once 'Model/bonsortie.php';
            $tab = getBonsortieById($_GET['num_bonsortie']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/bonsortie/modif.php';
            break;   
              //ACHETER
        case 'addach':
            require_once 'View/acheter/ajout.php';
            break;
        case 'listach':
            require_once 'Model/db.php';
            require_once 'Model/acheter.php';
            $link = listAcheter();
            require_once 'View/acheter/liste.php';
            break;
        case 'editach':
            require_once 'Model/db.php';
            require_once 'Model/acheter.php';
            $tab = getAcheterById($_GET['id_achat']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/acheter/modif.php';
            break;
             //UTILISATEUR
        case 'adduti':
            require_once 'View/utilisateur/ajout.php';
            break;
        case 'listuti':
            require_once 'Model/db.php';
            require_once 'Model/utilisateur.php';
            $link = listUtilisateur();
            require_once 'View/utilisateur/liste.php';
            break;
        case 'edituti':
            require_once 'Model/db.php';
            require_once 'Model/utilisateur.php';
            $tab = getUtilisateurById($_GET['id_utilisateur']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/utilisateur/modif.php';
            break;
            //MODE DE PAIEMENT
        case 'addmod':
            require_once 'View/mode_paiement/ajout.php';
            break;
        case 'listmod':
            require_once 'Model/db.php';
            require_once 'Model/mode_paiement.php';
            $link = listMode_paiement();
            require_once 'View/mode_paiement/liste.php';
            break;
        case 'editmod':
            require_once 'Model/db.php';
            require_once 'Model/mode_paiement.php';
            $tab = getMode_paiementById($_GET['id_mode_paiement']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/mode_paiement/modif.php';
            break;
              //FACTURE
        case 'addfac':
            require_once 'View/facture/ajout.php';
            break;
        case 'listfac':
            require_once 'Model/db.php';
            require_once 'Model/facture.php';
            $link = listFacture();
            require_once 'View/facture/liste.php';
            break;
        case 'editfac':
            require_once 'Model/db.php';
            require_once 'Model/facture.php';
            $tab = getFactureById($_GET['id_facture']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/facture/modif.php';
            break;                                                                                                                                                                                                                            
    }
}    
else{
    require_once 'menu.php';
}
?>