<?php
// require_once 'printable.php';
class Livre implements Printable
{
    private string $_title;
    private int $_dateSortie;
    private string $_isbn;
    private string $_resume;

    public function __construct(string $pTitle, int $pDateSortie, string $ISBN, string $pResume)
    {
        $this->_title = $pTitle;
        $this->_dateSortie = $pDateSortie;
        $this->_isbn = $ISBN;
        $this->_resume = $pResume;
    }

    public function getTitre():string
    {
        return $this->_title;
    }
    
    public function getDateSortie():int
    {
        return $this->_dateSortie;
    }
    public function getIsbn():string
    {
        return $this->_isbn;
    }
    public function getResume():string
    {
        return $this->_resume;
    }

    public function printDetails(): string
    {
        return "Le livre a pour titre" . $this->getTitre() . ", pour année de sortie " . $this->getDateSortie() . ", pour ISBN " . $this->getIsbn() . ", et pour résumé le descriptif suivant : " . $this->getResume();
    }
}