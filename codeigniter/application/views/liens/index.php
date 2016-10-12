<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
  	
  	<script src=<?= base_url("js/jquery.js")?>></script>
  	<script src=<?= base_url("js/bootstrap.js")?>></script>
  	<link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
  	<link rel="stylesheet" type="text/css" href= <?= base_url('formulaire.css')?>>
	
</head>
<body>
	
		<div id="modal_index" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" >
	 	 	<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" id="contenu_modal_index">
		 		 ...
				</div>
	  		</div>
		</div>

		<div id="listeBox1"></div>

</body>
</html>
<script>
	$(document).ready(function() {
	  	$.ajax({ 
			url: "<?= site_url("liens/liste/") ?>",
			success: function(data) {
				$("#listeBox1").html(data);
				// $("#modal_index").modal("show");
		 	},
	  	});
	});
</script>