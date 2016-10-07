<?php
function connexionbase()
{
  //Parametrage connexion au serveur
$host = "localhost";
$login = "root";
$password = "";
$base = "sites";

try
{
	$db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname=' . $base, $login, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}
catch (Exeception $e)
{
 print 'Erreur : ' . $e->getMessage() . '<br />';
 print 'N° : ' . $e->getCode ();
 die ("Connexion au serveur impossible. ");
}

}


?>