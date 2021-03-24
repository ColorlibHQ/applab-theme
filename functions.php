<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'APPLAB_DIR_URI' ) ) {
	define( 'APPLAB_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'APPLAB_DIR_ASSETS_URI' ) ) {
	define( 'APPLAB_DIR_ASSETS_URI', APPLAB_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'APPLAB_DIR_CSS_URI' ) ) {
	define( 'APPLAB_DIR_CSS_URI', APPLAB_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'APPLAB_DIR_JS_URI' ) ) {
	define( 'APPLAB_DIR_JS_URI', APPLAB_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'APPLAB_DIR_IMGS_URI' ) ) {
	define( 'APPLAB_DIR_IMGS_URI', APPLAB_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'APPLAB_DIR_ICON_IMG_URI' ) ) {
	define( 'APPLAB_DIR_ICON_IMG_URI', APPLAB_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'APPLAB_DIR_PATH' ) ) {
	define( 'APPLAB_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'APPLAB_DIR_PATH_INC' ) ) {
	define( 'APPLAB_DIR_PATH_INC', APPLAB_DIR_PATH . 'inc/' );
}

//Applab Libraries Folder Directory
if ( ! defined( 'APPLAB_DIR_PATH_LIBS' ) ) {
	define( 'APPLAB_DIR_PATH_LIBS', APPLAB_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'APPLAB_DIR_PATH_CLASSES' ) ) {
	define( 'APPLAB_DIR_PATH_CLASSES', APPLAB_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'APPLAB_DIR_PATH_HOOKS' ) ) {
	define( 'APPLAB_DIR_PATH_HOOKS', APPLAB_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function applab_admin_script(){
    wp_enqueue_style( 'applab-admin', get_template_directory_uri().'/assets/css/applab-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'applab_admin', get_template_directory_uri().'/assets/js/applab-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'applab_admin_script' );



/**
 * Include File
 *
 */
require_once( APPLAB_DIR_PATH_INC . 'applab-breadcrumbs.php' );
require_once( APPLAB_DIR_PATH_INC . 'applab-widgets-reg.php' );
require_once( APPLAB_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( APPLAB_DIR_PATH_INC . 'post-like.php' );
require_once( APPLAB_DIR_PATH_INC . 'applab-functions.php' );
require_once( APPLAB_DIR_PATH_INC . 'applab-commoncss.php' );
require_once( APPLAB_DIR_PATH_INC . 'support-functions.php' );
require_once( APPLAB_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( APPLAB_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( APPLAB_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( APPLAB_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( APPLAB_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( APPLAB_DIR_PATH_HOOKS . 'hooks.php' );
require_once( APPLAB_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( APPLAB_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( APPLAB_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Applab object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Applab = new Applab();