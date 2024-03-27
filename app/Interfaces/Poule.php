<?php
require_once 'Animal.php';
class Poule extends Animal implements IOvipare,IHerbivore,ICarnivore {
    public function couver(): void {
        echo $this->nom . " couve un oeuf/n";
    }

    public function pondre(): void {
        echo $this->nom . " pond un oeuf/n";
    }

    public function chasser():void 
    {
        echo $this->nom . " ne chasse pas, techniquement, mais son système digestif lui permet toutefois de consommer de la chair/n";
    }

    public function brouter(): void
    {
        echo $this->nom . " , si il/elle ne broute techniquement pas, est tout de même capable de picorer quelques verdures/n";
    }
}