<?php
require_once "auteur.php";
require_once "genre.php";
require_once "livre.php";
require_once "pays.php";
$auteur1 = new Auteur(new DateTime("2000/01/01"), null, "Royaume-Uni", [], "Neuville", "Londubas");
$auteur2 = new Auteur(new DateTime("2000/01/01"), new DateTime("2020/01/01"), "US", [], "Harry", "Potter");
$auteurs = [$auteur1,$auteur2];
$livre1 = new Livre("Le chant des sirènes", 2020, "7788885554", "Le chant des sirènes raconte la vie d'une grande pop-star dans le business de la musique pop coréenne");
$livre2 = new Livre("La nuit d'Automne", 2014, "444144515", "La nuit d'Automne retrace l'histoire d'un orphelin devenu soldat");
$livre3 = new Livre("Le paradis orange", 2004, "7774122321", "Le paradis orange relate la vie d'un chômeur après son renvoi à la disparition de son poste en plein été");
$auteur1->ajouterLivre($livre1);
$auteur1->ajouterLivre($livre2);
$auteur1->afficherAuteur();
$auteur2->ajouterLivre($livre2);
$auteur2->ajouterLivre($livre3);
$auteur2->afficherAuteur();
?>