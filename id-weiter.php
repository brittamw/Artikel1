<?php 	require_once 'include/init.php.inc';

$query = $sql->prepare("SELECT `NameVorname`, `NameNachname` FROM `Name` WHERE `NameID` = ?");		//Benutzer begrüßen-->Vor und Nachname aus der Datenbank zeigen
//html_dump($_POST);
$idweiter = $_POST['id'];
$query->execute(array($idweiter));
$allidweiter = $query->fetchAll();








require_once 'include/header.html.inc';
?>
<div>
	<h2>Hallo! Schön, dass du wieder da bist!</h2>
	<?=html_table_from_array($allidweiter)?>
	
	<h3>Zum nächsten Training</h3>
	
	<form id="form-next-training" name="next-training" method="GET" target="_self" action = "next-training.php?NameID=<?=$lastID?>"></form>   
	<input form="form-next-training" type="submit" value = "Los geht's!"><br>
		
	
	

	
</div>
<?php require_once 'include/footer.html.inc'; ?>