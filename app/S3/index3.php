<?php
    $films=["The Shawshank Redemption", "The Godfather", "The Dark Knight", "The Lord of the Rings: The Return of the King", "Pulp Fiction"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?
foreach ($films as $key => $titre)
    {?>
       <li> <?=$titre?></li>
   <?php }?>
   </ul>
</body>
</html>