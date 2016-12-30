<?php
/*
Récupère les commentaires d'un article donné
*/
function get_commentaires($offset, $limit, $id_art)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    $id_art = (int) $id_art;
        
    $req = $bdd->prepare('SELECT pseudo, message, DATE_FORMAT(date_comm, \'%d/%m/%Y à %Hh%imin\') AS date_comm 
    	FROM commentaires  
    	WHERE id_article=:id_art 
    	ORDER BY date_comm 
    	DESC LIMIT :offset, :limit');
    $req->bindParam(':id_art', $id_art, PDO::PARAM_INT);
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $commentaires = $req->fetchAll();
    
    
    return $commentaires;
}