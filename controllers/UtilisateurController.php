<?php

namespace Controller;

use Base\Controller;
use Model\Utilisateur;
use Util\Upload;

class UtilisateurController extends Controller {

    /**
     * Affiche la page d'accueil publique
     */
    public function index() {
        include("views/index.view.php");
    }

    /**
     * Affiche la page pour employé(e)s avec la connexion 
     */
    public function index_employes() {
        include("views/index_employes.view.php");
    }

    /**
     * Affiche la page "notre histoire"
     */
    public function notre_histoire() {
        include("views/notre_histoire.view.php");
    }


    /**
     * Affiche le formulaire de création de compte sur la page de l'admin 
     */
    public function creer() {
        include("views/creer_compte.view.php");
    }

    /**
     * Traite les informations d'un nouvel utilisateur
     *
     * @return void
     */
    public function enregistrer() {
        // Validation
        if(empty($_POST["nom"]) || 
           empty($_POST["prenom"]) ||
           empty($_POST["courriel"]) ||
           empty($_POST["mdp"]) ||
           empty($_POST["confirmer_mdp"])){
                header("location: compte_employe?infos_requises=1");
                exit();
           }


        if($_POST["mdp"] != $_POST["confirmer_mdp"]){
            header("location: compte_employe?mdp_incorrect=1");
            exit();
        }

        // Envoyer les infos au modèle
        $modele = new Utilisateur;
        $succes = $modele->ajouter($_POST["nom"],
                                   $_POST["prenom"],
                                   $_POST["courriel"],
                                   $_POST["mdp"],
                                   $_POST["admin"]);

        // Rediriger si succès
        if($succes){
            header("location: compte_employe?succes_creation_compte=1");
            exit();
        }


        // Redirection si échec
        header("location: compte_employe?echec_creation_compte=1");
        exit();
    }



    /**
     * Supprime un utilisateur
     */
    public function supprimerCompte() {
        // Protection of the route /supprimer
        if (empty($_SESSION["utilisateur_id"])) {
            header("location: index");
            exit();
        }

        // Validation de l'id de l'utilisateur à supprimer
        $utilisateur_suppression_id = $_POST["utilisateur_suppression_id"] ?? null;

        if ($utilisateur_suppression_id) {
            $modele = new Utilisateur;
            $succes = $modele->supprimerUtilisateur($utilisateur_suppression_id); 

            if ($succes) {
                header("location: compte_employe?succes_suppression=1");
                exit();
            }
        }


        header("location: compte_employe?erreur_suppression=1");
        exit();
    }




    /**
     * Valide et connecte l'utilisateur
     */
    public function connecter() { 
        // Valider les paramètres POST
        if(empty($_POST["courriel"]) ||
           empty($_POST["mdp"])) {
            header("location: index_employes?infos_requises=1");
            exit();
        }


        // Récupérer l'utilisateur
        $modele = new Utilisateur;
        $utilisateur = $modele->parCourriel($_POST["courriel"]);

        // Valider que l'utilisateur existe ET que son mot de passe est valide
        if(!$utilisateur || !password_verify($_POST["mdp"], $utilisateur->mot_de_passe)){
            header("location: index_employes?infos_invalides=1");
            exit();
        }

        // Créer la session
        $_SESSION["utilisateur_id"] = $utilisateur->id;
        $_SESSION["utilisateur_admin"] = $utilisateur->admin;
        $_SESSION["est_connecte"] = true;

        // Rediriger
        header("location: compte_employe?succes_connexion=1");
        exit();
    }

    /**
     * Déconnecte l'utilisateur
     */
    public function deconnecter() {
        session_destroy();
        header("location: index?succes_deconnexion=1");
        exit();
    }



}