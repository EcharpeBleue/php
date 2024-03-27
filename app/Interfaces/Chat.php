<?php

Class Chat extends Animal implements IMammifere,ICarnivore
{
    public function mettreABas(): void
    {
        echo $this->nom . " peut mettre à bas.";
    }

    public function porter(): void
    {
        echo $this->nom . " est à même d'avoir une portée.";
    }

    public function chasser(): void
    {
        echo $this->nom . " peut chasser (des souris).";
    }
}