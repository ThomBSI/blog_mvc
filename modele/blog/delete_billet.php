<?php 
function delete_billet($id_article) {
	
	global $bdd;
	$id_article = (int)$id_article;

	$sql_req = "DELETE FROM articles WHERE id_article=:id_article";
	$req= $bdd->prepare($sql_req);
	$req->bindParam(':id_article', $id_article, PDO::PARAM_INT);
	$req->execute();

	$sql_req2 = "DELETE FROM commentaires WHERE id_article=:id_article";
	$req2= $bdd->prepare($sql_req2);
	$req2->bindParam(':id_article', $id_article, PDO::PARAM_INT);
	$req2->execute();
}