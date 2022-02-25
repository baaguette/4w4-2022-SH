<footer class="site__footer">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <?php
            $icone = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>';

            wp_nav_menu(array("menu" => "simple",
            "container" => "nav",
            "menu_class"=>"footer__menu",
            "container_class" => "site__footer__nav",
            "link-before" => "$icone"));
        ?>
    </section>
</footer>
<?php
    wp_footer();
?>
</body>
</html>