<?php

class Personne
{
    public $prenom;
    public $nom;

    public function __construct(string $prenom, string $nom)
    {
        echo "Executing the constructor method.\n";
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function saluer(String $mot)
    {
        echo "$mot $this->prenom \n";
    }

    public function __destruct()
    {
        echo "</p>L'instance vient d'être détruite.\n</p>";
    }
    public function __debugInfo():array
    {
        return ['nom' => $this->nom, 'prenom' => $this->prenom];
    }
    public function __call($name, $arguments)
    {
        echo "la methode ".$name." a été appelé avec les paramètres suivants\n";
        var_dump($arguments);
    }

}
?>