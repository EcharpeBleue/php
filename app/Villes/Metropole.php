<?php
declare(strict_types=1);
require_once 'Villes.php';

class Metropole extends Villes
{
    private string $_capitaleDe;
    private int $_nbreHabitants;

    public function __construct()
    {

    }

    public function setCapital(string $pCapitale)
    {
        $this->_capitaleDe = $pCapitale;
    }
}