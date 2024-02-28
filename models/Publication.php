<?php

namespace Model;

use Base\Model;

class Publication extends Model {

    protected $table = "plats";

    // Affiche tous les plats + formulaire de création d'un plat =======================================================================

    /**
     * Ajoute un plat (sans utilisateur)
     *
     * @param string $nom
     * @param string $description
     * @param int $categorie_principale_id
     * @param string|null $image
     * @param string $vegetarien
     * @return bool
     */
    public function ajouterPlat($nom, $description, $prix, $categorie_principale_id, $image, $vegetarien) {
        $sql = "INSERT INTO $this->table (nom, description, prix, categorie_principale_id, image, vegetarien) VALUES (:nom, :description, :prix, :categorie_principale_id, :image, :vegetarien)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":description" => $description,
            ":prix" => $prix,
            ":categorie_principale_id" => $categorie_principale_id,
            ":image" => $image,
            ":vegetarien" => $vegetarien
        ]);
    }


    // Modifie un plat ---------------------------------------------------------------------------
    public function modifierPlat($plat_id, $nom, $description, $prix, $categorie_principale_id, $image, $vegetarien) {
        $sql = "UPDATE $this->table SET nom = :nom, description = :description, prix = :prix, categorie_principale_id = :categorie_principale_id, image = :image, vegetarien = :vegetarien WHERE id = :plat_id";
        
        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":plat_id" => $plat_id,
            ":nom" => $nom,
            ":description" => $description,
            ":prix" => $prix,
            ":categorie_principale_id" => $categorie_principale_id,
            ":image" => $image,
            ":vegetarien" => $vegetarien
        ]);
    }

    
    /**
     * Supprime un plat ------------------------------------------------------------------------------------
     *
     * @param int $id
     * 
     * @return bool
     */
    public function supprimerPlat($id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        
        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":id" => $id
        ]);
    }
    
    
    


    

    
    /**
     * Récupère toutes les plats -----------------------------------------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function tousLesPlats() {
        $sql = "SELECT plats.*,
        plats.id AS plats_id,
        categories_principales.nom AS nom_categorie_principale
        FROM plats
        JOIN categories_principales ON plats.categorie_principale_id = categories_principales.id
        ORDER BY categories_principales.id;";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }


    /**
     * Récupère toutes les entrées -----------------------------------------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function toutesLesEntrees() {
        $sql = $sql = "SELECT plats.*,
        categories_principales.nom AS nom_categorie_principale
        FROM plats
        JOIN categories_principales ON plats.categorie_principale_id = categories_principales.id
        WHERE categorie_principale_id = 1";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }

    /**
     * Récupère tous les repas -----------------------------------------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function tousLesRepas() {
        $sql = $sql = "SELECT plats.*,
        categories_principales.nom AS nom_categorie_principale
        FROM plats
        JOIN categories_principales ON plats.categorie_principale_id = categories_principales.id
        WHERE categorie_principale_id = 2";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }

    /**
     * Récupère tous les desserts -----------------------------------------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function tousLesDesserts() {
        $sql = $sql = "SELECT plats.*,
        categories_principales.nom AS nom_categorie_principale
        FROM plats
        JOIN categories_principales ON plats.categorie_principale_id = categories_principales.id
        WHERE categorie_principale_id = 3";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }



    /**
     * Récupère toutes les categories principales pour le formulaire de création ---------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function ToutesCategoriesPrincipales() {
        $sql = "SELECT * FROM categories_principales";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }

    /**
     * Récupère toutes les categories secondaires pour le formulaire de création ------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function ToutesCategoriesSecondaires() {
        $sql = "SELECT * FROM categories_secondaires";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }


}
