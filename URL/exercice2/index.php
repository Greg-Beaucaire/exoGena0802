<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL - exercice 2</title>
</head>
<body>
    <?php
    // On vérifie si le paramètre age existe, on l'echo ensuite.
    if(isset($_GET['age'])){
        echo($_GET['age']);
    } else { // Si le param n'existe pas :
        echo("Ce paramètre n'existe pas");
    }
    ?>
    
</body>
</html>