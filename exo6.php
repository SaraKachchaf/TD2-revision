<?php
$villesTemperatures = [
    "Casablanca" => 15,
    "Essaouira" => 10,
    "tanger" => 20,
    "kenitra" => 25,
    "berrachid" => 18,
    "agadir" => 5
];
function villePlusChaud($villesTemperatures) {
    $villeMaxTemp = "";
    $tempMax = PHP_INT_MIN;
    foreach ($villesTemperatures as $ville => $temperature) {
        if ($temperature > $tempMax) {
            $tempMax = $temperature;
            $villeMaxTemp = $ville;
        }
    }

    return [$villeMaxTemp, $tempMax];
}
list($villeMax, $tempMax) = villePlusChaud($villesTemperatures);
echo "<h1>Températures des villes</h1>";
echo "<ul>";
foreach ($villesTemperatures as $ville => $temperature) {
    echo "<li> $ville : $temperature</li>";
}
echo "</ul>";

echo "<p>La ville avec la température la plus élevée est <strong> $villeMax </strong> avec <strong> $tempMax </strong>.</p>";
?>