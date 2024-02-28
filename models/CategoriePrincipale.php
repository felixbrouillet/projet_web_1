<?php

namespace Model;

use Base\Model;

class Publication extends Model {

    protected $table = "categories_principales";


    /**
     * Récupère toutes les categories principales pour le formulaire de création
     *
     * @return array|false
     */
    
    public function ToutesCategoriesPrincipales() {
        $sql = "SELECT * FROM categories_principales";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();

        return $requete->fetchAll();
    }
}