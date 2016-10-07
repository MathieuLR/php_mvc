<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
</head>
<body>
<?php
require "connexionbase.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionbase ();// Appel de la fonction de connexion
$id=$_GET["id"];
$str_requete = "SELECT * FROM liens WHERE id=".$id;
	$result = $db->query($str_requete);

 // Renvoi de l'enregistrement sous forme d'un objet
 	$lien = $result->fetch(PDO::FETCH_OBJ);

?>

<form action="http://127.0.0.1/phase1/scriptmodif.php" method= "POST">
<div class="container global">
	<fieldset class="form-group"><legend><h2>Formulaire</h2></legend>
			    <div class="form-group">
				<label>Titre : </label>
				<input type="text" name="titre" id ="titre" class="form-control" value="<?=$lien->titre?>"><br></td>
				</div>

				<div class="form-group">
				<label>Description : </label>
				<input type="texte" name="description" id="description" class="form-control" value="<?=$lien->description?>"><br></td>
				</div>

				<div class="form-group">
				<label>URL : </label>
				<input type="texte" name="url" id="url" class="form-control" value="<?=$lien->url?>"><br></td>
				</div>
			
				<div class="form-group">
				<label>Webmaster : </label>
				<td><input type="texte" name="webmaster" id="webmaster" class="form-control" value="<?=$lien->webmaster?>"><br></td>
				</div>
			

			<div class="form-group">
				<label>Thème :</label>
				<select name="theme" id="theme" class="form-control"><br>
						<option>Choisissez</option>
						<option <?= $lien->theme=="actualité"?"selected":"" ?> >actualité</option>
						<option <?php if ($lien->theme=="musique") { echo "selected"; } ?>  >musique</option>
						<option <?php if ($lien->theme=="sport") { echo "selected"; } ?>  >sport</option>
						<option <?php if ($lien->theme=="sciences") { echo "selected"; } ?>  >sciences</option>
						<option <?php if ($lien->theme=="cinéma") { echo "selected"; } ?>  >cinéma</option>
						<option <?php if ($lien->theme=="divers") { echo "selected"; } ?>  >divers</option>
					</select>
					</div>
				<div form-control>
					<br>
					<br><input type="hidden" name="visible" value="non">	
					<br><input type="checkbox" name="visible" id="visible" <?php if ($lien->affichage== 'oui'){ echo "checked"; } ?> value="oui" class="btn btn-primary">Visible<br>		
					<br><input type="submit" name="valider" id="valider" class="btn btn-primary btn-lg"><br>
					<br><a class="btn btn-warning btn-lg" href="liste.php">Retour à la liste</a>
				</div>
				
				
				<input type="hidden" name="id" value="<?= $lien->id ?>">
</fieldset>
</div>
</form>
</body>
</html>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>