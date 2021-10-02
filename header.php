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
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'astronauta' ); ?></a>

	<header id="masthead" class="site-header header">
		<div class="header__top">
			<div class="header__search">

			</div>
			<div class="header__social">
				<div class="header__icon header__twitter"></div>
				<div class="header__icon header__linkedin"></div>
				<div class="header__icon header__instagram"></div>
				<div class="header__icon header__facebook"></div>
				<div class="header__icon header__whatsapp"></div>
				<div class="header__phone">322 8094324</div>
			</div>
		</div>
		<div class="header__body">
			<div class="header__logo">
				<?php the_custom_logo();
				if ( is_front_page() && is_home() ) :?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else :?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;?>
			</div>
			<div class="header__nav">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'astronauta' ); ?></button>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);?>
				</nav>
			</div>
		</div>
	</header>
