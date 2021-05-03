<!-- Permet de se connecter à la bdd et d'afficher l'article -->


<?php 
    include("getArticle.php");
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles WHERE id = ?');
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch(); 
?>

<div class="articles">
    <h3><?php echo htmlspecialchars($donnees['titre']); ?><br /></h3>
    <p class="date"><?php echo $donnees['date_creation_fr']; ?></p>
    <p><?php echo nl2br(htmlspecialchars($donnees['contenu']));?></p>
</div>