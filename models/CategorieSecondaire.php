<?php

namespace Model;

use Base\Model;

class Publication extends Model {
    
    protected $table = "categories_secondaires";

    /**
     * Récupère toutes les categories secondaires pour le formulaire de création
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