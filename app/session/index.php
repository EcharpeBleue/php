<?php
if ((isset($_POST["name"])) && (isset($_POST["pwd"]))) {
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];

    if ($name == "admin" && $pwd == "admin") {
        header('Location: info.php');
    } else {
        echo "Invalid username or password.";
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
<body style="background-color:bisque;">
    <form action="index.php" method="post" style="display: flex;justify-content:center;align-items:center;">
        <label for="name">Nom:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="pwd">Mot de passe:</label><br>
        <input type="password" id="pwd" name="pwd"><br>
        <input type="submit" value="OK">
    </form>
</body>
</body>
</html>