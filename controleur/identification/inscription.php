<?php

if(isset($_POST["bt_sub_insc"])) {
	include_once("modele/identification/create_account.php");
	if (create_account()) { //on vérifi que le compte a bien été créé
		header("location:inscription.php?create=true"); //si c'st le cas on le signal à la vue avec la variable create
	} else {
		header("location:inscription.php?create=false"); //si ça n'est pas le cas pareil, et cela veux dire qu'un paramètre a été oublié
	}
}

include_once("vue/identification/inscription.php");