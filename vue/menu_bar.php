<h1 class="titre_blog">Le blog des familles !</h1>
<ul class="barre">
	<li><a href="blog.php">Accueil</a></li>
	<li><a href="#">Minichat</a></li>
	<li><a href="#">Calculette</a></li>
	<li><a href="connexion.php"><?php
        if (isset($_SESSION["connecte"])&&$_SESSION["connecte"]==true) {
            echo "Déconnxion";
        } else {
            echo "Connexion";
        }
    ?></a></li>
</ul>
