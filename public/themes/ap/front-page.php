<?php get_header(); ?>

<main class="front-page">
    <div class="center">
        <?php wp_nav_menu([
            'theme_location' => 'main',
            'container' => '',
            'menu_class' => 'hexagon'
        ]); ?>
    </div>
</main>

<?php get_footer(); ?>
