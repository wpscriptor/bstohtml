<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bstohtml
 */

?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

  <head>

      <meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="profile" href="http://gmpg.org/xfn/11">

  	<?php wp_head(); ?>


  </head>

  <body id="page-top">

    <!-- Navigation -->
   <nav id="mainNav" class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" role="navigation">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
      </button>-


     <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- <?php
          wp_nav_menu( array(
              'menu_id'				=> 'menu',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarResponsive ',
              'menu_class'        => 'navbar-nav ml-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
          );
          ?>
          <?php
      wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => false,
        'menu_class'      => 'navbar-nav ml-auto',
        'items_wrap'      => '<ul id="%1$s" class="navbar-nav m1-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'           => 2,
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()
      ) );
    ?>-->

         <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
        </ul>
      </div>
  </div>
</nav>-
