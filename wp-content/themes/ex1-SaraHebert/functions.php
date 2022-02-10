<?php

    function cidw_4w4_enqueue(){

        wp_enqueue_style('main-styles', 

        get_template_directory_uri() . '/style.css',

        array(),

        filemtime(get_template_directory() . '/style.css'),

        false);

    }

    add_action( 'wp_enqueue_scripts', 'cidw_4w4_enqueue' );

    function cidw_4w4_enregistre_menu() {

      register_nav_menu( 'principal', __( 'Menu principal', 'cidw_4w4' ) );

    }

    add_action("after_setup_theme", "cidw_4w4_enregistre_menu");

    function cidw_4w4_filtre_menu_item($monObjet){

        foreach ($monObjet as $key => $value)
        {
            //4 - nb de mots
            $value->title = wp_trim_words($value->title,4);
        }
        return($monObjet);
    }
    

    add_filter( "wp_nav_menu_objects", "cidw_4w4_filtre_menu_item" );
?>