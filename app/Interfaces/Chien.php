<?php

class Chien extends Animal implements ICarnivore,IMammifere
{
    public function mettreABas(): void
    {
        echo $this->nom . " peut mettre à bas.";
    }

    public function porter(): void
    {
        echo $this->nom . " peut avoir une portée";
    }

    public function chasser(): void
    {
        echo $this->nom . " peut chasser (autre chose que des souris).";
    }
}