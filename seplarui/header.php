<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('utf-8');?>">
        <title><?php bloginfo('SEPLARUI');?></title>
        <link rel="stylesheet" href="<?php bloginfo('style.css') ?>">
        <?php wp_head();?>
    </head>
    
    <body>
        <header>
            <h1><?php bloginfo('PLANTILLA SEPLARUI'); ?></h1>
        </header>
           
         <nav>
      <ul class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
      </ul>
    </nav>