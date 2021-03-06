<?php

/*
Permet à un user de
se connecter
*/
function valid_connexion($pseudo,$pass) {

	global $bdd;
	$pseudo = (String)$pseudo;
	$pass = (String)$pass;

	$hpass = sha1($pass);

    try {
		$sql_req = "SELECT id_membre, pseudo, pass FROM membres WHERE pseudo=:pseudo AND pass=:hpass";
		$req = $bdd->prepare($sql_req);
		$req->bindParam(':pseudo',$pseudo,PDO::PARAM_STR);
		$req->bindParam(':hpass',$hpass,PDO::PARAM_STR);
		$req->execute();
        return true;
    } catch(Exception $e) {
        return false;
    }
}
