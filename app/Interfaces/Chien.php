<?php

class Chien extends Animal implements ICarnivore,IMammifere
{
    public function mettreABas(): void
    {
        echo $this->nom . " peut mettre à bas./n";
    }

    public function porter(): void
    {
        echo $this->nom . " peut avoir une portée./n";
    }

    public function chasser(): void
    {
        echo $this->nom . " peut chasser (autre chose que des souris)./n";
    }
}