<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>testDb.php</title>
		<?php
		$id=$_GET["id"];
			try {
				$db=new PDO('mysql:host=localhost;charset=utf8;dbname=sites', 'root', '');
			}
			catch (Exception $e)
			{
				echo 'Erreur : ' . $e->getMessage() . '<br />' ;
				echo 'N : ' . $e->getCode() ;
				die('fin du script');
			}

$requete = "SELECT * FROM liens WHERE id=" .$id;
$result = $db->query($requete);
$lien = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();



		?>
</head>
<body>
<div> <?php echo $lien->titre ?> </div>
<div> <?php echo $lien->webmaster ?> </div>
<div> <?php echo $lien->description ?> </div>
<div> <?php echo $lien->url ?> </div>
<div> <?php echo $lien->theme ?> </div>
</body>
</html>