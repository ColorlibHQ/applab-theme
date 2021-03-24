<?php 
/**
 * @Packge     : Applab
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'applab_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'applab' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'applab_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'applab_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'applab_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'applab_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'applab_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'applab_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'applab_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'applab_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'applab' ),
            'panel'    => 'applab_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>