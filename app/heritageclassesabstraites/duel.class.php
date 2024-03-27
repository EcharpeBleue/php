<?php
class Duel
{
    public static int $nombreDuels=0;
    public static function jouerDuel(Character $duellisteA, Character $duellisteB):?Character
    {
        self::$nombreDuels++;
        do
        {
            if ($duellisteA->getAttaque()>$duellisteB->getAC())
            $duellisteB->subirDegats($duellisteA->getDegats());
            if ($duellisteB->getAttaque()>$duellisteA->getAC())
            $duellisteA->subirDegats($duellisteB->getDegats());
        }
        while (($duellisteA->getPV()>0)&&($duellisteB->getPV()>0));

        if (($duellisteA->getPV()<=0) && ($duellisteB->getPV()>0))
        return $duellisteA;
        if (($duellisteB->getPV()<=0) && ($duellisteA->getPV()>0))
        return $duellisteB;
    return null;
    }
}