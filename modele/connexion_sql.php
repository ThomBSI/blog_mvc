<?php

// Connexion ?la base de donn?s
try
{
    $bdd = new PDO('pgsql:host=localhost;dbname=blog_mvc', 'test', 'test');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
