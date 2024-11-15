<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
        wp_body_open();

        $class = '';

        if (!is_front_page()) {
            $class = 'header-black';
        }
    ?>

    <div class="wrapper">
        <header id="header" class="<?php echo (!empty($class)) ? $class : ''; ?>">
            <div class="center">
                <a href="/" class="logo">
                    <svg><use xlink:href="#logo"></use></svg>
                </a>

                <nav class="nav">
                    <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
                </nav>

                <button class="btn-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
