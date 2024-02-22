<?php
class Rectangle
{
    public int $longueur;
    public int $largeur;

    public function calculerPerimetre():float
    {
        return ($this->longueur*2)+($this->largeur*2);
    }

    public function calculerSurface():float
    {
        return $this->longueur*$this->largeur;
    }

    public function estUnLosange():string
    {
        if($this->longueur==$this->largeur){
            return "C'est un losange";
        } else {
            return "Ce n'est pas un losange";
        }
    }
}