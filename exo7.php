<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Upload de fichier CSV</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier CSV :</label>
        <input type="file" name="file" id="file" accept=".csv" required>
        <br><br>
        <button type="submit" name="submit">Envoyer</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
        $file = $_FILES["file"];

        // Vérification du fichier uploadé
        if ($file["error"] === UPLOAD_ERR_OK && mime_content_type($file["tmp_name"]) === "text/plain") {
            $filePath = $file["tmp_name"];
            $products = [];
            if (($handle = fopen($filePath, "r")) !== false) {
                $headers = fgetcsv($handle);
                while (($row = fgetcsv($handle)) !== false) {
                    $product = array_combine($headers, $row);
                    $products[] = $product;
                }
                fclose($handle);
            }
            if (!empty($products)) {
                echo "<h2>Liste des produits</h2>";
                echo "<table>";
                echo "<tr>";
                foreach ($headers as $header) {
                    echo "<th>" . htmlspecialchars($header) . "</th>";
                }
                echo "</tr>";
                foreach ($products as $product) {
                    echo "<tr>";
                    foreach ($product as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Aucun produit trouvé dans le fichier CSV.</p>";
            }
        } else {
            echo "<p>Erreur lors de l'upload du fichier ou type de fichier incorrect. Assurez-vous d'envoyer un fichier CSV valide.</p>";
        }
    }
    ?>
</body>
</html>