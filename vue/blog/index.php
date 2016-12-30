<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/style_menu_bar.css" rel="stylesheet" type="text/css" />
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
        <?php include_once("vue/menu_bar.php"); ?>

        <h2>Derniers billets du blog :</h1>

        <?php 
        if (isset($_GET["page"])) {
            echo "<p>Page ".$_GET["page"]." sur ".$nb_pages."</p>";
        } else {
            echo "<p>Page 1 sur ".$nb_pages."</p>";
        }
        ?>
 
<?php
foreach($billets as $billet)
{
?>
<div class="news">
    <h3>
        <?php echo $billet['titre']; ?>
        <em>le <?php echo $billet['date_creation_fr']; ?></em>
    </h3> 
    
    <p>
        <?php echo $billet['contenu']; ?>
        <br/>
        <em><a href="commentaires.php?billet=<?php echo $billet['id_article']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
}
?>
<a href="edit_billet.php?edit=false">Nouvel article</a><br/>


    <?php 
    for ($i=1; $i <= $nb_pages; $i++) { 
        echo "<a class='nav_pages' href='blog.php?page=".$i."'>".$i."</a>";
    }
    ?>
</body>
</html>
