<?php

require_once realpath(__DIR__ . '/Utilisateur.php');
require_once realpath(__DIR__ . '/Projection.php');

class ResponsableProjections extends Utilisateur {
         

    public function __construct($email, $motDePasse, $nom, $prenom) {
        parent::__construct($email, $motDePasse, $nom, $prenom);
        
    }
    
    private function verifierDisponibilite(): bool {
        //traitement de verification si deja exists une production au meme date au base de donner
        return true ;
    }

    public function creerHoraire($filmid, $salle, $date , $heure, $prix) {
        if ($this->verifierDisponibilite()) {
            return new Projection($filmid, $salle, $date ,$heure, $prix);
        }
        //Go handle the null return with a message alert 
        return null;
    }

    public function seConnecter($email, $motDePasse) {
        return $email == $this->email ? "Connexion de {$this->email}" : "Echec connection";
    }

    public function seDeconnecter() {
        return "Déconnexion réussie";
    }
}