<?php
/**
 * Custom Site Title Override
 *
 * Changes the site title displayed in the header.
 */

add_filter( 'option_blogname', function( $value ) {
	return 'My Awesome Site';
} );
