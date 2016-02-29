<?php 	require_once 'include/init.php.inc';
	
	//Vorname mit Einträgen der Tabelle vergleichen, damit man sich selbst auswählen kann
	$query = $sql->prepare("SELECT `NameID` , `NameVorname` Vorname, `NameNachname` Nachname FROM `Name` WHERE `NameVorname` LIKE ?");
	$hund = $_POST['vorname'];
	$hund = '%'.$hund.'%';									//prozent --> LIKE

	$query->execute(array($hund));
	$maus = $query->fetchAll();
	
	//wenn der name schon existiert
	if($maus == true) {
		$message = "Schön, dass du wieder da bist!";
		$tabelle = html_table_from_array($maus);			
	}
	//wenn man noch nicht angemeldet ist
	else{
		$message = "Du bist leider noch nicht registriert";
		$tabelle = "";
	}
	


require_once 'include/header.html.inc';
?>
<div>

	
	<h1>Willkommen!</h1>
	
	<h2><?=$message?></h2>
	<?=$tabelle?>
	
	
	<h3>Gib deine NameID an:</h3>
	
	<form id = "form-id-weiter" name="id-weiter" method = "POST" target ="_self" action = "next-training.php" ></form>
	<input form="form-id-weiter" type="text" name="NameID" maxlength="64" placeholder="ID"><br>
	<input form="form-id-weiter" type="submit" value="Zum nächsten Training!"><br>	

	<h3>Oder registriere dich, falls du noch keinen Account hast:</h3>
	
	<form id="form-sign-up-name" name="sign-up-name" method="POST" target="_self" action = "sign-up-name.php"></form>
	<input form="form-sign-up-name" type="text" name="vorname" maxlength="64" placeholder="Vorname"><br>
	<input form="form-sign-up-name" type="text" name="nachname" maxlength="64" placeholder="Nachname"><br>
	<input form="form-sign-up-name" type="submit" value="Registrieren"><br>
	
	
	
</div>
<?php require_once 'include/footer.html.inc'; ?>