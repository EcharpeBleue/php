<?php

class Vache extends Animal implements IMammifere,IHerbivore
{
    public function mettreABas(): void
    {
        echo $this->nom . " peut mettre à bas.\n";
    }

    public function porter(): void
    {
        echo $this->nom . " peut avoir une portée.\n";
    }

    public function brouter(): void
    {
        echo $this->nom . " peut brouter.\n";
    }
}