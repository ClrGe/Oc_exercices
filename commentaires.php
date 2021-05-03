<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Test</title>
	    <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>LE BLOG QUI VA RÉVOLUTIONNER LE MONDE</h1> 
        <p class="accueil"><a href="index.php">ACCUEIL</a></p>
        
        <?php include("afficherArticle.php"); ?> 
        
        <h2>Commentaires</h2>
        <form action="commentaires.php?billet=<?php echo $donnees['id']; ?>"method="post"> <!-- Formulaire pour poster un commentaire -->

            <p>
                <label for="auteur">Nom</label> : <input type="text" name="auteur" id="auteur" /><br />
                <label for="commentaire">Message</label> :  <textarea type="text" name="commentaire" id="commentaire" /></textarea><br />
                <input type="submit" value="Envoyer" />
	        </p>
            </form>
            
            <p><strong><?php echo htmlspecialchars($_POST['auteur']) ?></strong> le <?php echo date("d/m/Y") ?> à <?php echo date("H:i:s"); ?></p>
            <p><?php echo nl2br(htmlspecialchars($_POST['commentaire'])); ?></p>
          
          
           <?php include("getArticle.php");
           
             $req = $bdd->prepare('INSERT INTO commentaires(id, id_billet, auteur, commentaire, date_commentaire) VALUES(:id, :id_billet, :auteur, :commentaire, :date_commentaire)');
           $req->execute(array(
               'id' => $_POST[''],
               'id_billet' => $_POST[''],
               'auteur' => $_POST['auteur'],
               'commentaire' => $_POST['commentaire'],
               'date_commentaire' => $NOW()
               ));
                      ?>
       
     
    </body>
</html>
