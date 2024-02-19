<?php
$individu1 = array('Nom' => 'Dupond', 'Prenom' => 'Martin', 'Age' => '18', 'Nationalité' => 'Français');
$individu2 = array('Nom' => 'Louis', 'Prenom' => 'Phillipe', 'Age' => '24', 'Nationalité' => 'Français');
$individu3 = array('Nom' => 'Marc', 'Prenom' => 'Antoine', 'Age' => '45', 'Nationalité' => 'Grec');
$individus = array($individu1, $individu2, $individu3);
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
foreach ($individus as $key => $individu) {
    echo("<ul>");
    foreach ($individu as $subkey => $subvalue) {
        echo("<li>$subkey : $subvalue</li>");
    }
    echo("</ul>");
}
?>
</body>

</html>