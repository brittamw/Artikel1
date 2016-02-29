<?php 	require_once 'include/init.php.inc';
	
	//Neuen Benutzer registrieren, NameTrainID wird mit Startwert 101 belegt
	$query = $sql->prepare("INSERT INTO `Name`(`NameVorname` , `NameNachname`, `NameTrainID`) VALUES ( :vorname, :nachname, 101)");

	//Array befüllen
	$data = Array(
		':vorname' => $_POST['vorname'],
		':nachname' => $_POST['nachname']
	);

	$query->execute($data);
	$lastID = $sql->lastInsertId();


	//Neuen Benutzereintrag selecten und unten in html-table.. ausgeben
	$name = $sql->query("SELECT `NameID`, `NameVorname` Vorname, `NameNachname` Nachname FROM `Name` WHERE `NameID` = $lastID")->fetchAll();

	require_once 'include/header.html.inc';
?>
<div>

	<h3>Du hast dich erfolgreich registriert:</h3>
	<?=html_table_from_array($name)?>
	<h2>Gib deine NameID an</h2>
																			
	<form id="form-id" name="NameID" method="POST" target="_self" action = "next-training.php"></form>
	<input form="form-id" type ="text" name = "NameID" maxlength="64" placeholder = "ID" required><br>
	<input form="form-id" type="submit" value="Auf geht's!" required><br>
	
	
	
	
</div>
<?php require_once 'include/footer.html.inc'; ?>