<!-- Permet de se connecter à la bdd -->

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=exercicePHP;charset=utf8', 'clerge', 'Lokda576,gouarne5');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>