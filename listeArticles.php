<!-- Permet d'afficher la liste des articles sur la page d'accueil de notre blog -->

<?php
    $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 5');
        while ($donnees = $req->fetch()) {
?>
            <div class="articles">
                <h3><?php echo htmlspecialchars($donnees['titre']); ?></h3>
                <p class="date"><?php echo $donnees['date_creation_fr']; ?></p><br />
                <br /><?php echo nl2br(htmlspecialchars($donnees['contenu']));?><br />
                <br /><p class="voirCommentaires"><em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">VOIR LES COMMENTAIRES</a></em></p>
            </div>


<?php
} 
$req->closeCursor();
?>