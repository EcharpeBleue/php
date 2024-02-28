<?php

class AssociationParticiper
{
    public Personnage $personnage;
    public Raid $raid;

    public function __construct(Personnage $personnage, Raid $raid)
    {
        $this->personnage = $personnage;
        $this->raid = $raid;
    }

    public function setPersoHealer(Personnage $pPersonnage)
    {
        $pPersonnage->setClasse("Healer");
    }
    public function setPersoTank(Personnage $pPersonnage)
    {
        $pPersonnage->setClasse("Tank");
    }
    public function setPersoDPS(Personnage $pPersonnage)
    {
        $pPersonnage->setClasse("DPS");
    }
    public function getRaidInfo()
    {
        return $this->raid->getInfo();
    }
    public function setRaidName(Raid $raid, string $pNomRaid)
    {
        $raid->setNomRaid($pNomRaid);
    }
}
