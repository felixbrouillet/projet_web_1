<?php

namespace Controller;

use Base\Controller;
use Model\AbonneInfolettre;
use Util\Upload;

class AbonneInfolettreController extends Controller {

     /**
     * Affiche la page pour employé(e)s avec la connexion 
     */
    public function index_employes() {
        include("views/index_employes.view.php");
    }

    /**
     * Affiche le formulaire d'inscription à l'infolettre
     */
    public function inscription_infolettre() {
        include("views/index_employes.view.php");
    }


    /**
     * Traite les informations d'un nouvel abonné à l'infolettre
     *
     * @return void
     */
    public function enregistrer_inscription_infolettre() {
        // Validation
        if(empty($_POST["nom"]) || 
           empty($_POST["prenom"]) ||
           empty($_POST["courriel"])){
                header("location: index?infos_absentes=1");
                exit();
           }
        

        // Envoyer les infos au modèle
        $modele = new AbonneInfolettre;
        $succes = $modele->ajouter($_POST["nom"],
                                   $_POST["prenom"],
                                   $_POST["courriel"]);

        // Rediriger si succès
        if($succes){
            header("location: index?succes_inscription_infolettre=1");
            exit();
        }

        // Redirection si échec
        header("location: index?echec_inscription_infolettre=1");
        exit();
    }

}