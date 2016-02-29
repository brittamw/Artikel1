<?php 	require_once 'include/init.php.inc';

	require_once 'include/header.html.inc';
?>

	<h1>Starte fit ins neue Jahr 2016!</h1>
	<div>
		<h2>Dein 12 Wochen Trainigsplan</h2>
		<h3>Melde dich an</h3>
			<form id = "form-log-in-name" name="log-in-name" method = "POST" target ="_self" action = "log-in-name.php" ></form>		
			<input form ="form-log-in-name" type = "text" name = "vorname" maxlength="64" placeholder="Vorname"><br>
			<input form ="form-log-in-name" type = "text" name = "nachname" maxlength="64" placeholder="Nachname"><br>
			<input form ="form-log-in-name" type = "submit" value = "Einloggen"><br>
		
		
		
		<h4>Noch keinen Account? Registriere dich!</h4>
	
		<form id="form-sign-up-name" name="sign-up-name" method="POST" target="_self" action = "sign-up-name.php"></form> 
		
		<input form="form-sign-up-name" type="text" name="vorname" maxlength="64" placeholder="Vorname" required><br>
		<input form="form-sign-up-name" type="text" name="nachname" maxlength="64" placeholder="Nachname" required><br>
		<input form="form-sign-up-name" type="submit" value="Registrieren"><br>
		
		
	</div>

<?php
	require_once 'include/footer.html.inc';
?>