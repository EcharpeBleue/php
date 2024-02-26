<?php
declare(strict_types=1);
class Auteur
{
    private string $_prenom;
    private string $_nom;
    private ?DateTime $_dateNaissance;
    private ?DateTime $_dateDeces;
    
    public function __construct(string $_prenom="", string $_nom="", ?DateTime $_dateNaissance, ?DateTime $_dateDeces)
    {
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
        $this->_dateNaissance = $_dateNaissance;
        $this->_dateDeces = $_dateDeces;
    }

    public function getPrenom():string
    {
        return $this->_prenom ;
    }

    public function getNom():string
    {
        return $this->_nom;
    }

    public function getDateNaissance():?DateTime
    {
        return $this->_dateNaissance;
    }

    public function getDateDeces():?DateTime
    {
        return $this->_dateDeces;
    }

    public function estDecede():bool
    {
        if(null!==($this->getDateDeces()))
        {
            return true;}
        else {
            return false;
        }
    }
}