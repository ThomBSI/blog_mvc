<?php

/*
Vérifi que les 2mdp saisies
sont identiques
*/
function verif_pass($pass1,$pass2) {
	$pass1 = (String)$pass1;
	$pass2 = (String)$pass2;

	if ($pass1==$pass2) {
		return true;
	} else {
		return false;
	}
}
