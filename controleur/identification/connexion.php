<?php
session_start();

if (isset($_POST["bt_sub_conn"])) {

	include_once("modele/identification/valid_connexion.php");

	$connex_valide = valid_connexion($_POST["pseudo"],$_POST["pass"]);
	(boolean)$_SESSION["membre"]=true;

    if ($connex_valide) {
        header("location:blog.php");
        $_SESSION["connecte"] = true;
    } else {
        header("location:connexion.php?identification=fail");
    }
}

include_once("vue/identification/connexion.php");
