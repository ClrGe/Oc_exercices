<!-- Permet de se connecter à la bdd -->

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=exercicePHP;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>