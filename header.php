<html>
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="UTF-8">
  <meta name="Keywords" content="WordPress, Theme, Simple, Learning">
  <meta name="description" content="It's a sample of Simple WordPress Theme">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    ___
    <?php wp_nav_menu( array( 'theme_location' => 'social-menu' ) ); ?>
    <h1>Website title: <?php bloginfo('name'); ?></h1>
  </div>
  <div>
    <?php dynamic_sidebar( 'home_top_widget' ); ?>
