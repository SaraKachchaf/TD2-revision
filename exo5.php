<?php
$tab = [];

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["commentaire"])) {
    $comm = ($_POST["commentaire"]);  
    array_push($tab, $comm);   
}
foreach ($tab as $index => $commentaire) {
 echo ($commentaire) ;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commentaire</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="commentaire">Votre commentaire :</label><br>
        <textarea name="commentaire" id="commentaire" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
