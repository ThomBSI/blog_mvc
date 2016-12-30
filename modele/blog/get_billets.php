<?php
/*
récupère les articles
*/
function get_billets($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT id_article, titre, contenu, DATE_FORMAT(date_article, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM articles ORDER BY date_article DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    
    return $billets;
}