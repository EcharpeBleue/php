<?php

declare(strict_types=1);
class Auteur
{
    private ?DateTime $_dateNaissance;
    private ?DateTime $_dateDeces;
    private string $_origine;
    public array $livres = [];
    private string $_prenom;
    private string $_nom;

    public function __construct(?DateTime $_dateNaissance, ?DateTime $_dateDeces, string $_origine, array $livres, string $_prenom = "", string $_nom = "")
    {
        $this->_dateNaissance = $_dateNaissance;
        $this->_dateDeces = $_dateDeces;
        $this->_origine = $_origine;
        $this->livres = $livres;
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function getNom(): string
    {
        return $this->_nom;
    }

    public function getDateNaissance(): ?string
    {
        return $this->_dateNaissance ? $this->_dateNaissance->format('Y/m/d') : null;
    }

    public function getDateDeces(): ?DateTime
    {
        return $this->_dateDeces;
    }

    public function getOrigine(): string
    {
        return $this->_origine;
    }

    public function setPrenom(string $pPrenom): void
    {
        $this->_prenom = $pPrenom;
    }

    public function setNom(string $pNom): void
    {
        $this->_nom = $pNom;
    }

    public function setDateNaissance(string $dateNaissance)
    {
        $date = DateTime::createFromFormat('Y/m/d', $dateNaissance);
        $this->_dateNaissance = $date;
    }

    public function setDateDeces(string $dateDeces)
    {
        $date = DateTime::createFromFormat('Y/m/d', $dateDeces);
        $this->_dateDeces = $date;
    }
    public function estDecede(): bool
    {
        return $this->getDateDeces() !== null;
    }

    public function ajouterLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    public function SupLivre(): void
    {
        array_pop($this->livres);
    }

    public function afficherAuteur()
    {
        echo "<p> Auteur: " . $this->getNom() . " " . $this->getPrenom() . ". </p>";
        echo "<p> Né(e) le " . $this->getDateNaissance() . "</p>";
        if ($this->estDecede() == true)
            echo "<p> Mort(e) le" . $this->getDateDeces()->format('Y/m/d') . "</p>";
        echo "<p> Né au " . $this->getOrigine() . "</p>";
        echo "<ul> a écrit les oeuvres suivantes :";
        foreach ($this->livres as $livre) {
            echo "<li> Titre :" . $livre->getTitre() . "</li>";
            echo "<li> Date de sortie :" . $livre->getDateSortie() . "</li>";
            echo "<li> ISBN :" . $livre->getISBN() . "</li>";
            echo "<li> Resumé :" . $livre->getResume() . "</li>";
        }
        echo "</ul>";
    }
}
