<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
require "connexionbase.php";
$db = connexionbase();
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$requeteajout=$db->prepare("INSERT INTO liens(titre,description,url,date,theme,webmaster,affichage)VALUES(:titre,:description,:url,:date,:theme,:webmaster,:affichage)");
$requeteajout->bindParam(":titre", $_POST["titre"]);
$requeteajout->bindParam(":description", $_POST["description"]);
$requeteajout->bindParam(":url", $_POST["url"]);
$datedujour = date("Y-m-d");
$requeteajout->bindParam(":date",$datedujour);
$requeteajout->bindParam(":theme", $_POST["theme"]);
$requeteajout->bindParam(":webmaster", $_POST["webmaster"]);
$requeteajout->bindParam(":affichage",$_POST["visible"]);
$requeteajout->execute();

header("location: liste.php");
?>
</body>
</html>