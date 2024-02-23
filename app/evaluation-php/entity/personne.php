<?php

use PhpParser\Node\Expr\Cast\Array_;

/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
class Personne
{
    public string $nom;
    public string $prenom;
    public DateTime $date;
    public string $resume;

    public function __construct(string $prenom,string $nom, DateTime $date, string $resume) {
        $this->nom = strtoupper($nom);
        $this->prenom = $prenom;
        $this->date = $date;
        $this->resume = $resume;
    }
    public static function create(string $pJson)
    {
        $personneJSON=json_decode($pJson);
        $date = new DateTime($personneJSON->date);
        $personne = new Personne( $personneJSON->prenom,$personneJSON->nom, $date, $personneJSON->resume);
        return $personne;
    }
}
