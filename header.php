<?php

/** Header template.
 * 
 * @package Fireflies
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--INCLUDE WP STYLESHEETS AND CSS STYLESHEETS-->
    <?php wp_head(); ?>
    <title>WordPress Theme</title>
</head>

<body>

    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav') ?>

        </header>
        <div id="content" class="site-content">

        </div>
    </div>