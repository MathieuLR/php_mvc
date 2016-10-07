<!DOCTYPE html>
<html>
<head>
    <title>Atelier PHP N° 4 : Affichage du Sommaire </title>
    <meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
  <link rel="stylesheet" type="text/css" href= <?= base_url('formulaire.css')?>>
</head>
<body>
<div class="container global">
<h2><p align='center'>SOMMAIRE</h2>
<br><a class="btn btn-warning btn-lg" href="http://127.0.0.1/phase1/codeigniter/index.php/liens/ajout">Ajouter un formulaire </a><br>
<br>
 <i> (liste triée par date de création) </i></p align><br />
   
     <table class="table table-hover">
     
        <?php foreach ($liste as $row): ?>
            
       
    <tr>
        <td width='5%'><?php echo $row->id;?></a></td>
        <td width='49%'><?php echo $row->titre;?></a></td>
        <td> <i><a id="couleurlien" <a href='<?php echo $row->url; ?>'><?php echo $row->url;?></a></td>
        <td width='14%'><a class="btn btn-primary"  href="http://127.0.0.1/phase1/codeigniter/index.php/liens/detail/<?= $row->id;?>">Afficher le détail </a></td>
        </td>
    </tr>
          <?php endforeach; ?>   
        
    
     
    

    </table>
    </div>
</body>
</html>

    </div>

