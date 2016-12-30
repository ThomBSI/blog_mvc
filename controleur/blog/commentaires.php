<?php
$currentBilletId = $_GET["billet"];


//afficher le billet de blog
include_once('modele/blog/get_one_billet.php');
$oneBillet = get_one_billet($currentBilletId);

$oneBillet[0]['titre'] = htmlspecialchars($oneBillet[0]['titre']);
$oneBillet[0]['contenu'] = htmlspecialchars($oneBillet[0]['contenu']);


//afficher les commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires(0,10,$currentBilletId);

foreach ($commentaires as $key => $commentaire) {
	$commentaires[$key]['message'] = htmlspecialchars($commentaire['message']);
	$commentaires[$key]['pseudo'] = htmlspecialchars($commentaire['pseudo']);
}


//ecrire un commentaire
if (isset($_POST["bt_sub_com"])) {
	include_once('modele/blog/new_commentaire.php');
	new_commentaire($_POST["pseudo"],$_POST["message"],$currentBilletId);
	header("location: commentaires.php?billet=".$currentBilletId."");
}


if (isset($_POST["bt_delete_billet"])) {
	include_once("modele/blog/delete_billet.php");
	delete_billet($currentBilletId);
	header("location: blog.php");
}


//vue
include_once('vue/blog/commentaires.php');