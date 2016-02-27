<?php 	require_once 'include/init.php.inc';

	$query = $sql->prepare("UPDATE `Name` SET `NameTrainID` = `NameTrainID` + 1  WHERE `NameID`= 12"); 
	$update = $query->execute();
	


	require_once 'include/header.html.inc';
?>

<div>
	<?=html_table_from_array($update)?>
	
	require_once 'include/footer.html.inc';
</div>	
<?php require_once 'include/footer.html.inc'; ?>