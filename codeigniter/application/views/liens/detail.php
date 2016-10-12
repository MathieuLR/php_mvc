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

                   

      <a class="btn btn-danger btn-lg btn-suppr" data-id="<?= $lien->id ?>"> Supprimer
      </a>
      <a class="btn btn-primary btn-lg btn-modif" data-id="<?= $lien->id ?>"> Modifier
      </a>
      <br>
      <br>
      <a class="btn btn-warning btn-lg btn-retour" >Retour a la liste</a>
      <br>
      <div><br></div> 

   
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

$(".btn-modif").click(function() {
      $.ajax({ 
      url: "<?= site_url("liens/modif/") ?>" + $(this).data("id"),
          success: function(data) {
            $("#contenu_modal_index").html(data);
            $("#modal_index").modal("show");
          },
      });
  });

$(".btn-suppr").click(function() {
      $.ajax({ 
      url: "<?= site_url("liens/suppr/") ?>" + $(this).data("id"),
          success: function(data) {
            $("#contenu_modal_index").html(data);
            $("#modal_index").modal("show");
          },
      });
  });
</script>