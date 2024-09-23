<?php
/**
 * Plugin Name: Sync Tester
 * Plugin URI: skin-seoul.com
 * Description: A temporary plugin to test the syncing process with WP Pusher plugin.
 * Author: Skin Seoul
 * Author URI: skin-seoul.com/
 * Version: 0.0.2
 * License: GPLv2 or later
 * Text Domain: skin-seoul
 *
 * @package skin-seoul
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Set constants
 */
define( 'SS_CORE_FILE', __FILE__ );
define( 'SS_CORE_BASENAME', plugin_basename( SS_CORE_FILE ) );
define( 'SS_CORE_DIR', plugin_dir_path( SS_CORE_FILE ) );
define( 'SS_CORE_URL', plugins_url( '/', SS_CORE_FILE ) );
define( 'SS_CORE_VER', '0.0.2' );
define( 'SS_CORE_SLUG', 'ss-core' );

