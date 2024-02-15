<?php
function afficherPuissancesDeDeuxWhile(){
    $n = isset($_GET['nombre']) ? $_GET['nombre'] : 0;
    $i = 1;
    do {
        $j=pow(2,$i);
        echo("La puissance de 2 par $i est égal à $j </br>");
        $i+=1;
    } while ($i <= $n);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    afficherPuissancesDeDeuxWhile($_GET['nombre']);
    ?>
</body>
</html>