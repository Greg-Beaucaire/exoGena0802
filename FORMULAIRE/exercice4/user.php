<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM - exercice4</title>
</head>
<body>
<?php
    // On vérifie si les variables existent, on les echo ensuite.
    if(isset($_POST['nomForm'])){
        echo($_POST['nomForm']);
    }
    echo("<br>");
    if(isset($_POST['prenomForm'])){
        echo($_POST['prenomForm']);
    }
    ?>
</body>
</html>