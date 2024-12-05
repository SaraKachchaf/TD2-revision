<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Choisissez vos produits</h1>
<form method="POST" action="">
        <?php
        $produits = [
            "Produit A" => 15.5,
            "Produit B" => 19,
            "Produit C" => 20,
            "Produit D" => 30,
            "Produit E" => 60
        ];
        foreach ($produits as $produit => $prix) {
            echo '<div>';
            echo '<input type="checkbox" name="produits[]" value="' . $produit . '" id="' . $produit . '">';
            echo '<label for="' . $produit . '">' . $produit . ' - ' . $prix . 'DHS</label>';
            echo '</div>';
        }
        ?>

        <br>
        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["produits"])) {
        $produitsSelectionnes = $_POST["produits"];
        $prixTotal = 0;

        echo "<h2>Produits sélectionnés</h2>";
        echo "<ul>";
        foreach ($produitsSelectionnes as $produit) {
            echo "<li>$produit - " . $produits[$produit] . "DHS</li>";
            $prixTotal += $produits[$produit];
        }
        echo "</ul>";

        echo "<p><strong>Prix total : $prixTotal</strong></p>";
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<p>Aucun produit sélectionné.</p>";
    }
    ?>
</body>
</html>