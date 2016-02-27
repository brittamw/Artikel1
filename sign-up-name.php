<?php 	require_once 'include/init.php.inc';
	
	//Prepare the Query
	$query = $sql->prepare("INSERT INTO `Name`(`NameVorname`, `NameNachname`, `NameTrainID`) VALUES ( :vorname, :nachname, 1)"); //Neuen Benutzer anlegen, NameTrainID wird mit 1 belegt
	

	//Fill the data-array for prepared query
	$data = Array(
		':vorname' => $_POST['vorname'],
		':nachname' => $_POST['nachname']
	);

	$query->execute($data);
																								//?NameID=<?=$lastID?

	$lastID = $sql->lastInsertId();


	$name = $sql->query("SELECT * FROM `Name` WHERE `NameID` = $lastID")->fetchAll();
	//html_dump($_POST);

	require_once 'include/header.html.inc';
?>
<div>

	<h3>Du hast dich erfolgreich registriert:</h3>
	<?=html_table_from_array($name)?>
	<h2>Gib deine NameID an</h2>
																			
	<form id="form-id" name="NameID" method="POST" target="_self" action = "next-training.php"></form>
	<input form = "form-id" name = "NameID" type = "number"	placeholder = "ID" required><br>
	<input form="form-id" name = "NameID" type="submit" value="Zum nächsten Training!" required><br>
	
	
	
</div>
<?php require_once 'include/footer.html.inc'; ?>
