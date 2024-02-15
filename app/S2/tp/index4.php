<?php
function afficherLesNombresPaires(){
    $n = isset($_GET['nombre']) ? $_GET['nombre'] : 0;
    for ($i=1; $i <= $n ; $i++) {
        $j = $i*2;
        echo "<script>console.log('" . $j . "' );</script>";
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
    afficherLesNombresPaires($_GET['nombre']);
    ?>
</body>
</html>