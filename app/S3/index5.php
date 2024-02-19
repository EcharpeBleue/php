<?php
$films = [
    "The Shawshank Redemption" => ["réalisateur" => "Frank Darabont", "Année" => "1994", "Note" => "9.2"],
    "The Godfather" => ["réalisateur" => "Francis Ford Coppola", "Année" => "1972", "Note" => "9.1"],
    "The Dark Knight" => ["réalisateur" => "Christopher Nolan", "Année" => "2008", "Note" => "9.0"],
    "The Lord of the Rings: The Return of the King" => ["réalisateur" => "Peter Jackson", "Année" => "2003", "Note" => "8.9"],
    "Pulp Fiction" => ["réalisateur" => "Quentin Tarantino", "Année" => "1994", "Note" => "8.9"]
];
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
    foreach ($films as $titre => $détails) {
    ?>
        <ul>
            <?= "<li><strong>$titre</strong> : </li><ul>" ?>
            <?php
            foreach ($détails as $key => $value) { ?>
            <?= "<li><i>$key</i> : $value</li>";
            } ?>
        </ul>
        </ul>
    <?php
    } ?>
</body>

</html>