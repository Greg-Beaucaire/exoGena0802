<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM - exercice 8</title>
</head>
<body>
    <?php
    if(!isset($_POST['civiliteForm']) && !isset($_POST['nomForm']) && !isset($_POST['prenomForm']) && !isset($_POST['fileForm'])){
    ?>
    <form action="index.php" method="POST">
        <select name="civiliteForm" id="civiliteForm" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
            <option value="Non genré parce qu'on est en 2021 bordel !">Non genré parce qu'on est en 2021 bordel !</option>
        </select>
        <label for="nomForm">Nom :</label>
        <input type="text" id="nomForm" name="nomForm" required>
        <label for="prenomForm">Prenom :</label>
        <input type="text" id="prenomForm" name="prenomForm" required>
        <input type="file" id="fileForm" name="fileForm" accept=".pdf">
        <input type="submit" value="Envoyer">
    </form>
    <?php
    }
    // On vérifie si les variables existent, on les echo ensuite.
    if(isset($_POST['civiliteForm'])){
        echo($_POST['civiliteForm']);
    }
    echo("<br>");
    if(isset($_POST['nomForm'])){
        echo($_POST['nomForm']);
    }
    echo("<br>");
    if(isset($_POST['prenomForm'])){
        echo($_POST['prenomForm']);
    }
    echo("<br>");
    if(isset($_POST['fileForm'])){
        echo($_POST['fileForm']);
    }
    ?>
</body>
</html>