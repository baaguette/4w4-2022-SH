<?php
/**
* Template Name: Annonce
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">

    <h1>Template annonce</h1>
   <?php if (have_posts()): the_post(); ?>
   <h1> <?php the_title() ?></h1>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>