<?php
declare(strict_types=1);

class Livre
{
    private string $_titre;
    private int $_dateSortie;
    private string $_isbn;
    private string $_resume;

    public function __construct(string $_titre, int $_dateSortie, string $_isbn, string $_resume)
    {
        $this->_titre = $_titre;
        $this->_dateSortie = $_dateSortie;
        $this->_isbn = $_isbn;
        $this->_resume = $_resume;
    }

    public function getTitre():string
    {
        return $this->_titre;
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
}