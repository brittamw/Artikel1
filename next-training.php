<?php 	require_once 'include/init.php.inc';

	
	//Um nächstes workout anzuzeigen, alle Tabellen zusammen führen um individuell für Benutzer auszuwählen
	//NameID muss ID sein, die man in sign-up-name.php und log-in-name.php als Benutzer eingibt, also variabel
			
	$query = $sql->prepare("SELECT `TrainWeek` Woche, `TrainTag` Tag, `ActTitle` Übung FROM `Name`, `Workout`, `Training`, `Acticity` 
							WHERE `TrainID` = `WorkTrainID` AND 
							`NameTrainID` = `TrainID` AND 
							`WorkActID` = `ActID` AND
							`NameID` = ?");	
								
	
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
	
	<h3>Führe von jeder Übung 2 mal 20 Wiederholungen aus! 
	Sonntag ist Ruhetag! Dienstag, Donnerstag und Samstag, walke 40 Minuten!</h3>
	
	<h3>Alle Übungen erklärt findest du hier:</h3>
	<form id="form-exercises" name="exercises" method="POST" target="_self" action = "all-exercises-explained.php"></form> 
	<input form="form-exercises" type="submit" value="Ansehen"><br>
	
	
	<h2>Fertig?</h2>
	<form id="form-training-fertig" name="training-fertig" method="POST" target="_self" action = "training-fertig.php"></form>   
	<input form="form-training-fertig" type="submit" value="JA" required><br>
	
</div>
<?php require_once 'include/footer.html.inc'; ?>