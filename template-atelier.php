<?php
get_header();
/**
* Template Name: atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <section class="atelier">
     <h2>Template atelier</h2>
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <h1> <?php the_title() ?></h1>
     <p class='atelier__desc'><?php the_field('atelier__desc'); ?>hai</p>
     <p class='atelier__anim'><?php the_field('atelier__anim'); ?></p> 
     <p class='atelier__ddd'><?php the_field('atelier__ddd'); ?></p>
     <p class='atelier__ddf'><?php the_field('atelier__ddf'); ?></p> 
     <p class='atelier__semaine'><?php the_field('atelier__semaine'); ?></p>
     <p class='atelier__hs'><?php the_field('atelier__hs'); ?></p> 
     <p class='atelier__hf'><?php the_field('atelier__hf'); ?></p> 
     <p class='atelier__duree'><?php the_field('atelier__duree'); ?></p>
     <p class='atelier__local'><?php the_field('atelier__local'); ?></p> 
     <?php 
     $image = get_field('image');
     if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php endif; ?>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>



