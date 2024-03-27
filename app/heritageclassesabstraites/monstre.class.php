<?php
class Monstre extends Character
{
    public function __toString()
    {
        return "je suis".$this->name." et je suis un monstre.";
    }
}