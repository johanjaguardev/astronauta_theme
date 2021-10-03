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