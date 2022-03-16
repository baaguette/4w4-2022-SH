<?php get_header() ?>
<main class="site__main">
<h1>Bienvenue!</h1>
<section class="animation">
    <div class="animation__bloc">b</div>
    <div class="animation__bloc">o</div>
    <div class="animation__bloc">r</div>
    <div class="animation__bloc">p</div>
    <div class="animation__bloc">a</div>
</section>

    <h1>Intégration multimedia!</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>