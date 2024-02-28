<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub G4 St-Jérome </title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    

    <!-- header ------------------------------------------------------------------------------------------------------------ -->
    <header>
        <div class="logo_header">
            <img class="logo_header" src="public/medias/logo/logo.png" alt="Logo du pub G4 ">
        </div>
            
        
        <div class="navigation_header">
            <div class="liens_navigation_header">
                <a href="index">Accueil</a>
                <a href="notre_histoire">Notre histoire</a>
                <a href="menu">Menu</a>
            </div>
        </div>

    </header>

    <!-- section main ------------------------------------------------------------------------------------------------------------------------------------ -->
    <main>

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

            ?>

        <section class="image_accueil">
            
            <h1>Le pub G4, 
                <br>
            un pub qui rassemble</h1>
            
            <img class="image_accueil" src="public/medias/images/image_pub_2.jpg" alt="Une quinzaine de personnes assises devant un bar et à des tables, le bar est remplit de bouteilles">


        </section>

        <div class="ligne_separation"></div>

        <!-- Section appel à l'action et infolettre ------------------------------------------------------------------------------------------- -->

        <section class="carte_et_inscription_infolettre">


            <!-- Carte ------------------------------------------------------------------------------- -->
            <div class="conteneur_carte">

                <div class="contenu_carte">

                    <h3>Trouve notre succursale</h3>

                </div>

                <div class="contenu_carte"> 

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7465989465627!2d-74.00559052447872!3d45.    7762684125639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.    1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20St%20Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%    205A2!5e0!3m2!1sen!2sca!4v1686244027366!5m2!1sen!2sca" width="400" height="300" style="border:0;" allowfullscreen=""    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                </div>

                <div class="contenu_carte">

                    <p>297, rue St-Georges, Saint-Jérôme (Québec) J7Z 5A2</p>
                    
                </div>
                
            </div>
            

            <!-- infolettre -------------------------------------------------------------------------------------- -->
            <div class="conteneur_inscription_infolettre">

                
                <div class="contenu_inscription_infolettre">
                    
                    <h3>Tu veux goûter nos nouveautés avant tous le monde ?</h3>
                
                </div>

                <div class="contenu_inscription_infolettre">
                    <?php
                        if (isset($_GET["succes_inscription_infolettre"])) {
                        echo '<p class="succes">Succès</p>';
                        }

                        if (isset($_GET["echec_inscription_infolettre"])) {
                            echo '<p class="erreur">Erreur</p>';
                        }
                    ?>
                </div>

                <form action="inscription_infolettre" method="POST" enctype="multipart/form-data">


                    <div class="contenu_inscription_infolettre">

                        <input class="champs" type="text" name="prenom" placeholder="Prénom" autofocus>   

                    </div>

                    <div class="contenu_inscription_infolettre">
                        
                        <input class="champs" type="text" name="nom" placeholder="Nom">
                    
                    </div>

                    <div class="contenu_inscription_infolettre">
                        
                        <input class="champs" type="email" name="courriel" placeholder="Courriel">
                    
                    </div>
                        

                    <div class="contenu_inscription_infolettre"> 

                        <input class="boutton" type="submit" value="S'inscrire">

                    </div>

                </form>

            </div>

        </section>

        <div class="ligne_separation"></div>

        <!-- Section commentaire ------------------------------------------------------------------------------------------------------------ -->
        <section class="section_commentaires">

            <div class="titre_et_commentaires">

                <h3>Ce que nos clients disents de nous</h3>

                <div class="conteneur_commentaire">

                    <div class="conteneur_etoiles">

                        <div class="etoile">
                            <span> &starf; </span>
                            <span> &starf; </span>
                            <span> &starf; </span>
                            <span> &starf; </span>
                            <span> &starf; </span>
                        </div>

                    </div>

                    <p class="p_commentaire">Si vous commandez à boire, demandez les conseils de Kevin! C'est un expert!</p>

                </div>

            </div>

        </section>

    </main>


<!-- section footer ----------------------------------------------------------------------------------------------------------------------------------- -->
    <footer>

        <div class="navigation_footer">
            <a href="index">Accueil</a>
            <a href="notre_histoire">Notre histoire</a>
            <a href="menu">Menu</a>
            <a class="section_employes" href="index_employes">Section employés</a>
        </div>
        
        <div class="logo_footer">
            <img class="logo_footer" src="public/medias/logo/logo.png" alt="">
        </div>

        <div class="nous_joindre">

            <strong class="footer">Nous joindre</strong>
            <div class="icones_reseaux_sociaux">
                <a href="https://facebook.com"><img src="public/medias/icones/icone_facebook.png" alt=""></a>
                <a href="https://instagram.com"><img src="public/medias/icones/icone_instagram .png" alt=""></a>
                <a href="https://twitter.com"><img src="public/medias/icones/icone_twitter.png" alt=""></a>
            </div>
            <p class="numero_footer">450-436-1531</p>
            <p class="addresse_footer">297, rue St-Georges, Saint-Jérôme (Québec) J7Z 5A2</p>
            <p class="copyright_footer">Tous droits réservés 2023 - Pub G4 ©</p>

        </div>

    </footer>

    <script src="public/js/main.js"></script>
    
</body>
</html>





