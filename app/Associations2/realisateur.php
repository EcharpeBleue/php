<?php
//association/realisateur.php
class Realisateur {
    public $nom;
    public $prenom;
    public $films=[];

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function ajouterFilm(Film $film)
    {
        $this->films[]= $film;
    }

    public function afficherRealisateur()
    {
        echo "<p> Son nom est $this->nom, son prénom, $this->prenom </p>";
        foreach ($this->films as $film) {
            echo $film->titre . "<ul> ayant pour acteurs : " ;
            foreach ($film->acteurs as $acteur) {
                echo "$acteur->nom"." "."$acteur->prenom".",";
            }
        }
    }
}
