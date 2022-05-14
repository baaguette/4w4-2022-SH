<?php
get_header();
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <section class="evenement">
     <h2>Template Evenement</h2>
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <h1> <?php the_title() ?></h1>
     <p class='evenement__resume'><?php the_field('resume'); ?></p>
     <p class='evenement__endroit'><?php the_field('endroit'); ?></p> 
     <p><?php the_field('organisateur'); ?></p>
     <p><?php the_field('date'); ?></p>
     <p><?php the_field('heure'); ?></p>
     <?php 
     $image = get_field('image');
     if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php endif; ?>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>



