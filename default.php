<?php
/**
 * ============================================================================
 * ...
 * ============================================================================
 *
 * @package     WordPress
 * @subpackage  Plugin: ...
 * @author      Neil Sweeney <neil@wolfiezero.com>
 * @license     GPL-2.0+
 *
 * ----------------------------------------------------------------------------
 *
 * @wordpress-plugin
 * Plugin Name:  ...
 * Description:  ...
 * Version:      1.0.0
 * Author:       Neil Sweeney <neil@wolfiezero.com>
 * Author URI:   http://wolfiezero.com/
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:  wolfiezero/...
 * GitHub Branch:      master
 */


// ----------------------------------------------------------------------------
// Accessed Directly
// ----------------------------------------------------------------------------

if( !defined( 'WPINC' ) ) die;


// ----------------------------------------------------------------------------
// Requires
// ----------------------------------------------------------------------------

// require plugin_dir_path( __FILE__ ) . 'class-....php';


// ----------------------------------------------------------------------------
// Hooks
// ----------------------------------------------------------------------------

// register_activation_hook( __FILE__, array( 'TwitterAPI', 'activate' ) );
// register_deactivation_hook( __FILE__, array( 'TwitterAPI', 'deactivate' ) );

// Actions
// add_action( '...', array( '...', '...'' ) );

// Filters
// add_filter( '...', array( '...', '...'' ) );


// ----------------------------------------------------------------------------
// Admin Stuff
// ----------------------------------------------------------------------------

if( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {

}
