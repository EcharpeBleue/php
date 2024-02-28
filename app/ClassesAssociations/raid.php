<?php

Class Raid{

    public string $nomRaid;
    public string $lieu;
    public DateTime $date;
    public int $niveauRequis;

    public function __construct(string $nomRaid, string $lieu, DateTime $date, int $niveauRequis)
    {
        $this->nomRaid = $nomRaid;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->niveauRequis = $niveauRequis;
    }

    public function setNomRaid(string $pNomRaid)
    {
        $this->nomRaid = $pNomRaid;
    }
    public function getNomRaid()
    {
        return $this->nomRaid;
    }
    public function setLieu(string $pLieu)
    {
        $this->lieu = $pLieu;
    }
    public function getLieu()
    {
        return $this->lieu;
    }
    public function setDate(DateTime $pDate)
    {
        $this->date = $pDate;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setNiveauRequis(int $pNiveauRequis)
    {
        $this->niveauRequis = $pNiveauRequis;
    }
    public function getNiveauRequis()
    {
        return $this->niveauRequis;
    }

    public function getInfo()
    {
        echo "<p> Nom du raid :". $this->nomRaid."</p>";
        echo "<p> Lieu du raid :". $this->lieu."</p>";
        echo "<p> Date du raid :". $this->date."</p>";
        echo "<p> Niveau Requis :".$this->niveauRequis."</p>";
    }
}