<?php get_header() ?>
<main class="site__main">
<h1></h1>
<section class="animation">
    <div class="animation__bloc">B</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">E</div>
    <div class="animation__bloc">N</div>
    <div class="animation__bloc">V</div>
    <div class="animation__bloc">E</div>
    <div class="animation__bloc">N</div>
    <div class="animation__bloc">U</div>
    <div class="animation__bloc">E</div>
    
</section>

    <h1>Accueil</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>