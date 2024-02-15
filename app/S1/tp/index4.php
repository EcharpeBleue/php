<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i <= 16; $i++) {
        $j = pow(2,$i);
        echo("Le résultat de 2^$i est égal à $j.</br>");
    }
?>
</body>
</html>