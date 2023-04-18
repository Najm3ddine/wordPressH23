<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <div class="container page__introuvable">
        <h1>Erreur 404</h1>
        <p class="rechercher">Page introuvable, vous pouvez tenter une recherche</p>
        <section class="search_form">
            <?= get_search_form(); ?>
        </section>
    </div>
    
</main> 
<?php get_footer(); ?>

