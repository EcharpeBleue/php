<?php
// tableau simple
$tableau[0] = 2023;
$tableau[1] = "DEVWEB-18-S2";
$tableau[] = 11.12;
// tableau à deux dimensions :
$tab[0][0] = 12;
$tab[0][1] = "tv";
$tab[1][0] = 1245.678;
$tab[1][1] = "bye";
// tableau associatif
$toto["Nom"] = "le nom de famille de Toto..";
$toto["Age"] = 12;
$toto["Adresse"] = "22 rue des bois fleuri";
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        foreach ($tableau as $key => $value) {
            echo ("$value, ");
        }
        ?>
    </p>
    <p>
        <?php
        foreach ($tab as $key => $value) {
            foreach ($value as $subkey => $subvalue) {
                echo ("$subvalue, ");
            }
        }
        ?>
    </p>

    <p>
    <?php
    foreach ($toto as $key => $value) {
        echo("$value ");
    }
    ?>
    </p>
</body>

</html>