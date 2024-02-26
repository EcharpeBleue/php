<?php
declare(strict_types=1);

class Pays
{
    private string $_nomPays;
    
    public function __construct(string $_nomPays)
    {
        $this->_nomPays = $_nomPays;
    }

    public function getPays():string
    {
        return $this->_nomPays;
    }
}