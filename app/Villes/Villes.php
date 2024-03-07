<?php
declare(strict_types=1);
class Villes
{
    private string $_nom;
    private string $_departement;

    public function __construct()
    {
        // $this->_nom = $_nom;
        // $this->_departement = $_departement;
    }

    public function setNom(string $pNom)
    {
        $this->_nom = $pNom;
    }

    public function setDepartement(string $pDepartement)
    {
        $this->_departement = $pDepartement;
    }
    
    public function getNom():string
    {
        return $this->_nom;
    }

    public function getDepartement():string
    {
        return $this->_departement;
    }

    public function getInfo()
    {
        return $this->getNom() . ", " . $this->getDepartement(); 
    }


}