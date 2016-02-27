<?php 	require_once 'include/init.php.inc';

	
							
	$query = $sql->prepare("SELECT `Work1`, `Work2`, `Work3`, `Work4` FROM `Name`, `Workout`, `Training` 
							WHERE `TrainWorkID` = `WorkID` AND `NameTrainID` = `TrainID` AND `NameID` = 16");	
								
		

	$workid = $_POST['NameID'];
	$query->execute(array($workid));
	$allidwork = $query->fetchAll();
	
	//html_dump($_GET);
	
	
	
	
	
	

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