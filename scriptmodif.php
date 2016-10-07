<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
	require "connexionbase.php";
	$db = connexionbase();
	//print_r($_POST);

	$requetemodif=$db->prepare("UPDATE liens SET titre = :titre , description = :description , url = :url ,webmaster = :webmaster , theme = :theme , date = :date , affichage = :affichage WHERE id = :id");
	$requetemodif->bindParam(":titre",$_POST["titre"]);
	$requetemodif->bindParam(":description",$_POST["description"]);
	$requetemodif->bindParam(":url",$_POST["url"]);
	$requetemodif->bindParam(":webmaster",$_POST["webmaster"]);
	$requetemodif->bindParam(":id",$_POST["id"]);
	$requetemodif->bindParam(":theme",$_POST["theme"]);
	$datedujour = date("Y-m-d");
	$requetemodif->bindParam(":date",$datedujour);
	$requetemodif->bindParam(":affichage",$_POST["visible"]);
	$requetemodif->execute();

	header("location: liste.php");
?>
</body>
</html>