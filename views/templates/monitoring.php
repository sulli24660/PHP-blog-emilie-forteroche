<?php 
    //
    //Page de monitoring : affiche des statistiques sur le site.//
    //
?>

<h2>Monitoring</h2>

<div class="monitoring">
    <p>Nombre d'articles : <?= $nbArticles ?></p>
    <p>Nombre d'utilisateurs : <?= $nbUsers ?></p>
    <p>Nombre de commentaires: <?= $nbComment ?></p>
<?php if ($mostViewedArticle) { ?>
    <p>Article le plus visionné : <?= $mostViewedArticle->getTitle() ?> (<?= $mostViewedArticle->getViews() ?> vues)</p>
<?php } else { ?>
    <p>Aucun article pour le moment.</p>
<?php } ?>
    
</div>