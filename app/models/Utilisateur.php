<?php

abstract class Utilisateur {
  
        protected int $id;
        protected string $nom;
        protected string $email;
        protected string $motDePasse;
        private static $compteurId = 0 ;
    
        
        public function __construct($nom, $email, $motDePasse)
        {
            $this->id = ++static::$compteurId;
            $this->nom = $nom;
            $this->email = $email;
            $this->motDePasse = $motDePasse;
        }
    //getters
        public function getId(): int
        {
            return $this->id;
        }
    
        public function getNom(): string
        {
            return $this->nom;
        }
    
        public function setNom(string $nom): void
        {
            $this->nom = $nom;
        }
    
        public function getEmail(): string
        {
            return $this->email;
        }
    
        public function setEmail(string $email): void
        {
            $this->email = $email;
        }
    
        public function getMotDePasse(): string
        {
            return $this->motDePasse;
        }
    
        public function setMotDePasse(string $motDePasse): void
        {
            $this->motDePasse = password_hash($motDePasse, PASSWORD_BCRYPT); 
        }
    
       abstract public function seConnecter($email, $motDePasse) ;
    
       abstract public function seDeconnecter();
    }
?>
