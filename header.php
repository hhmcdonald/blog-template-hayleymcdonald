<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class="row navBar">
        <div class="twelve columns">
            <?php wp_nav_menu( array(
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
                ));?>
        </div>
    </div>
    <header class="row banner">
        <div class="twelve columns logo">
            <img src="/img/roundlogo.png" alt="logo" />
        </div>
    </header>
    <div class="container">  <!-- BEGIN CONTAINER DIV -->
