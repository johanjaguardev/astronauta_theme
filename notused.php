<!-- get description of the site -->
<?php
$astronauta_description = get_bloginfo( 'description', 'display' );
if ( $astronauta_description || is_customize_preview() ) :
  ?>
  <p class="site-description"><?php echo $astronauta_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
<?php endif; ?>