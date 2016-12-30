<?php
function new_billet($titre,$contenu) {
	
	global $bdd;
	$titre = (String)$titre;
	$contenu = (String)$contenu;

	$sql_req = "INSERT INTO `articles`(`date_article`, `titre`, `contenu`) VALUES (NOW(), :titre, :contenu)";
	$req = $bdd->prepare($sql_req);
	$req->bindParam(':titre', $titre, PDO::PARAM_STR);
	$req->bindParam(':contenu', $contenu, PDO::PARAM_STR);
	$req->execute();
}