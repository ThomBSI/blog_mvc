<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
    <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="vue/style_menu_bar.css"/>
</head>
<body>
	 
	<h2>Création de compte</h2>

	<form method="POST" action="inscription.php">
	 	
	 	<label for="pseudo">Pseudo</label>
	 	<input type="text" name="pseudo" id="pseudo">
	 	
	 	<label for="pass1">Mot de passe</label>
	 	<input type="text" name="pass1" id="pass1">
	 	
	 	<label for="pass2">Confirmer le mot de passe</label>
	 	<input type="text" name="pass2" id="pass2">
	 	
	 	<label for="mail">Adresse mail valide</label>
	 	<input type="text" name="mail" id="mail">

	 	<input type="submit" name="bt_sub_insc" value="Valider l'inscription">
	</form>
</body>
</html>