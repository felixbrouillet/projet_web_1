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

    
    

    <div class="compte_employe">

        <div class="contenu_compte_employe">
            <h1>Bienvenue sur votre compte d'employé</h1>

        </div>

        <div class="contenu_compte_employe">

            <a href="deconnecter">Se déconnecter</a>
        </div>

        <div class="contenu_compte_employe">
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

         

        <!-- création et suppresion de compte ------------------------------------------------------------------------------------------------------------------------------>

        <?php if ($_SESSION["utilisateur_admin"] == "oui") : ?>


        <div class="creation_suppression_compte">
            
            
           


            <div class="conteneur_creation_suppression_compte">

                <div class="contenu_creation_compte">
                    <h2>Création de compte</h2>
                </div>

                <form class="creation_compte" action="compte-enregistrer" method="POST" enctype="multipart/form-data">

                    <div class="contenu_creation_compte">

                        <input class="champs" type="text" name="nom" placeholder="Nom">
                    </div>
                    <div class="contenu_creation_compte">

                        <input class="champs" type="text" name="prenom" placeholder="Prénom" autofocus>
                    </div>



                    <div class="contenu_creation_compte">

                        <input class="champs" type="email" name="courriel" placeholder="Courriel">
                    </div>
                    <div class="contenu_creation_compte">
                        <input class="champs" type="password" name="mdp" placeholder="Mot de passe">

                    </div>
                    <div class="contenu_creation_compte">
                        <input class="champs" type="password" name="confirmer_mdp" placeholder="Confirmer le mot de passe">

                    </div>

                    <div class="contenu_creation_compte">
                        <h3>admin ?</h3>
                    </div>
                    <div class="contenu_creation_compte">
                        <select class="champs" name="admin">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>

                    <div class="contenu_creation_compte">
                        <input class="boutton" type="submit" value="Créer!">

                    </div>

                </form>
            </div>

            <!-- Suppression d'un compte --------------------------------------------------------------- -->

            <div class="suppression_compte">
                <!-- form -->
                <form action="compte-supprimer" method="POST" enctype="multipart/form-data">

                    <div class="contenu_modifier_plat">

                        <label>
                            <div class="contenu_modifier_plat">
                                <h3>Choisir l'utilisateur à supprimer</h3>
                            </div>
                            <select class="champs" name="utilisateur_suppression_id">
                                <?php foreach ($utilisateurs as $utilisateur) : ?>
                                    <option value="<?= $utilisateur->id ?>">
                                        <?= ucfirst($utilisateur->nom) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </label>                
                                
                    </div>
                                
                    <div class="contenu_modifier_plat">
                        <input class="boutton" type="submit" value="Supprimer cet utilisateur">
                    </div>

                </form>
                <!-- form -->
            </div>

        </div>
        <?php endif; ?>


        <!-- Modifier les plats et categories  ---------------------------------------------------------------------------------------------------------------------->
            
        <div class="ajouter_plat_modifier_plat">
                
                
            <!-- Modifier les plats ------------------------------------------------------------------------------------------------ -->
            <div class="ajouter_plat">

                <div class="titre_modifier_plat">
                    <div class="contenu_modifier_plat">
                        <h2>Ajouter un plat</h2>
                    </div>

                    
                    <form action="publications-enregistrer" method="POST" enctype="multipart/form-data">

                        <div class="contenu_modifier_plat">

                            <label>
                                <div class="contenu_modifier_plat">

                                    <h3>Titre</h3>
                                </div>
                                <input class="champs" type="text" name="nom" value="">

                            </label>

                        </div>

                        <div class="contenu_modifier_plat">

                            <label>
                                <div class="contenu_modifier_plat">

                                    <h3>Description</h3>
                                </div>
                                <input class="champs" type="text" name="description" value="">

                            </label>

                        </div>

                        <div class="contenu_modifier_plat">

                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Prix</h3>
                                </div>
                                <input class="champs" type="number" step=".01" name="prix" value="">
                            </label>

                        </div>

                    


                        <div class="contenu_modifier_plat">
                            
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Catégorie Principale</h3>
                                </div>
                                <select class="champs" name="categorie_principale_id">
                                    <?php foreach ($categories_principales as $categorie_principale) : ?>
                                        <option value="<?= $categorie_principale->id ?>">
                                            <?= ucfirst($categorie_principale->nom) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </label>
                            
                        </div>

                        <div class="contenu_modifier_plat"><span>Sélectionner une image</span></div>
                        <div class="contenu_modifier_plat">
                            <label class="label">
                                <div class="contenu_modifier_plat">
                                    <h3>Média</h3>
                                </div>
                                <input type="file" name="image">
                            </label>
                        </div>
                    
                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    Végétarien ?
                                </div>
                                <select class="champs" name="vegetarien">
                                  <option value="oui">Oui</option>
                                  <option value="non">Non</option>
                                </select>
                            </label>
                        </div>

                        <div class="contenu_modifier_plat">
                            <input class="boutton" type="submit" value="Ajouter ce plat au menu">
                        </div>
                    
                    </form>
                    
                </div>
            </div>



                <!--Modifier un plat -------------------------------------------------->
                <div class="modifier_plat">
                    <form action="publications-modifier" method="POST" enctype="multipart/form-data">

                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Choisir le plat à modifier</h3>
                                </div>
                                <select class="champs" name="plat_id">
                                    <?php foreach ($publications as $publication) : ?>
                                        <option value="<?= $publication->id ?>">
                                            <?= ucfirst($publication->nom) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </label>

                            <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Titre</h3>
                                </div>
                                <input class="champs" type="text" name="nom" value="">
                            </label>
                        </div>

                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Description</h3>
                                </div>
                                <input class="champs" type="text" name="description" value="">
                            </label>
                        </div>

                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Prix</h3>
                                </div>
                                <input class="champs" type="number" step=".01" name="prix" value="">
                            </label>
                        </div>

                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    <h3>Catégorie Principale</h3>
                                </div>
                                <select class="champs" name="categorie_principale_id">
                                    <?php foreach ($categories_principales as $categorie_principale) : ?>
                                        <option value="<?= $categorie_principale->id ?>">
                                            <?= ucfirst($categorie_principale->nom) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </label>
                        </div>
                                    
                        <div class="contenu_modifier_plat">
                            <span>Sélectionner une image</span>
                        </div>
                        <div class="contenu_modifier_plat">
                            <label class="label">
                                <div class="contenu_modifier_plat">
                                    <h3>Média</h3>
                                </div>
                                <input type="file" name="image">
                            </label>
                        </div>
                                    
                        <div class="contenu_modifier_plat">
                            <label>
                                <div class="contenu_modifier_plat">
                                    Végétarien ?
                                </div>
                                <select class="champs" name="vegetarien">
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </label>
                        </div>
                        </div>
                                    
                        <div class="contenu_modifier_plat">
                            <input class="boutton" type="submit" value="Modifier ce plat">
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- Section Menu coté employé -------------------------------------------------------------------------------------------------------------------------->

        <div class="section_menu"> 
        
            <div class="notre_menu">
                                    
                <h1>Notre menu</h1> 
                                    
            </div>

            <div class="ligne_separation"></div>  
                                    
            <section class="entrees">

                <div class="titre_section">
                                    
                    <h2>Entrées</h2>

                </div>

                <div class="ligne_separation_gauche"></div>
                                    
                <div class="conteneur_item_dynamique">

                    
                    <!-- dynamisation du contenu-------------------------------------------------------->
                
                    <?php foreach($publications as $publication) : ?>

                        <div class="items_dynamiques">
                            <hr>
                            
                            <div class="contenu_menu">
                                <h3 class="nom_item"><?= $publication->nom ?></h3>
                            </div>

                            <?php if($publication->image != null) : ?>
                                <div class="contenu_menu">
                                    <img class="image" src="<?= $publication->image ?>" alt="Image" width="500">
                                </div>
                            <?php endif; ?>

                            <div class="contenu_menu">
                                <p class="description_item">
                                    <?= $publication->description ?>
                                </p>
                            </div>
                            
                            <div class="contenu_menu">
                                <p class="prix_item">
                                    <?= $publication->prix ?> $
                                </p>
                            </div>
                            
                            <div class="contenu_menu">
                                <form action="publications-supprimer" method="POST">
    
                                    <input type="hidden" name="id" value="<?= $publication->id ?>">
    
                                    <button type="submit">Supprimer ce plat</button>
                                </form>
                            </div>
                            
                        </div>
                        
                        
                    <?php endforeach; ?>


                </div>

                                    
                                    


                <div class="ligne_separation"></div>

            </section>
        
        </div>

    </div>
     

</body>
</html>