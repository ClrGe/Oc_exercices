<?php
    $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
    $req->execute(array($_GET['billet']));

        while ($donnees = $req->fetch()){ ?>
            <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
            <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
<?php } 
    $req->closeCursor();
?>