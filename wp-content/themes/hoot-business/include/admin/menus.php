<?php
/**
 * Register custom theme menus
 * This file is loaded via the 'after_setup_theme' hook at priority '10'
 *
 * @package    Hoot Business
 * @subpackage Theme
 */

/**
 * Registers nav menu locations.
 *
 * @since 1.0
 * @access public
 * @return void
 */
add_action( 'init', 'hootbiz_base_register_menus', 5 );
function hootbiz_base_register_menus() {
	register_nav_menu( 'hoot-primary-menu', _x( 'Header Area (right of logo)', 'nav menu location', 'hoot-business' ) );
	register_nav_menu( 'hoot-secondary-menu', _x( 'Full width Menu Area (below logo)', 'nav menu location', 'hoot-business' ) );
}