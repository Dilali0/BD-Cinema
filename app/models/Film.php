<?php

class Film {
          
    private $id ;
    private $titre ;
    private $genre ;
    private $duree ;
    private $dateSortie ;
    private $realisateur ;
    private static $cmptFilm = 0 ;

    public function getId(){
        return $this->id ;
    }

    public function getTitre(){
        return $this->titre ;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
         $this->genre = $genre;
    }

    public function getDuree(){
       return $this->duree ;
   }
   public function setDuree($duree){
    $this->duree = $duree;
   }
   public function getdateSortie(){
    return $this->dateSortie ;
   }
   public function setDateSortie($dateSortie){
    $this->dateSortie = $dateSortie;
   }
   public function getRealisateur(){
   return $this->realisateur ;
   }
   public function setRealisateur($realisateur){
    $this->realisateur = $realisateur;
   }

    public function __construct($titre,$genre,$duree,$dateSortie,$realisateur)
    {
        $this->id = ++static::$cmptFilm ;
        $this->titre = $titre ;
        $this->genre = $genre ;
        $this->duree = $duree ;
        $this->dateSortie = $dateSortie ;
        $this->realisateur = $realisateur ;

    }

    public function AfficherDetails(){

        return " le film :  " . $this->titre . " le genre est :  " . $this->genre . " la duree est : " . $this->duree . " min " .  " la date sortie est : " . $this->dateSortie . " le realisateur est : " . $this->realisateur ;
    }

}
?>