<?php
declare(strict_types=1);
include_once 'voiture.classe.php';
include_once 'garage.php';

$voiture=[];
$voitures =[];
foreach ($json as $item) {
    $voiture = new Voiture();
    $voiture->modele = $item['modele'];
    $voiture->prix = $item['prix'];
    $voiture->nombrePortes = $item['nombrePortes'];
    $voiture->annee = $item['annee'];
    $voiture->couleur = $item['couleur'];
    $voiture->kilometrage = $item['kilometrage'];
    $voiture->carburant = $item['carburant'];
    $voiture->transmission = $item['transmission'];
    $voiture->etat = $item['etat'];
    $voitures[] = $voiture;
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach ($voitures as $key => $value) {
    echo $value->afficherDetails();
}
?>
</body>
</html>