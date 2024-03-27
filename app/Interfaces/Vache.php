<?php

class Vache extends Animal implements IMammifere,IHerbivore
{
    public function mettreABas(): void
    {
        echo $this->nom . " peut mettre à bas.";
    }

    public function porter(): void
    {
        echo $this->nom . " peut avoir une portée.";
    }

    public function brouter(): void
    {
        echo $this->nom . " peut brouter.";
    }
}