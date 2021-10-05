<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astronauta
 */

get_header();
?>

	<div class="hero hero-home">
		<div class="container">

		</div>

	</div>
	<div class="noticias">
		<div class="container"></div>
	</div>
	<div class="descripcion">
		<div class="container"></div>
	</div>
	<div class="vision">
		<div class="container"></div>
	</div>
	<div class="servicios">
		<div class="container"></div>
	</div>		
	<div class="faq">
		<div class="container"></div>
	</div>
	
<?php
// get_sidebar();
get_footer();
