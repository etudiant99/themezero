<!doctype html>
<html>
  <head>
    <title><?php echo wp_title() ?></title>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" />
  </head>
<body>
<header class="header">
  <div class="container">
    <h1><?php bloginfo() ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
    <?php wp_nav_menu(array('theme_location' => 'main_menu')) ?>
  </div>
</header>
