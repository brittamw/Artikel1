<?php 	require_once 'include/init.php.inc';

	
	//Um nächstes workout anzuzeigen, alle Tabellen zusammen führen um individuell für Benutzer auszuwählen
	//NameID muss ID sein, die man in sign-up-name.php und log-in-name.php als Benutzer eingibt, also variabel
			
	$query = $sql->prepare("SELECT `TrainWeek` Woche, `TrainTag` Tag, `Work1` Übung1, `Work2` Übung2, `Work3` Übung3, `Work4` Übung4 FROM `Name`, `Workout`, `Training` 
							WHERE `TrainWorkID` = `WorkID` AND `NameTrainID` = `TrainID` AND `NameID` = ?");	
								
	
	$workid = $_POST['NameID'];
	$query->execute(array($workid));
	$allidwork = $query->fetchAll();
	
	//NameTrainID um 1 hochzählen, damit beim nächsten mal auch das nächste Training angezeigt wird.
	//Falls NameTrainID = 185 (maximale ID in Datenbank) dann wieder auf 101 zurück setzen, damit man von vorne anfangen kann
	
		
	$query = $sql->prepare("	
	UPDATE
        `Name`
    SET
        `NameTrainID` =
        (
            CASE `NameTrainID` 
                WHEN
                    185
                THEN
                    101
                ELSE
					((`NameTrainID`)+1)
                  
            END
        )
    WHERE
        `NameID` = ?	
	");
	
	$updatetrainid = $_POST['NameID'];
	$query->execute(array($updatetrainid));

	
require_once 'include/header.html.inc';
?>
<div>
    <h2>Dein nächstes Training!</h2>
	
	
	<?=html_table_from_array($allidwork)?>
	
	<h3>Führe von jeder Übung 20 Wiederholungen aus. Wenn du fertig bist, fange von vorne an und führe nochmals 20 Wiederholungen von jeder Übung aus!</h3>
	
	
	
	<h2>Fertig?</h2>
	
	<form id="form-training-fertig" name="training-fertig" method="POST" target="_self" action = "training-fertig.php"></form>   
	<input form="form-training-fertig" type="submit" value="Fertig" required><br>
	
</div>
<?php require_once 'include/footer.html.inc'; ?>