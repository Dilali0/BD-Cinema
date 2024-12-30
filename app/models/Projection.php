<?php
include_once './Salle.php';
class Projection {

    private $id ;
    private $filmId;
    private $salleId;
    private $date;
    private $time;
    private $prix;
    private $Nb_PlaceReserved = 0;

    //getter 

    public function setDate($newDate){
        $this->date = $newDate;
    }
    public function setTime($newtime){
        $this->time = $newtime;
    }

    // construct initialisation
    public function __construct($filmId, $salleId, $date ,$heure, $prix) {
        $this->filmId = $filmId;
        $this->salleId = $salleId;
        $this->date = $date;
        $this->time = $heure;
        $this->prix = $prix;
    }

    public function verifierDisponiblite(Salle $salle): bool {
        return $this->Nb_PlaceReserved <= $salle->getCapacite();
    }

    public function modifierProjection($newdate ,$heure ) {
        $this->setDate($newdate);
        $this->setTime($heure);
        return "Projection modifiée pour : " . $newdate . 'a ' . $heure;
    }

    public function annulerProjection($projectionId) {
        //We can delete projections from db base on id provide
        //instead we can destroy the object with a simple unset
        return "Projection bien supprimer ";
    }
}
?>