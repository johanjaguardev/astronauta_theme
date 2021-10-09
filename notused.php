<!-- get description of the site -->
<?php
$astronauta_description = get_bloginfo( 'description', 'display' );
if ( $astronauta_description || is_customize_preview() ) :
  ?>
  <p class="site-description"><?php echo $astronauta_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php endif; ?>

<?php the_custom_logo();
if ( is_front_page() && is_home() ) :?>
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php else :?>
<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<?php endif;?>

<div class="hero">

<?php
if ( have_posts() ) :

	if ( is_home() && ! is_front_page() ) :
		?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
		<?php
	endif;

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
</div>

<!-- 
the content -->

<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content', 'page' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->