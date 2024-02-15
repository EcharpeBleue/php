<?php
function afficherPuissancesDeDeux(){
    $n = isset($_GET['nombre']) ? $_GET['nombre'] : 0;
    for ($i=1; $i <= $n ; $i++) {
        $j = pow(2,$i);
        echo("La puissance de 2 par $i est égal à $j </br>");
    }
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
    afficherPuissancesDeDeux($_GET['nombre']);
    ?>
</body>
</html>