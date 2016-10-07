<script type="text/javascript">


<?php
{

require "connexionbase.php";
$db = connexionbase();
$requetesuppression = $db->prepare("DELETE FROM liens WHERE id = :id");
$requetesuppression->bindParam(":id",$_POST["id"]);
$requetesuppression->execute();

header("location: liste.php");

}
?>
else 
{

	<?php header("location: liste.php");?>
}

</script>

