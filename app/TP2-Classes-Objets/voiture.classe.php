<?php
class Voiture
{
    public string $modele;
    public float $prix;
    public int $nombrePortes;
    public int $annee;
    public string $couleur;
    public float $kilometrage;
    public string $carburant;
    public string $transmission;
    public string $etat;

    public function afficherDetails():string
    {
        return "<ul> <li>$this->modele</li> <li>$this->prix</li> <li>$this->nombrePortes</li> <li>$this->annee</li> <li>$this->couleur</li> <li>$this->kilometrage</li> <li>$this->carburant</li> <li>$this->transmission</li> <li>$this->etat</li> </ul>";
    }

}