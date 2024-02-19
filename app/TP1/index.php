<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post">
    <select name="title">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="number" name="annee_naissance" placeholder="Année de naissance">
    <input type="text" name="identifiant" placeholder="Identifiant">
    <input type="password" name="mot_de_passe" placeholder="Mot de passe">
    <div class="radio-button">
        <input type="radio" name="sexe" value="Masculin"> Masculin
    </div>
    <div class="radio-button">
        <input type="radio" name="sexe" value="Féminin"> Féminin
    </div>
    <input type="checkbox" name="debutant" value="Oui"> Je débute en PHP
    <input type="submit" value="Submit">
</form>
<?php
    if(isset($_POST['nom']) && (isset($_POST['prenom'])) && (isset($_POST['annee_naissance'])) && (isset($_POST['identifiant'])) && (isset($_POST['mot_de_passe'])) && (isset($_POST['sexe']))) {
    ?>
<ul>
    <li>Bonjour, <?=strip_tags($_POST['title'])?> <?=strip_tags($_POST['nom'])?> <?=strip_tags($_POST['prenom'])?> !</li>
    <li>Vous êtes né en <?=strip_tags($_POST['annee_naissance'])?></li>
    <li>Votre identifiant est "<?=strip_tags($_POST['identifiant'])?>" et votre mot de passe est "<?=strip_tags($_POST['mot_de_passe'])?>"</li>
    <li>Vous êtes de sexe <?=strip_tags($_POST['sexe'])?></li>
    <?php
    if(isset($_POST['debutant'])){
    ?>
    <li>Vous êtes aussi un débutant en PHP !</li>
    <?php } ?>
</ul>
<?php } ?>

</body>
</html>