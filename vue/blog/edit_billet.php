<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edition d'article</title>
	<link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="vue/style_menu_bar.css">
</head>
<body>
	<?php include_once("vue/menu_bar.php"); ?>


	<?php
		if ($_GET["edit"]=='true') {
	?>
	<form method="POST" action="edit_billet.php?edit=true&amp;billet=<?php echo $currentBilletId;?>">
		<label for="edit_titre">Titre de l'article :</label>
		<input type="text" id="edit_titre" name="titre" value=
			<?php
				 echo htmlspecialchars((String)$oneBillet[0]["titre"]);
			?>
		>

		<label for="edit_contenu">Contenu de l'article :</label>
		<textarea id="edit_contenu" rows="10" cols="50" name="contenu">
			<?php
				 echo htmlspecialchars((String)$oneBillet[0]["contenu"]);
			?>
		</textarea>
		<input type="submit" name="bt_sub_edit" value="Publier">
	</form>

	<?php 
		} else if($_GET["edit"]=='false') {
	?>

	<form method="POST" action="edit_billet.php?edit=false">
		<label for="edit_titre">Titre de l'article :</label>
		<input type="text" id="edit_titre" name="titre">
		<label for="edit_contenu">Contenu de l'article :</label>
		<textarea id="edit_contenu" rows="10" cols="50" name="contenu">Texte de l'article</textarea>
		<input type="submit" name="bt_sub_new" value="Publier">
	</form>

	<?php 
		}
	?>
</body>
</html>