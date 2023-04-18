<?php
/**
Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>

<main class="site__main">
<div class="container page__introuvable">
    <h1>Erreur 404</h1>
    <p class="rechercher">Page introuvable, vous pouvez tenter une recherche</p>
    <div class="search-container">
        <form action="/search">
            <input type="text" placeholder="Recherche..." name="search">
            <button type="submit"></button>
        </form>
    </div>
</div>
</main> 

<?php get_footer(); ?>

