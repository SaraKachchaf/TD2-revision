<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form method="POST" action= "<?php ($_SERVER['PHP_SELF']); ?>">
Nom:   <input  type ="text" name="nom">
 <input type="submit" value="envoyer" name="sub">
</form> 

</body>
</html>
<?php
$tab=[
 "s"=>[ "nom"=>"kachchaf" , "prenom"=>"sara","salaire"=>100],
 "m"=>[ "nom"=>"elhattab" , "prenom"=>"maria","salaire"=>200],

];

if(isset($_POST["sub"])){
$nom=$_POST["nom"];


    $found=false;
 foreach($tab as $k =>$s){
  if($nom==$s["nom"]){
  echo "  l'employe $k est ".$s["nom"] ." ".$s["prenom"]." ".$s["salaire"] ;
 $found=true  ;
 }
  
   } if (!$found) {
    echo "Erreur : Aucun employé trouvé avec le nom '$nom'.<br>";
}
  }

?>