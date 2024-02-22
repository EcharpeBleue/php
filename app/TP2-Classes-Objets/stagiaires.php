<?php
class Stagiaire
{
    public string $prenom;
    public string $nom;
    public function salutation():string
    {
        return "je m'appelle $this->prenom $this->nom";
    }
}