<!DOCTYPE html>
<html <?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css/destyle.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header id="top">
        <div class="inner">
            <div class="logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/logo.png')); ?>" alt="">
            </div>
            <h1>My Blog</h1>
            <div class="menu">
                <img src="<?php echo esc_url(get_theme_file_uri('/menu.png')); ?>" alt="">
            </div>
        </div>
    </header>

    <!-- メニュー画面-->
    <div class="inner">

        <div class="menu_open">
            <div class="menu_close"></div>

            <nav>
                <a href="#header">Top</a>
                <a href="#Blog">Blog</a>
                <a href="#Profile">Profile</a>
            </nav>
        </div>
    </div>

    <script>
        const menu = document.querySelector('.menu');
        const menuOpen = document.querySelector('.menu_open');
        const menuClose = document.querySelector('.menu_close');

        menu.addEventListener('click', function() {
            menuOpen.style.display = 'block';
        });

        menuClose.addEventListener('click', function() {
            menuOpen.style.display = 'none';
        });
    </script>