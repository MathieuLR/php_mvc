
<div class="container global">
<h2><p align='center'>SOMMAIRE</h2>
<br><a id="bisajout" class="btn btn-warning btn-lg">Ajouter un formulaire </a><br>
<br>
 <i> (liste triée par date de création) </i></p align><br />
   
	 <table class="table table-hover">
	 
		<?php foreach ($liste as $row): 
			  if (substr( $row->url, 0, 4 ) != "http") {
				$row->url = "http://" . $row->url;
			  }
		?>
			
	   
				<tr>
					<td width='5%'><?php echo $row->id;?></a></td>
					<td width='49%'><?php echo $row->titre;?></a></td>
					<td> <i><a id="couleurlien" <a href='<?php echo $row->url; ?>'><?php echo $row->url;?></a></td>
					<td  width='14%'><a class="btn btn-primary btn-details" data-id="<?= $row->id ?>">Afficher le détail </a></td>
					</td>
				</tr>

		  <?php endforeach; ?>   
		
	  

	
	</table>
	</div>

<script>
	$(".btn-details").click(function() {
	  	$.ajax({ 
			url: "<?= site_url("liens/detail/") ?>" + $(this).data("id"),
			success: function(data) {
				$("#contenu_modal_index").html(data);
				$("#modal_index").modal("show");
		 	},
	  	});
	});

    $("#bisajout").click(function() {
    	$.ajax({
    		url: "<?= site_url("liens/ajout") ?>",
    		success: function(data) {
    			$("#contenu_modal_index").html(data);
    			$("#modal_index").modal("show");
    		},

    	});

    });
</script>

	

