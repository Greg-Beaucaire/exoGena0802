<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL - exercice 4</title>
</head>
<body>
    <?php
    // On vérifie si les variables existent, on les echo ensuite.
    if(isset($_GET['langage'])){
        echo($_GET['langage']);
    }
    echo("<br>");
    if(isset($_GET['serveur'])){
        echo($_GET['serveur']);
    }
    ?>
</body>
</html>