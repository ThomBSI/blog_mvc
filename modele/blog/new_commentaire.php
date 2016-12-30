<?php
function new_commentaire($pseudo,$message,$id_article) {
	
	global $bdd;
	$pseudo = (String)$pseudo;
	$message = (String)$message;
	$id_article = (int)$id_article;

	$sql_req = "INSERT INTO `commentaires`(`date_comm`, `pseudo`, `message`, `id_article`) VALUES (NOW(), :pseudo, :message, :id_article)";
	$req = $bdd->prepare($sql_req);
	$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
	$req->bindParam(':message', $message, PDO::PARAM_STR);
	$req->bindParam(':id_article', $id_article, PDO::PARAM_INT);
	$req->execute();
}