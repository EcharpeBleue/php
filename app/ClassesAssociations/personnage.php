<?php

Class Personnage
{
    public string $nom;
    public string $prenom;
    public string $classe;
    public int $niveau;

    public function __construct(string $nom, string $prenom, string $classe, int $niveau)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
        $this->niveau = $niveau;
    }

    public function setNom(string $pNom):void
    {
        $this->nom = $pNom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom(string $pPrenom)
    {
        $this->prenom = $pPrenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setClasse(string $pClasse)
    {
        $this->classe = $pClasse;
    }
    public function getClasse()
    {
        return $this->classe;
    }
    public function setNiveau(int $pNiveau)
    {
        $this->niveau = $pNiveau;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
}