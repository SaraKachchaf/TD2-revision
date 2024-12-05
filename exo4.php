<?php
$tab = [
 "produit a"=>["Nom" => "pomme", "Quantite" => 2 ,"prix" => 6],
 "produit b"=>["Nom" => "orange", "Quantite" => 7 ,"prix" => 4],
 "produit c"=>["Nom" => "banane", "Quantite" => 9,"prix" => 2]
];

$t =0;

foreach($tab as $k =>$v){
 echo "le produit numero :". $k ."<br>";
$S = $v["Quantite"]*$v["prix"];
echo  $S . "<br>";

$t=$t+$S;
}
echo  "La somme est :" .$t . "<br>";
?>