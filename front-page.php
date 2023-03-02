<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() 
?>
<main>
    <section class="blocflex">
        <?php 
            if (have_posts()):
            while (have_posts()) : the_post();
                if (in_category("galerie")) {
                    get_template_part("template-parts/categorie", "galerie");
                }
                else {
                    get_template_part("template-parts/categorie", "note-wp");
                }
            endif;
            endwhile; 
        endif;

        ?>
    </section>
</main> 
<?php get_footer(); ?>;