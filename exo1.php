<?php
$tab=[
    "ep1"=>10 ,
    "ep2"=>12 ,
    "ep3"=>12 
];

$S=0;
foreach($tab as $K =>$Z){
 echo "  le $K : $Z  <br>";
 $S=$S+$Z ;
$m=$S/count($tab);
}
echo "la somme des salaire est $S  la moyennse des salaire est $m ";

?>