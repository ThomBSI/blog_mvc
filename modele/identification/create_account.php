<?php

include_once("modele/identification/verif_pass.php");

/*
Crée un compte user
a partir des données saisies
*/
function create_account($pseudo,$pass1,$pass2,$mail)
{
	global $bdd;
	$pseudo = (String)$pseudo;
	$pass1 = (String)$pass1;
	$pass2 = (String)$pass2;
	$mail = (String)$mail;

	if(verif_pass($pass1,$pass2)) {
		$sql_req = "INSERT INTO 'membres' ('pseudo', 'pass', 'date_creation', 'mail') VALUES(:pseudo, :pass, NOW(), :mail)";
		$req = $bdd->prepare($sql_req);
		$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam(':pass', $pass1, PDO::PARAM_STR);
		$req->bindParam(':mail', $mail, PDO::PARAM_STR);
		$req->execute();

		return true;
	} else {
		return false;
	}
}
