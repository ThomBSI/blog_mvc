<?php


if ($_GET["edit"]=='true') { //edition
	$currentBilletId = $_GET["billet"];

	//récupère l'article
	include_once('modele/blog/get_one_billet.php');
	$oneBillet = get_one_billet($currentBilletId);
	$oneBillet[0]['titre'] = htmlspecialchars($oneBillet[0]['titre']);
	$oneBillet[0]['contenu'] = htmlspecialchars($oneBillet[0]['contenu']);

	if (isset($_POST["bt_sub_edit"])) {
		//update de l'atcile
		include_once("modele/blog/update_billet.php");
		update_billet($currentBilletId,htmlspecialchars($_POST["titre"]),htmlspecialchars($_POST["contenu"]));
		header("location: commentaires.php?billet=".$currentBilletId."");
	}
} else if($_GET["edit"]=='false') { //new
	
	if (isset($_POST["bt_sub_new"])) {

	//nouvel article
	include_once("modele/blog/new_billet.php");
	new_billet($_POST["titre"],$_POST["contenu"]);
	header("location: blog.php");

	}
}

include_once("vue/blog/edit_billet.php");