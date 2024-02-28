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
                    
                    <?php foreach($publications_entrees as $publication_entree) : ?>

                    <div class="items_dynamiques">
                        <hr>


                        <?php if($publication_entree->image != null) : ?>
                            <div class="contenu_menu">
                                <img class="image" src="<?= $publication_entree->image ?>" alt="Image" width="500">
                            </div>
                            <?php endif; ?>
                            <div class="contenu_menu">
                                <h3 class="nom_item"><?= $publication_entree->nom ?></h3>
                            </div>

                        <div class="contenu_menu">
                            <p class="description_item">
                                <?= $publication_entree->description ?>
                            </p>
                        </div>
                        
                        <div class="contenu_menu">
                            <p class="prix_item">
                                <?= $publication_entree->prix ?> $
                            </p>
                        </div>
                        
                    </div>
                        
                    <?php endforeach; ?>


                </div>

                                    
                                    


                <div class="ligne_separation"></div>

            </section>



            <!-- Section repas --------------------------------------------------------------------- -->

            <section class="repas">

                <div class="titre_section">
                                    
                    <h2>Repas</h2>
                
                </div>


                <div class="conteneur_item_dynamique">


                    <!-- dynamisation du contenu-------------------------------------------------------->

                    <?php foreach($publications_repas as $publication_repas) : ?>

                    <div class="items_dynamiques">
                        <hr>


                        <?php if($publication_repas->image != null) : ?>
                            <div class="contenu_menu">
                                <img class="image" src="<?= $publication_repas->image ?>" alt="Image" width="500">
                            </div>
                            <?php endif; ?>
                            <div class="contenu_menu">
                                <h3 class="nom_item"><?= $publication_repas->nom ?></h3>
                            </div>

                        <div class="contenu_menu">
                            <p class="description_item">
                                <?= $publication_repas->description ?>
                            </p>
                        </div>
                        
                        <div class="contenu_menu">
                            <p class="prix_item">
                                <?= $publication_repas->prix ?> $
                            </p>
                        </div>
                        
                    </div>
                        
                    <?php endforeach; ?>

                </div>

                <div class="ligne_separation"></div>

            </section>



            <section class="desserts">

                <div class="titre_section">
                                    
                    <h2>Desserts</h2>

                </div>

                <div class="ligne_separation_gauche"></div>
              
                                    
                <div class="conteneur_item_dynamique">


                    <!-- dynamisation du contenu-------------------------------------------------------->
                    
                    <?php foreach($publications_desserts as $publication_dessert) : ?>

                    <div class="items_dynamiques">
                        <hr>


                        <?php if($publication_dessert->image != null) : ?>
                            <div class="contenu_menu">
                                <img class="image" src="<?= $publication_dessert->image ?>" alt="Image" width="500">
                            </div>
                            <?php endif; ?>
                            <div class="contenu_menu">
                                <h3 class="nom_item"><?= $publication_dessert->nom ?></h3>
                            </div>

                        <div class="contenu_menu">
                            <p class="description_item">
                                <?= $publication_dessert->description ?>
                            </p>
                        </div>
                        
                        <div class="contenu_menu">
                            <p class="prix_item">
                                <?= $publication_dessert->prix ?> $
                            </p>
                        </div>
                        
                    </div>
                        
                    <?php endforeach; ?>


                </div>

                                    
                                    


                <div class="ligne_separation"></div>

            </section>

    </div>





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

    
</body>
</html>