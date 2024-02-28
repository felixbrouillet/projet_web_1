<?php

namespace Controller;

use Base\Controller;
use Model\Publication;
use Model\Utilisateur;
use Util\Upload;


class PublicationController extends Controller {

    /**
     * Affiche la page des publications
     */
    public function index() {
        // Protection de la route /publications
        if(empty($_SESSION["utilisateur_id"]) == true){
            header("location: index");
            exit();
        }

        // Récupération des publications
        $modele = new Publication;
        // $publications = $modele->tousLesPlats();

        include("views/publications.view.php");
    }


     /**
     * Affiche le menu public ----------------------------------------------------------------------------------------------
     */
    public function menu(){

        // Récupération des publications 
        $modele = new Publication;
        $publications_entrees = $modele->toutesLesEntrees();
        $publications_repas = $modele->tousLesRepas();
        $publications_desserts = $modele->tousLesDesserts();
        $categories_principales = $modele->toutesCategoriesPrincipales();

        include("views/menu.view.php");
    }




    /**
     * Affiche la page du compte employé ----------------------------------------------------------------------------------------------
     */
    public function compte_employe() {
        // Protection de la route /publications
        if(empty($_SESSION["utilisateur_id"]) == true){
            header("location: index");
            exit();
        }

        // Récupération des publications 
        $modele = new Publication;
        $publications = $modele->tousLesPlats();
        $categories_principales = $modele->toutesCategoriesPrincipales();       

        // Récupération des utilisateurs
        $modele = new Utilisateur;
        $utilisateurs = $modele->tousLesUtilisateurs();


        include("views/compte_employe.view.php");
    }

    /**
     * Traite les informations d'une nouvelle publication
     */
    public function enregistrer() {
        // Protection de la route /publications
        if(empty($_SESSION["utilisateur_id"]) == true){
            header("location: index");
            exit();
        }

        // Validation des paramètres
        if (empty($_POST["nom"]) || empty($_POST["description"]) || empty($_POST["prix"]) || empty($_POST["categorie_principale_id"]) || empty($_POST["vegetarien"])) {
            header("location: compte_employe?infos_requises=1");
            exit();
        }


        // Traitement de l'image s'il y a lieu
        $image = null;
        $upload = new Upload("image", ["jpeg", "jpg", "png", "webp", "gif"]);
        if($upload->estValide()){
            $image = $upload->placerDans("uploads");
        }

        // Récupération de l'id de l'utilisateur
        $utilisateur_id = $_SESSION["utilisateur_id"];

        // Ajouter la publication
        $modele = new Publication;
        $succes = $modele->ajouterPlat($_POST["nom"],
                                    $_POST["description"],
                                    $_POST["prix"],
                                    $_POST["categorie_principale_id"],
                                    $image,
                                    $_POST["vegetarien"],
                                    $_SESSION["utilisateur_id"]);

        
        // Redirection si échec
        if(!$succes){
            header("location: compte_employe?echec_ajout=1");
            exit();
        }

        // Redirection si succès
        header("location: compte_employe?succes_ajout=1");
        exit();
        
    }

    /**
    * Traite les informations d'une modification de plat ------------------------------------------------
    */
    public function enregistrerModification() {
        // Protection de la route /publications-modifier
        if (empty($_SESSION["utilisateur_id"])) {
            header("location: index");
            exit();
        }
    
        // Validation des paramètres
        if (empty($_POST["plat_id"]) || empty($_POST["nom"]) || empty($_POST["description"]) || empty($_POST["prix"]) || empty($_POST["categorie_principale_id"]) || empty($_POST["vegetarien"])) {
            header("location: compte_employe?infos_requises=1");
            exit();
        }
        
    
        // Traitement de l'image s'il y a lieu
        $image = null;
        $upload = new Upload("image", ["jpeg", "jpg", "png", "webp", "gif"]);
        if ($upload->estValide()) {
            $image = $upload->placerDans("uploads");
        }
    
        // Récupération de l'id de l'utilisateur
        $utilisateur_id = $_SESSION["utilisateur_id"];
    
        // Modifier le plat
        $modele = new Publication;
        $succes = $modele->modifierPlat($_POST["plat_id"],
            $_POST["nom"],
            $_POST["description"],
            $_POST["prix"],
            $_POST["categorie_principale_id"],
            $image,
            $_POST["vegetarien"],
            $_SESSION["utilisateur_id"]);
    
        // Redirection en cas d'échec
        if (!$succes) {
            header("location: compte_employe?echec_modification=1");
            exit();
        }
        
        // Redirection en cas de succès
        header("location: compte_employe?succes_modification=1");
        exit();
    }
    

    
    /**
    * Supprimer un plat ------------------------------------------------
    */
    public function supprimer() {
        // Protection of the route /supprimer
        if (empty($_SESSION["utilisateur_id"])) {
            header("location: index");
            exit();
        }
    
        // Validation of the post ID
        $publicationId = $_POST["id"] ?? null;
    
        if ($publicationId) {
            $modele = new Publication;
            $succes = $modele->supprimerPlat($publicationId); // Fix: Use $publicationId instead of $_POST["plat_id"]
    
            if ($succes) {
                header("location: compte_employe?succes_suppression=1");
                exit();
            }
        }
    
        header("location: compte_employe?erreur_suppression=1");
        exit();
    }

}
