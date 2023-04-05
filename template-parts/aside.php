<aside class="site__aside">
    <?php 
    $lemenu = "note-wp";
    if (in_category('cours')) 
    {$lemenu = "cours";}
    wp_nav_menu(array(
        "menu" => $lemenu,
        "container" => "nav"
    )); ?>
</aside>