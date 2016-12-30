<?php

//navigation entre les pages
include_once('modele/blog/count_billet.php');
$nb_art = count_billet();
$nb_pages=$nb_art["nb_art"]/5;
if($nb_art%5!=0 || $nb_pages==0) {
	$nb_pages++;
}
$nb_pages = (int)$nb_pages;
include_once('modele/blog/get_billets.php');
if (isset($_GET["page"])) {
	$billets = get_billets((($_GET["page"]-1)*5), 5);
} else {
	$billets = get_billets(0, 5);
}

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (vue)
include_once('vue/blog/index.php');

