<!DOCTYPE html>
<html>
<head>
	<title>Atelier PHP n°4 - page de détail</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="formulaire.css">
<?php

require "connexionbase.php"; // Inclusion de notre bibliothèque de fonctions
	$db = connexionbase ();// Appel de la fonction de connexion
	$id=$_GET["id"];
	$titre=$_GET["id"];
	$str_requete = "SELECT * FROM liens WHERE id=".$id;
	$result = $db->query($str_requete);

 // Renvoi de l'enregistrement sous forme d'un objet
 	$lien = $result->fetch(PDO::FETCH_OBJ);

  ?>
<div class="container global" id="placement">
 </head>
 <body>
 <?php
  if($lien)
 {
 ?>
 <fieldset class="form-group">
 	  <label>Titre : </label> 
  <div class="panel panel-default">
    <div class="panel-body">
      <?php echo $lien->titre ?>
    </div>
  </div>
  
  <label>Description : </label> 
  <div class="panel panel-default">
    <div class="panel-body">
  <?php echo $lien->description ?>
  </div>
  </div>
  
  <label>URL :</label> 
  <div class="panel panel-default">
    <div class="panel-body"> 
  <?php echo $lien->url ?>
  </div>
   </div>

  <label>Webmaster : </label> 
  <div class="panel panel-default">
    <div class="panel-body">
  <?php echo $lien->webmaster ?>
  </div>
   </div>

  <label>Thème : </label> 
  <div class="panel panel-default">
    <div class="panel-body">
  <?php echo $lien->theme ?>
  </div>
   </div>

  <label>Date : </label> 
  <div class="panel panel-default">
    <div class="panel-body">
  <?php echo $lien->date ?>
  </div>
   </div>

  </fieldset>
<?php
}
else 
{
echo "Identifiant inexistant";
}
?>

<a class="btn btn-danger btn-lg" href="formulairesupprime.php?id=<?= $lien->id ?>">
  Supprimer
</a>
<a class="btn btn-primary btn-lg" href="formulairemodif.php?id=<?= $lien->id ?>">
  Modifier
</a>
<br>
<br>
<a class="btn btn-warning btn-lg" href="liste.php">Retour a la liste</a><br>


</div>
</body>
</html>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>