<?php
namespace aventures;
class Personnage
{
    private String $_prenom;
    private int $_forceAttaque;
    private int $_pointsDeVie;
    public function __construct(String $prenom="", int $forceAttaque=0, int $pointsDeVie=0)
    {
        $this->_prenom = htmlentities($prenom);
        $this->_forceAttaque = $forceAttaque;
        $this->_pointsDeVie = $pointsDeVie;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getForceAttaque()
    {
        return $this->_forceAttaque;
    }
    public function getPointsDeVie()
    {
        return $this->_pointsDeVie;
    }
    public function setPrenom(String $prenom)
    {
        $prenom = htmlentities($prenom, ENT_QUOTES, 'UTF-8');
        return $this->_prenom = $prenom;
    }
    public function setForceAttaque(int $forceAttaque)
    {
        return $this->_forceAttaque = $forceAttaque;
    }
    public function setPointsDeVie(int $pointsDeVie)
    {
        return $this->_pointsDeVie = $pointsDeVie;
    }
    public function estNegatif()
    {
        if($this->getPointsDeVie()<=0)
        {
        }
    }
}
?>