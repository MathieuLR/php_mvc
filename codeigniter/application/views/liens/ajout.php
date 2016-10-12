
<form id="form_ajout">
	
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
					<br><label>Visible <input type="checkbox" name="affichage" id="visible" value="oui" class="btn btn-primary btn-sm"></label>
					<br>
					<br><input type="button" value="valider" id="valider" class="btn btn-primary btn-lg btn-ajout">
					<br>
					<br><a class="btn btn-warning btn-lg btn-retour">Retour à la liste</a>
				</div>
</fieldset>
</form>
 <script>
$(".btn-retour").click(function() {
      $.ajax({ 
        url: "<?= site_url("liens/liste/") ?>",
          success: function(data) {
            $("#listeBox1").html(data);
            $("#modal_index").modal("hide");
          },
      });
  });

$(".btn-ajout").click(function() {
		$.post({ 
			url: "<?= site_url("liens/ajout/") ?>",
			data: $("#form_ajout").serialize(),
			success: function(data) {

				$("#listeBox1").load("<?= site_url("liens/liste") ?>");
				$("#modal_index").modal("hide");
				
		 	},
	  	});
      
  });
  	
	
  </script>

