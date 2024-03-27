<?php

abstract class Animal
{
    protected string $nom;

    public function __construct(string $pNom)
    {
        $this->nom = $pNom;
    }

    public function recevoirNom(string $newName):void
    {
        $this->nom = $newName;
    }

    public function crier():string
    {
        return "AAAAAAAA";
    }
}