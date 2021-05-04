<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8' />
        <title>Blog Test</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>LE BLOG QUI VA RÉVOLUTIONNER LE MONDE</h1>
        
        <?php 
            include("getArticle.php");
            include("listeArticles.php");
           
            $vues = $bdd->query('SELECT * FROM vues');

            while ($donnees = $vues->fetch()){
        ?>
    <p> Ce super blog a été visité <?php echo $donnees['vues']; ?> fois !<br /></p>
        
        <?php
        }
            $vues->closeCursor(); 
        ?>
    </body>
</html>
