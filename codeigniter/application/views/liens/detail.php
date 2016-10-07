<!DOCTYPE html>
<html>
  <head>
	<title>Atelier PHP n°4 - page de détail</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
  <link rel="stylesheet" type="text/css" href= <?= base_url('formulaire.css')?>>


  </head>
    <body>
      <div class="container global" id="placement">
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

      <a class="btn btn-danger btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/suppr/<?php echo $lien->id?>">
        Supprimer
      </a>
      <a class="btn btn-primary btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/modif/<?php echo $lien->id?>">
        Modifier
      </a>
      <br>
      <br>
      <a class="btn btn-warning btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/liste">Retour a la liste</a>
      <br>


    </div>
  </body>
</html>
<script src=<?= base_url("js/bootstrap.js")?>></script>
<script src=<?= base_url("js/jquery.js")?>></script>