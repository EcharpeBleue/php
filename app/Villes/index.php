<?php
require_once 'Villes.php';
$villeCosneSurLoire = new Villes();
$villeCosneSurLoire->setNom('Cosne sur Loire');
$villeCosneSurLoire->setDepartement('Nièvre');
// $villeCosneSurLoire->getInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo $villeCosneSurLoire->getInfo();
    ?>
    <div class="paragrapheColle">
        <div class="downwardParagraph">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit maxime omnis accusantium praesentium perferendis consequatur repellendus a incidunt iste deleniti ea, repellat, inventore nemo perspiciatis error eaque ducimus laudantium veniam!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis dignissimos neque molestiae ullam. Esse voluptas odio, iure autem debitis praesentium quae, officiis placeat quos assumenda minus? Fugiat esse porro dolorem?</p>
        </div>
        <div class="downwardParagraph">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quae recusandae cum reiciendis blanditiis laborum sint vitae temporibus, quo, quam consequuntur nulla sit quibusdam repellendus ullam ducimus perspiciatis libero soluta!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, magni libero iure quas id nam perspiciatis eligendi nostrum autem dolorem dolore numquam culpa vel quam provident dicta laboriosam eius totam.</p>
        </div>
    </div>
</body>

</html>