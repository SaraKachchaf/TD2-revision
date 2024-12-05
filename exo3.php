<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form method="POST" action=" <?php echo $_SERVER["PHP_SELF"]?>">
Email <input type="email" name="email"><br><br>
Mot de passe <input type="password" name="pwd"><br><br>
<input type="submit" name="btn">

 </form>
 
</body>
</html>
<?php
$utilisateurs = [
 "saranassim60@gmail.com" => "sara",
 "maria.elhattab@gmail.com" => "maria",
 "ghita.chaouki@gmail.com" => "ghita"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$f=false;
foreach($utilisateurs as $k =>$v){
if ($email==$k && $pwd ==$v){
 echo "utilisateur dèja enregistré";
$f=true;
}
}

if(!$f){
 echo "Erreur : Aucun email et mot de passe trouvé avec l'email $email.<br>";

}}
?>