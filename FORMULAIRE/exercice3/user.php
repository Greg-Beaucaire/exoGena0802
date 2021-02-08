<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM - exercice3</title>
</head>
<body>
<?php
    // On vérifie si les variables existent, on les echo ensuite.
    if(isset($_GET['nomForm'])){
        echo($_GET['nomForm']);
    }
    echo("<br>");
    if(isset($_GET['prenomForm'])){
        echo($_GET['prenomForm']);
    }
    ?>
</body>
</html>