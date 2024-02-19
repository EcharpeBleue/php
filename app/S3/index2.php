<?php
$tableauNombre = [0, 1, 2, 3, 4, 5, 6];
$somme = 0;
foreach ($tableauNombre as $key => $value) {
    $somme += $value;
}
$moyenne = $somme / count($tableauNombre);
$ecart[] = 0;
foreach ($tableauNombre as $key => $value) {
    $ecart[$key] = pow($moyenne - $value,2);
}
$sommeecart = 0;
foreach ($ecart as $key => $value) {
    $sommeecart += $value;
}
$ecarttype = sqrt($sommeecart / count($ecart));

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>La somme des valeurs du tableau est de <?= $somme ?></p>
    <p>La moyenne des valeurs du tableau est de <?= $moyenne ?> </p>
    <p>L'écart type du tableau est de <?= $ecarttype ?></p>
</body>

</html>