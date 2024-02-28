<?php

$routes = [
    // Zone d'accueil client
    "index" => ["UtilisateurController", "index"],
    
    // zone accueil employés
    "index_employes" => ["UtilisateurController", "index_employes"],
    
    // zone menu
    "menu" => ["PublicationController", "menu"],
   
    // zone menu
    "notre_histoire" => ["UtilisateurController", "notre_histoire"],

    // Traitement de la connexion
    "connecter" => ["UtilisateurController", "connecter"],
    
    // Affiche la section pour un employé connecté 
    "compte_employe" => ["PublicationController", "compte_employe"],

    // Formulaire d'inscription à l'infolettre 
    "inscription_infolettre" => ["AbonneInfolettreController", "creer_inscription_infolettre"],
    
    // Traitement de l'inscription à l'infolettre 
    "inscription_infolettre" => ["AbonneInfolettreController", "enregistrer_inscription_infolettre"],

    // Formulaire de création de compte
    "compte-creer" => ["UtilisateurController", "creer"],

    // Traitement de la création d'un compte
    "compte-enregistrer" => ["UtilisateurController", "enregistrer"],

    // Traitement de la suppression d'un utilisateur
    "compte-supprimer" => ["UtilisateurController", "supprimerCompte"],
    
    // Traitement de la déconnexion
    "deconnecter" => ["UtilisateurController", "deconnecter"],

    // Page des publications
    "publications" => ["PublicationController", "index"],

    // Traitement de la création d'un nouveau plat
    "publications-enregistrer" => ["PublicationController", "enregistrer"],

    // Traitement de la création d'un nouveau plat
    "publications-modifier" => ["PublicationController", "enregistrerModification"],


    // Supprimer une publication
    "publications-supprimer" => ["PublicationController", "supprimer"]
    
];