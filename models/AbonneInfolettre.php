<?php

namespace Model;

use Base\Model;


class AbonneInfolettre extends Model {

    protected $table = "abonnes_infolettre";

    /**
     * Ajoute un nouvel abonné à l'infolettre
     *
     * @param string $prenom
     * @param string $nom
     * @param string $courriel
     * 
     * @return bool
     */

     public function ajouter(string $prenom, string $nom, string $courriel) {
        $sql = "INSERT INTO $this->table 
                    (nom, prenom, courriel) 
                VALUES 
                    (:nom, :prenom, :courriel)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":courriel" => $courriel
        ]);
    }

}