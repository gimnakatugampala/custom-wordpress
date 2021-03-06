
<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name');?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head();?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
         <?php 
         
         wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
         
         
         ?>
        </nav>
      </div>
    </div>

    
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name');?></h1>
        <p class="lead blog-description"><?php bloginfo('description');?></p>
      </div>
