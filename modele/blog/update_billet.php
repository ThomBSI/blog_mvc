<?php 
function update_billet($id_article,$titre,$contenu) {
	
	global $bdd;
	$id_article = (int)$id_article;
	$titre = (String)$titre;
	$contenu = (String)$contenu;

	$sql_req = "UPDATE `articles` SET `titre`=:titre,`contenu`=:contenu WHERE id_article=:id_article";
	$req= $bdd->prepare($sql_req);
	$req->bindParam(':titre', $titre, PDO::PARAM_STR);
	$req->bindParam(':contenu', $contenu, PDO::PARAM_STR);
	$req->bindParam(':id_article', $id_article, PDO::PARAM_INT);
	$req->execute();
}