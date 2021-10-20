<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astronauta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scss/glide.core.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'astronauta' ); ?></a>
	<header id="masthead" class="site-header header">
		<div class="header__top">
      <div class="container">
        <div class="header__search">
          <?php get_sidebar(); ?>
          <div class="header__search-icon">
            <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="1-Home" transform="translate(-444.000000, -22.000000)" fill="#087878">
                      <g id="Group-1321" transform="translate(444.488202, 21.396100)">
                        <path d="M6.0766976,10.8833 C3.9106976,10.8833 2.1556976,9.1293 2.1536976,6.9643 C2.1536976,4.7983 3.9076976,3.0423 6.0736976,3.04129957 C8.2366976,3.0403 9.9916976,4.7923 9.99570442,6.9553 C9.9996976,9.1213 8.2456976,10.8793 6.0796976,10.8833 L6.0766976,10.8833 Z M11.0426976,10.4673 C12.9836976,7.7273 12.3346976,3.9323 9.5936976,1.9923 C6.8526976,0.0513 3.0576976,0.7003 1.1186976,3.4413 C-0.822302403,6.1823 -0.173302403,9.9763 2.5676976,11.9173 C4.5236976,13.3013 7.1096976,13.4083 9.1726976,12.1903 L13.6556976,16.6463 C14.1396976,17.1553 14.9446976,17.1753 15.4546976,16.6923 C15.9636976,16.2083 15.9846976,15.4033 15.5006976,14.8933 C15.4856976,14.8773 15.4706976,14.8623 15.4546976,14.8463 L11.0426976,10.4673 Z" id="Fill-1309"></path>
                      </g>
                  </g>
              </g>
            </svg>
          </div>
        </div>
        <?php echo do_shortcode ("[socialNetworks]");?>
      </div>
		</div>
		<div class="header__body">
      <div class="container">
        <div class="header__logo">
          <?php the_custom_logo();?> 
        </div>
        <div class="header__nav">
          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'astronauta' ); ?></button>
            <?php wp_nav_menu(
              array(
                'theme_location' => 'menu-header',
                'menu_id'        => 'primary-menu',
              )
            );?>
          </nav>
        </div>
      </div>

		</div>
	</header>
