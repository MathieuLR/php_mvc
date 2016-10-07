<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if (file_exists("ListeLiens.txt")) 
{

 $fp = file("ListeLiens.txt"); 
 foreach ($fp as $key) {

 	echo "<a href=$key>".$key."</a></br>";
 }
}
else {
 echo "Fichier introuvable !";
 exit(); 

}
?>
</body>
</html>
