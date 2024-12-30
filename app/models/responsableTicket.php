<?php
require_once './Utilisateur.php';
require_once './Client.php';

class ResponsableTickets extends Utilisateur {

    public function __construct($email, $motDePasse, $nom, $prenom) {
        parent::__construct($email, $motDePasse, $nom, $prenom);
    }

    public function seConnecter($email, $motDePasse) {
        return "Connexion de {$this->email}";
    }

    public function seDeconnecter() {
        return "Déconnexion réussie";
    }
}

?>