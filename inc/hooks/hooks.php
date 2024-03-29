<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'applab_preloader', 'applab_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'applab_header', 'applab_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'applab_footer', 'applab_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'applab_wrp_start', 'applab_wrp_start_cb', 10 );
	add_action( 'applab_wrp_end', 'applab_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'applab_blog_col_start', 'applab_blog_col_start_cb', 10 );
	add_action( 'applab_blog_col_end', 'applab_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'applab_blog_posts_thumb', 'applab_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'applab_blog_details_wrap_start', 'applab_blog_details_wrap_start_cb', 10 );
	add_action( 'applab_blog_details_wrap_end', 'applab_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'applab_blog_posts_title', 'applab_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'applab_blog_posts_meta', 'applab_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'applab_blog_posts_excerpt', 'applab_blog_posts_excerpt_cb', 10 );
	// add_action( 'applab_blog_posts_excerpt', 'applab_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'applab_blog_posts_info_link', 'applab_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'applab_blog_posts_content', 'applab_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'applab_blog_posts_share', 'applab_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'applab_blog_sidebar', 'applab_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'applab_blog_single_meta', 'applab_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'applab_page_content', 'applab_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'applab_fof', 'applab_fof_cb', 10 );

	

?>