<?php 

function count_billet() {

	global $bdd;

	$sql_req = "SELECT COUNT(*) AS nb_art FROM articles";
	$req = $bdd->query($sql_req);
	$nb_art = $req->fetch();

	return $nb_art;
}