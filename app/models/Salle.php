<?php

class Salle {
    private $id;
    private $nom;
    private $capacite;
    private static $cmptsall = 0 ;

    public function __construct($nom, $capacite) {
        $this->id = ++static::$cmptsall ;
        $this->nom = $nom;
        $this->capacite = $capacite;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
     $this->nom = $nom;
    }

    public function getCapacite() {
       return $this->capacite  ;
       }

    public function setCapacite($capacite) {
     $this->capacite = $capacite ;
    }

}