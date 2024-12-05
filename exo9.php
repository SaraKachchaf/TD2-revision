<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $etudiants = [
        "Maria" => [
            "Dev Web" => 16,
            "InfoRespo" => 14,
            "Conception" => 18
        ],
        "Sara" => [
            "Dev Web" => 12,
            "InfoRespo" => 10,
            "Conception" => 14
        ],
        "Ghita" => [
            "Dev Web" => 19,
            "InfoRespo " => 17,
            "Conception" => 15
        ]
    ];
    function calculerMoyenne($notes) {
        $total = array_sum($notes); // Somme des notes
        $nombreMatieres = count($notes); // Nombre de matières
        return $nombreMatieres > 0 ? $total / $nombreMatieres : 0;
    }
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nom de l'étudiant</th><th>Matières</th><th>Moyenne</th></tr>";

    foreach ($etudiants as $nom => $notes) {
        $moyenne = calculerMoyenne($notes); // Calcul de la moyenne
        $matieres = implode(", ", array_keys($notes)); // Liste des matières

        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>$matieres</td>";
        echo "<td>" . number_format($moyenne, 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>