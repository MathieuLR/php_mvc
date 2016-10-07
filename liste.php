<!DOCTYPE html>
<html>
<head>
	<title>Atelier PHP N° 4 : Affichage du Sommaire </title>
	<meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<div class="container global">
<?php
require "connexionbase.php";
$db = connexionbase();
$requeteliste = "SELECT id,titre,url FROM liens WHERE affichage='oui' ORDER BY 'date' DESC";
$resultat = $db->query($requeteliste);
if(!$resultat)
{
	print "PDO::errorInfo():";
    $msg = $db->errorInfo();
    print $msg[2]."<br />";
    die ("Erreur dans la requête !".$requeteliste."<br> <a href=\"javascript:history.go(-1)\">BACK</a>");
}
?>
<h2><p align='center'>SOMMAIRE</h2>
<br><a class="btn btn-warning btn-lg" href="formulaireajout.html">Ajouter un formulaire </a><br>
<br>
 <i> (liste triée par date de création) </i></p align><br />
	 <?php
	 if ($resultat->rowCount() == 0) 
	{
	 // Pas d'enregistrement
	 die ("La table est vide");
	}
	 ?>
	 <table class="table table-hover">
	 <?php 
	 while ($lien = $resultat->fetch(PDO::FETCH_OBJ))
	 {
	 ?>
	 <tr>
	 <td width='5%'><?= $lien->id?></td>
	 <td width='49%'><?= $lien->titre?></td>
	 <td> <i><a id="couleurlien" href='$lien->url'><?= $lien->url?></a></i></td>
	 <td width='14%'><a class="btn btn-primary" href="detail.php?id=<?= $lien->id ?>">Afficher le détail </a></td>
	 </tr>
	 
	 <?php

	}
	$resultat->closeCursor();
	?>

	</table>
	</div>
</body>
</html>