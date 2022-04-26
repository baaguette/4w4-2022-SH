<?php get_header() ?>
<main class="principal">
    <h1>Cours d'intégration multimédia</h1>
    <section class="formation">

    <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>

<?php $url_categorie_slug = trouve_la_categorie(array('cours','web','jeu','design', 'utilitaire', 'creation-3d', 'video')); ?>

<section class="radiobutton">

  <input type="radio" checked="checked" name="radio">582 – TIM - Technique d’intégration multimédia
  <span class="checkmark"></span>
  <input type="radio" name="radio">393 – TDD - Techniques de la documentation
  <span class="checkmark" ></span>
  <input type="radio" name="radio">350 -  PSY – Psychologie
  <span class="checkmark"></span>

</section>
<?php 
 $ordre = get_query_var('ordre', 'asc');
?>


        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="assdess">
        <a class="up" href="?cletri=title&ordre=asc">↥</a><br>
        <a class="down" href="?cletri=title&ordre=desc">↧</a><br>
        </div>
        <?php 
        

        if (is_category('web')){ 
            
            $ma_categorie = get_category_by_slug('web');
            echo "<h3>" . $ma_categorie->description . "</h3>";
        }
        
        
        if (is_category('jeu')){ echo "<h3>Cours Jeu</h3>";}
        if (is_category('design')){ echo "<h3>Cours design</h3>";}
        if (is_category('utilitaire')){ echo "<h3>Cours utilitaire</h3>";}
        if (is_category('creation-3d')){ echo "<h3>Cours création 3D</h3>";}
        if (is_category('video')){ echo "<h3>Cours vidéo</h3>";}
        
        // retourne un string qui représente le slug de la catégorie
        
        $ma_categorie = get_category_by_slug($url_categorie_slug);
       // $ma_categorie = get_category()

        echo "<h3>" . $ma_categorie->description . "</h3>"; 



        ?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                <?php get_template_part( "gabarits/content", "cours"); ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>