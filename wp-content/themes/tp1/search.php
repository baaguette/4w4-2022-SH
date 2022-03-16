<?php get_header() ?>
<main class="site__main">
    <h1>Recherche...</h1>
    <?php if(have_posts()):  ?>
    <?php while(have_posts()): the_post(); ?>    
        <h3>
            Trouvé! <br>
            <?php echo get_permalink() ?>
        <?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(), 20, "...>"); ?></p>
        <hr>
    <?php endwhile ?>
    <?php else : ?>
        <p>Aucun résultat</p>
        <?php get_search_form(); ?> 
    <?php endif ?>    
</main>
<?php get_footer(); ?>