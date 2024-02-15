<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $duree = 6700; //secondes
    $dureeOriginale = $duree;
    $nbreHeures = 0;
    $nbreMinutes = 0;

    $uneHeure = 3600; //Combien de secondes dans une heure
    do {
        $duree=$duree-$uneHeure;
        $nbreHeures+=1;
    } while ($duree>=$uneHeure);

    $uneMinute = 60; // Combien de secondes dans une minute
    do {
        $duree=$duree-$uneMinute;
        $nbreMinutes+=1;
    } while ($duree>=$uneMinute);

    echo("$dureeOriginale secondes représente $nbreHeures heures, $nbreMinutes minutes, et $duree secondes")
    ?>
</body>
</html>