<?php

require_once './models/Film.php';
require_once './models/ResponsableProjections.php';
require_once './models/Admin.php';

//we will setup a 2 default salles
$listsalles = array(
    new Salle("salle 1", 100),
    new Salle("salle 2", 200),
);
//List films
$listfilms = array(
    new Film('harryPoter','action',120,'2024-20-02','jack'),
    new Film('cc cava les enfant','action',120,'2024-20-02','jack'),
    new Film('harryPoter','action',120,'2024-20-02','jack'),
    new Film('harryPoter','action',120,'2024-20-02','jack')
);
//display films
foreach ($listfilms as $film) {
    echo $film->AfficherDetails();
}

//we need a Admin to add a film
$user1 = new Admin('Ismail','ismail@gmail.com', "motDePasse");

$user1->seConnecter('ismail@gmail.com', "motDePasse");
$newFilm = $user1->ajouterFilm('titre','genre',200,'2024-20-02','realisateur');
AddnewFilmtoDB($newFilm);
// $newFilm == null && echo 'uhvvyvhghu';
$listfilms[] = $newFilm;
$user1->seDeconnecter();

foreach ($listfilms as $film) {
    echo $film->AfficherDetails();
}

//now we need to make a progection for this film 
$responsable1 = new ResponsableProjections("respo@gmail.com", "motDePasse", "Smiya", "kniya");
$responsable1->creerHoraire($newFilm->getId() , $listsalles[0]->getId(),"2024-20-02","2:10" ,120);

function AddnewFilmtoDB($newFilm){

}


?>
