<?php
require_once 'ICarnivore.php';
require_once 'IHerbivore.php';
require_once 'IMammifere.php';
require_once 'IOvipare.php';
require_once 'Animal.php';
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Poule.php';
require_once 'Vache.php';

$Marguerite = new Vache('Marguerite');
$Robert = new Chat('Robert');
$Alex = new Chien('Alex');
$JugeCordier = new Poule('Juge Cordier');

$herbivores = [$Marguerite, $JugeCordier];
$carnivores = [$Robert, $Alex, $JugeCordier];

foreach ($herbivores as $herbivore) {
    $herbivore->brouter();
    // A ne pas faire, créée des dépendances en dehors des classes elle-même : si les classes changent, ce code-ci devra aussi changer
    // 
    // if (method_exists($herbivore, 'mettreABas'))
    // {
    //     $herbivore->mettreABas();
    // }
    // if (method_exists($herbivore, 'porter'))
    // {
    //     $herbivore->porter();
    // }
    // if (method_exists($herbivore, 'couver'))
    // {
    //     $herbivore->couver();
    // }
    // if (method_exists($herbivore, 'pondre'))
    // {
    //     $herbivore->pondre();
    // }
    // if (method_exists($herbivore, 'chasser'))
    // {
    //     $herbivore->chasser();
    // }
    // 
}

foreach ($carnivores as $carnivore) {
    $carnivore->chasser();
}
