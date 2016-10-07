<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
  <link rel="stylesheet" type="text/css" href= <?= base_url('formulaire.css')?>>

</head>
<body>

<form action="http://127.0.0.1/phase1/codeigniter/index.php/liens/script_modif" method= "POST">
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
					<br><input type="hidden" name="affichage" value="non">	
					<br><input type="checkbox" name="affichage" id="visible" <?php if ($lien->affichage== 'oui'){ echo "checked"; } ?> value="oui" class="btn btn-primary">Visible<br>		
					<br><input type="submit" name="valider" id="valider" class="btn btn-primary btn-lg"><br>
					<br><a class="btn btn-warning btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/liste">Retour à la liste</a>
				</div>
				
				
				<input type="hidden" name="id" value="<?= $lien->id ?>">
</fieldset>
</div>
</form>
</body>
</html>
<script src=<?= base_url("js/bootstrap.js")?>></script>
<script src=<?= base_url("js/jquery.js")?>></script>