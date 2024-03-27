<?php
require_once 'printable.php';
require_once 'livre.php';


$bouquin = new Livre("Le machin du marais", 1970, "0075552-1", "Un machin bizarre rôdant dans un marais a été vu");
$couverture = new Livre("La saloperie du soir", 2023, "88546664-1", "Une maladie contamine tout Paris");

$bouquin->printDetails();