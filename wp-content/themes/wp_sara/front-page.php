<?php get_header() ?>
<main class="principal">
<h1>Bienvenue!</h1>
        <section class="animation">
                <div></div>
                <!-- div.animation__bloc{$}*5 -->
                <div class="animation__bloc">P</div>
                <div class="animation__bloc">E</div>
                <div class="animation__bloc">E</div>
                <div class="animation__bloc">P</div>
                <div class="animation__bloc">O</div>
        </section>
    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad consequuntur voluptatem aut autem provident est reiciendis illo excepturi alias. Obcaecati doloribus, facilis porro asperiores natus voluptatibus numquam nihil quis iste!</h2>
        <?php if (have_posts()): the_post() ?>
        <?php the_title();  ?>
        <?php the_content(); ?>
        
        <?php endif ?>
</main>
<?php get_footer() ?>