<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
    <link rel="stylesheet" type="text/css" href= <?= base_url('formulaire.css')?>>
</head>
<body>

<form action="ajout" method= "POST">
	<div class="container global">
	<fieldset class="form-group"><legend><h2>Formulaire</h2></legend>
			    <div class="form-group">
				<label>Titre : </label>
				<input	type="text" name="titre" id ="titre" class="form-control" placeholder="Titre"><br></td>
				</div>

				<div class="form-group">
				<label>Description : </label>
				<input type="texte" name="description" id="description" class="form-control" placeholder="Description"><br></td>
				</div>

				<div class="form-group">
				<label>URL : </label>
				<input type="texte" name="url" id="url" class="form-control" placeholder="URL"><br></td>
				</div>
			
				<div class="form-group">
				<label>Webmaster : </label>
				<td><input type="texte" name="webmaster" id="webmaster" class="form-control" placeholder="Webmaster"><br></td>
				</div>
			
				<div class="form-group">
				<label>Thème :</label>
				<select name="theme" id="theme" class="form-control" placeholder="Thème"><br>
					<option >Choisissez</option>
					<option >actualité</option>
					<option >musique</option>
					<option >sport</option>
					<option >sciences</option>
					<option >cinéma</option>
					<option >divers</option>
				</select>
				</div>
				<div form-control>
					
					<input type="hidden" name="affichage" value="non" class="btn btn-info">			
					<br><label>Visible <input type="checkbox" name="affichage" id="visible" value="oui" class="btn btn-primary btn-sm"></label><br>
					<br><input type="submit" name="valider" id="valider" class="btn btn-primary btn-lg"><br>
					<br><a class="btn btn-warning btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/liste">Retour à la liste</a>
				</div>
</fieldset>
</div>
</form>
</body>
</html>
<script src=<?= base_url("js/bootstrap.js")?>></script>
<script src=<?= base_url("js/jquery.js")?>></script>