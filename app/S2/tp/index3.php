<?php
function afficherLesNombres(){
    $n = isset($_GET['nombre']) ? $_GET['nombre'] : 0;
    for ($i=$n; $i >= 0 ; $i--) { 
        echo("$i <br>");
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
    afficherLesNombres();
    ?>
</body>
</html>