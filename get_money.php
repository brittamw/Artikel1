<?php 	require_once 'include/init.php.inc';
	
	
	
	switch ($_GET['job']) {
		case 'beggar':
			$money = 20;
			break;
		case 'pickpocket':
			$money = 50;
			break;
		case 'peon':
			$money = 70;
			break;
		case 'errandboy':
			$money = 100;
			break;
		
		default:
			$money = 0;
			break;
	}

	//TODO: Add money to Database and make useful output
	
	$query = $sql->prepare("UPDATE `character` SET `money` = `money` + ?  WHERE `id` =?"); //Spalte money hinzufügen in phpmyadmin
	$katze = $query->execute(array($money, $_GET['id']));
	if($katze == true) {
		$message = "Du hast erfolgreich Geld verdient";			//message wird unten ausgegeben <?=$message
	}
	else{
		$message = "Du hast kein Geld verdient";
	}
	
	
	
	

	require_once 'include/header.html.inc';
?>
<div>
	<h2>Schritt 2</h2>
	<?=$message?>										
	
</div>
<?php require_once 'include/footer.html.inc'; ?>