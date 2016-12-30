<!DOCTYPE html>
<html>
    <head>
        <title>Commentaires</title>
        <meta charset="utf-8">
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" type="text/css" href="vue/style_menu_bar.css"/>
    </head>
        
    <body>
        <?php include_once("vue/menu_bar.php"); ?>
        <!--affichage de l'article-->
        <div class="news">
            <h3>
                <?php 
                echo $oneBillet[0]['titre']." ".$oneBillet[0]["date_creation_fr"]; 
                ?>
            </h3> 
            <p>
                <?php echo $oneBillet[0]['contenu']; ?>
            </p>
            <?php echo "<a href='edit_billet.php?edit=true&amp;billet=".$_GET["billet"]."'>"; ?>
            Modifier l'article</a>

            <form method="POST" action="commentaires.php?edit=true&amp;billet=<?php echo $_GET["billet"] ?>">
                <input type="submit" name="bt_delete_billet" value="supprimer l'article">
            </form>

        </div>

        <a href="blog.php">Retour</a>

        <!--affichage des commentaires-->
        <div class="comments">
            <?php 
            foreach ($commentaires as $commentaire) {
                echo "<div class='comment'>".$commentaire["pseudo"]." [".$commentaire["date_comm"]."]<br/>".$commentaire["message"]."</div>";
            }
            ?>  
        </div>

        <!--nouveau commentaire -->
        <form method="POST" action="commentaires.php?billet=<?php echo $_GET["billet"]; ?>">
            <label for="pseudo" id="lab_pseudo">Entrez votre pseudo :</label>
            <input id="pseudo" type="text" name="pseudo"><br/>
            <textarea id="message" name="message">Ecrivez un commentaire</textarea><br/>
            <input type="submit" name="bt_sub_com" value="Ok">
        </form>
    </body>
</html>