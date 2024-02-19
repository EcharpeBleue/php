<?php
$listeNews = [
    "Des scientifiques découvrent une nouvelle espèce de créature marine dans les profondeurs de l'océan Arctique, défiant les attentes et ouvrant de nouvelles perspectives sur la biodiversité des régions polaires.",
    "Une start-up révolutionnaire annonce le lancement d'une application mobile qui permet aux utilisateurs de détecter et de signaler les déchets plastiques dans leur environnement, contribuant ainsi à la lutte contre la pollution.",
    "Un artiste contemporain crée une installation spectaculaire utilisant des matériaux recyclés pour sensibiliser le public aux défis environnementaux mondiaux, attirant l'attention des médias du monde entier.",
    "Une équipe de chercheurs met au point un traitement révolutionnaire contre une maladie jusqu'ici incurable, offrant de l'espoir à des millions de personnes à travers le monde.",
    "Une série de manifestations pacifiques éclatent dans plusieurs grandes villes, appelant à des mesures urgentes pour lutter contre les inégalités sociales et économiques croissantes.",
    "Un groupe de jeunes activistes lance une campagne mondiale pour sensibiliser à l'urgence climatique et exiger des actions concrètes de la part des gouvernements et des entreprises.",
    "Une nouvelle étude révèle des découvertes fascinantes sur les comportements sociaux des animaux, remettant en question nos perceptions de leur intelligence et de leurs interactions avec l'environnement.",
    "Une équipe de chercheurs annonce la mise au point d'une technologie révolutionnaire de capture et de stockage du dioxyde de carbone, offrant un espoir dans la lutte contre le changement climatique.",
    "Un groupe de jeunes entrepreneurs lance une initiative novatrice visant à transformer les déchets alimentaires en sources d'énergie renouvelable, ouvrant la voie à une approche plus durable de la gestion des ressources.",
    "Pas de nouvelles, bonne nouvelle."];
shuffle($listeNews);
if (isset($_POST['number'])) {
    $nbNew = $_POST['number'];
    setcookie('number', $nbNew, time() + (86400 * 30));
} else {
    if (isset($_COOKIE['number'])) {
        $nbNew = $_COOKIE['number'];
    } else {
        $nbNew = 10;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<ul class="list-group list-group-flush">
    <?php for ($i = 0; $i < $nbNew; $i++) : ?>
        <li class="list-group-item bg-warning-subtle"><?= $listeNews[$i]; ?></li>
    <?php endfor; ?>
</ul>
    <h2 style="text-align: center;">
        Combien d'actualités voulez-vous voir affichées ?
    </h2>
    <form action="index.php" method="post" style="display:flex;justify-content:center;align-content:center;">
        <select name="number" id="number">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php endfor; ?>
        </select>
        <input type="submit" value="OK">
    </form>

    <?= $nbNew ?>
</body>

</html>