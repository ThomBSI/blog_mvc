<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
    <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="vue/style_menu_bar.css"/>
</head>
<body>
	 <?php include_once("vue/menu_bar.php"); ?>

	 <div id="no_inscrit">
	 	<p>Non inscrit ?</p><br>
	 	<a href="inscription.php">Créer un compte</a>
	 </div>

	 <br>

	 <div id="inscrit">
	 	<form method="POST" action="connexion.php">
	 		<label for="pseudo">Pseudo</label>
	 		<input type="text" name="pseudo" id="pseudo">
	 		<label for="pass"> Mot de passe</label>
	 		<input type="text" name="pass" id="pass">
	 		<input type="submit" name="bt_sub_conn" value="Accéder">
	 	</form>
	 
	 	<?php 
	 	if(isset($_GET["identification"]) && $_GET["identification"]=="fail") {
	 		echo "<p id='invalid_param'>Pseudo ou mot de passe incorect</p>";
	 	}
	 	?>

	 </div>

</body>
</html>