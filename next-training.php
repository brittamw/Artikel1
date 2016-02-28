<?php 	require_once 'include/init.php.inc';

	
	//Um nächstes workout anzuzeigen, alle Tabellen zusammen führen um individuell für Benutzer auszuwählen
	//NameID muss ID sein, die man in sign-up-name.php und id-weiter.php als Benutzer eingibt, also variabel
			
	$query = $sql->prepare("SELECT `Work1`, `Work2`, `Work3`, `Work4` FROM `Name`, `Workout`, `Training` 
							WHERE `TrainWorkID` = `WorkID` AND `NameTrainID` = `TrainID` AND `NameID` = ?");	
								
		

	//$workid = $_POST['NameID'];
	//Kann die Post Methode nur Strings übergeben? Wie konvertieren zu Int?
	
	$workid = (is_numeric($_POST['NameID']) ? (int)$_POST['NameID'] : 0);
	$query->execute(array($workid));
	$allidwork = $query->fetchAll();
	
	html_dump($_POST);
	
	
	
	
	
	
	
	

require_once 'include/header.html.inc';
?>
<div>
    <h2>Dein nächstes Training!</h2>
	
	
	<?=html_table_from_array($allidwork)?>
	
	<br>Führe von jeder Übung 20 Wiederholungen aus.</br>
	<br>Wenn du fertig bist, fange von vorne an und führe nochmals 20 Wiederholungen von jeder Übung aus!</br>
	
	
	
	<h2>Fertig?</h2>
	<form id="form-training-fertig" name="training-fertig" method="POST" target="_self" action = "training-fertig.php"></form>   

	<input form="form-training-fertig" type="submit" value="Fertig" required><br>
	
</div>
<?php require_once 'include/footer.html.inc'; ?>