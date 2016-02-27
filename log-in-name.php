<?php 	require_once 'include/init.php.inc';

$query = $sql->prepare("SELECT * FROM `Name` WHERE `NameVorname` LIKE ?");
//html_dump($_POST);
$hund = $_POST['vorname'];
$hund = '%'.$hund.'%';									//prozent --> LIKE

$query->execute(array($hund));
$maus = $query->fetchAll();




require_once 'include/header.html.inc';
?>
<div>

	<?=html_table_from_array($maus)?>
	
	<h1>Gib deine ID an:</h1>
	
	<form id = "form-id-weiter" name="id-weiter" method = "POST" target ="_self" action = "id-weiter.php" ></form>
	<input form="form-id-weiter" type="text" name="id" maxlength="64" placeholder="ID"><br>
	<input form="form-id-weiter" type="submit" value="Weiter"><br>							
	
</div>
<?php require_once 'include/footer.html.inc'; ?>