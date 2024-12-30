<?php 


class Ticket
{
    // Attributs privés
    private int $id;
    private int $idProjection;
    private int $numeroSiege;
    private float $prix;
    private string $dateReservation;
    private static $cmptTicket = 0 ;


    // Constructeur pour initialiser le ticket
    public function __construct($idProjection, $numeroSiege, $prix,$dateReservation)
    {
        $this->id = ++static::$cmptTicket;
        $this->idProjection = $idProjection;
        $this->numeroSiege = $numeroSiege;
        $this->prix = $prix;
        $this->dateReservation = $dateReservation;
    }

    // Méthode pour afficher les détails du ticket
    public function afficherDetails()
    {
       return "Ticket ID: {$this->id}, Projection ID: {$this->idProjection}, Siège: {$this->numeroSiege}, Prix: {$this->prix} Mad, Réservé le: {$this->dateReservation}\n";
    }

}

?>
