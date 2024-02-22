<?php

use PhpParser\Node\Expr\Cast\Array_;

/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
class Personne
{
    /**
     * AJOUTER LE CODE MANQUANT ATTENTION AUX TYPES DES ATTRIBUTS!
     */
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
        // '{
        //     "nom": "Petit",
        //     "prenom": "Isabelle",
        //     "date": "1989-05-23",
        //     "resume": "Isabelle est notre experte en UX/UI, avec un œil pour le design qui engage et convertit. Son travail sur l amélioration de l expérience utilisateur a eu un impact majeur sur la satisfaction de nos clients."
        // }
        $personneJSON=json_decode($pJson);
        $date = new DateTime($personneJSON->date);
        $personne = new Personne( $personneJSON->prenom,$personneJSON->nom, $date, $personneJSON->resume);
        return $personne;
    }
}
