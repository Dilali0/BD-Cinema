<?php

require_once './Utilisateur.php';


/*

Je peux m'inscrire pour créer un compte afin de réserver des places pour un film.

Je veux consulter les films disponibles et leurs horaires pour choisir une projection qui me convient.

Je veux réserver un ticket en sélectionnant un film, un horaire, et une salle spécifique.

Je veux consulter l'historique de mes réservations pour savoir quels films j'ai déjà regardés.

​

*/

class Client extends Utilisateur {

    public function __construct( $nom, $email,$motDePasse)
    {
        parent::__construct($nom, $email, $motDePasse);
    }

    public function seConnecter($email,$motDePasse): bool
    {
        if ($this->email === $email && password_verify($motDePasse, $this->motDePasse)) {
            echo "connecter avec success" ;
            return true; 
        }
        echo "connection echoier" ;
        return false; 
    }

    public function seDeconnecter(): void
    {
        echo "L'utilisateur {$this->nom} s'est déconnecté.\n";
    }
        
    }
