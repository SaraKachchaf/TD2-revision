<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $utilisateurs = [
        1 => "Maria",
        2 => "Sara",
        3 => "Ghita"
    ];
    if (isset($_POST['ajouter'])) {
        $nouveauNom = $_POST['nom'];
        $id = max(array_keys($utilisateurs)) + 1; // Création d'un nouvel ID
        $utilisateurs[$id] = $nouveauNom;
        echo "<p>Utilisateur ajouté avec succès !</p>";
    }
    if (isset($_POST['modifier'])) {
        $idUtilisateur = $_POST['id_utilisateur'];
        $nouveauNom = $_POST['nom'];
        if (isset($utilisateurs[$idUtilisateur])) {
            $utilisateurs[$idUtilisateur] = $nouveauNom;
            echo "<p>Utilisateur modifié avec succès !</p>";
        } else {
            echo "<p>L'utilisateur n'existe pas.</p>";
        }
    }
    if (isset($_POST['supprimer'])) {
        $idUtilisateur = $_POST['id_utilisateur'];
        if (isset($utilisateurs[$idUtilisateur])) {
            unset($utilisateurs[$idUtilisateur]);
            echo "<p>Utilisateur supprimé avec succès !</p>";
        } else {
            echo "<p>L'utilisateur n'existe pas.</p>";
        }
    }
    echo "<h2>Liste des utilisateurs</h2>";
echo "<ul>";
foreach ($utilisateurs as $id => $nom) {
    echo "<li>Id: $id - Nom: $nom</li>";
}
echo "</ul>";
?>

<h2>Ajouter un utilisateur</h2>
<form method="POST">
    <label for="nom">Nom de l'utilisateur :</label>
    <input type="text" name="nom" id="nom" required>
    <button type="submit" name="ajouter">Ajouter</button>
</form>

<h2>Modifier un utilisateur</h2>
<form method="POST">
    <label for="id_utilisateur">ID de l'utilisateur :</label>
    <input type="number" name="id_utilisateur" id="id_utilisateur" required>
    <label for="nom">Nouveau nom :</label>
    <input type="text" name="nom" id="nom" required>
    <button type="submit" name="modifier">Modifier</button>
</form>

<h2>Supprimer un utilisateur</h2>
<form method="POST">
    <label for="id_utilisateur">ID de l'utilisateur à supprimer :</label>
    <input type="number" name="id_utilisateur" id="id_utilisateur" required>
    <button type="submit" name="supprimer">Supprimer</button>
</form>
</body>
</html>