<?php

require_once './Utilisateur.php';
require_once './film.php';

class Admin extends Utilisateur {



    public function seConnecter($email,$motDePasse): bool
        {
            if ($this->email === $email && password_verify($motDePasse, $this->motDePasse)) {
                return true; 
                echo "connecter avec success" ;
            }
            return false; 
            echo "connection echoier" ;
        }
    
        public function seDeconnecter(): void
        {
            echo "L'utilisateur {$this->nom} s'est déconnecté.\n";
        }
    public function ajouterFilm($titre,$genre,$duree,$dateSortie,$realisateur)
    {  
        if($this->checkNameFilmUnique()){
           return new Film($titre,$genre,$duree,$dateSortie,$realisateur);
        } else{
            return null;
        }
    }
    private function checkNameFilmUnique(){
        // 
        return true;
    }
}

