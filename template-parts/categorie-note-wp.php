<?php
/**
 * template-part qui permettera d'afficher un article provenant d'un contener bloc flex
 * pour un article de categorie cours
 */
$titre = get_the_title();
/* if (substr($titre, 0, 1) == "0") {
    
} */

?>

<article>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>