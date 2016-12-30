<?php
/*
récupère un article
*/
function get_one_billet($id_art)
{
    global $bdd;
    $id_art = (int) $id_art;
        
    $req = $bdd->prepare('SELECT id_article, titre, contenu, DATE_FORMAT(date_article, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr 
        FROM articles 
        WHERE id_article=:id_art');
    $req->bindParam(':id_art', $id_art, PDO::PARAM_INT);
    $req->execute();
    $one_billet = $req->fetchAll();
    
    
    return $one_billet;
}