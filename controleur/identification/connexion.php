<?php
session_start();

if (isset($_POST["bt_sub_conn"])) {

	include_once("modele/identification/valid_connexion.php");

	try {
		valid_connexion($_POST["pseudo"],$_POST["pass"]);
		(boolean)$_SESSION["membre"]=true;
		header("location:blog.php");
	} catch (Exception $e) {
		header("location:connexion.php?identification=fail");
	}

}

include_once("vue/identification/connexion.php");