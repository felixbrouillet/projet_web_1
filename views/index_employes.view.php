<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub G4 St-Jérome | Section employé(e)s </title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    

</head>
<body>


    <div class="section_connexion">


        

        <!-- section connexion pour employé -------------------------------------------------------------------------------->
        <div class="section_connexion_conteneur">
            <div class="section_connexion_contenu">
                <!-- Messages d'erreur ou feedback positif -------------------- -->
            <?php
                if (isset($_GET["succes_deconnexion"])) {
                    // Display success message for deconnexion
                    echo '<p class="succes">déconnexion réussie</p>';
                }
            
                if (isset($_GET["succes_connexion"])) {
                    // Display success message for connexion
                    echo '<p class="succes">Connexion réussie</p>';
                }
            
                if (isset($_GET["echec_creation_compte"])) {
                    // Display error message for echec_creation_compte
                    echo '<p class="erreur">échec de création du compte</p>';
                }
            
                if (isset($_GET["succes_creation_compte"])) {
                    // Display success message for succes_creation_compte
                    echo '<p class="succes">Création de compte réussie</p>';
                }
            
                if (isset($_GET["erreur_suppression"])) {
                    // Display error message for erreur_suppression
                    echo '<p class="erreur">échec de la suppression</p>';
                }
            
                if (isset($_GET["succes_suppression"])) {
                    // Display success message for succes_suppression
                    echo '<p class="succes">Suppression réussie</p>';
                }
            
                if (isset($_GET["succes_modification"])) {
                    // Display success message for succes_modification
                    echo '<p class="succes">Modification réussie</p>';
                }
            
                if (isset($_GET["echec_modification"])) {
                    // Display error message for echec_modification
                    echo '<p class="erreur">Échec de la modification</p>';
                }
            
                if (isset($_GET["infos_invalides"])) {
                    // Display error message for infos_invalides
                    echo '<p class="erreur">informations invalides</p>';
                }
            
                if (isset($_GET["infos_requises"])) {
                    // Display error message for infos_requises
                    echo '<p class="erreur">Informations requises</p>';
                }
            
                if (isset($_GET["echec_ajout"])) {
                    // Display error message for echec_ajout
                    echo '<p class="erreur">Échec</p>';
                }
            
                if (isset($_GET["succes_ajout"])) {
                    // Display success message for succes_ajout
                    echo '<p class="succes">Succès</p>';
                }
            
                if (isset($_GET["mdp_incorrect"])) {
                    // Display error message for mdp_incorrect
                    echo '<p class="erreur">Erreur</p>';
                }
            ?>
            
            </div>
            <div class="section_connexion_contenu">
                <h1>Section pour employé(e)s</h1>
            </div>

            <div class="section_connexion_contenu">
                <h2>Entrez vos informations pour vous connecter.</h2>
            </div>

            <div class="section_connexion_contenu">

                <form class="connexion_employe" action="connecter" method="POST">
                    <input class="champs" type="email" name="courriel" placeholder="Courriel" autofocus>
                    <input class="champs" type="password" name="mdp" placeholder="Mot de passe">
                    <input class="boutton" type="submit" value="Connexion">
                </form>

            </div>

            <div class="section_connexion_contenu">
                <a href="index">Retour au navigateur client</a>
            </div>
                


        

        </div>



    </div>


</body>
</html>