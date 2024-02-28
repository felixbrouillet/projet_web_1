<?php

namespace Model;

use Base\Model;

class Utilisateur extends Model {
    protected $table = "utilisateurs";



    /**
     * Ajoute un nouvel utilisateur
     *
     * @param string $prenom
     * @param string $nom
     * @param string $courriel
     * @param string $mdp
     * @param string $admin
     * 
     * @return bool
     */
    public function ajouter(string $prenom, string $nom, string $courriel, string $mdp, string $admin) {
        $sql = "INSERT INTO $this->table 
                    (nom, prenom, courriel, mot_de_passe, admin) 
                VALUES 
                    (:nom, :prenom, :courriel, :mot_de_passe, :admin)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":courriel" => $courriel,
            // Encryption du mot de passe
            ":mot_de_passe" => password_hash($mdp, PASSWORD_DEFAULT),
            ":admin" => $admin
        ]);
    }


     /**
     * Supprime un utilisateur------------------------------------------------------------------------------------
     *
     * @param int $id
     * 
     * @return bool
     */
    public function supprimerUtilisateur($id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        
        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":id" => $id
        ]);
    }
    

    
    /**
     * Récupère toutes utilisateurs -----------------------------------------------------------------------------------------------------------------------
     *
     * @return array|false
     */
    public function tousLesUtilisateurs() {
        $sql = "SELECT * FROM utilisateurs;";
    
        $requete = $this->pdo()->prepare($sql);
    
        $requete->execute();
    
        return $requete->fetchAll();
    }
    


    /**
     * Récupère un utilisateur, s'il existe, en fonction du courriel
     *
     * @param string $courriel
     * 
     * @return object|false
     */
    public function parCourriel($courriel) {
        $sql = "SELECT id, mot_de_passe, admin
                FROM $this->table
                WHERE courriel = :courriel";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":courriel" => $courriel
        ]);

        return $requete->fetch();
    }
    
}