<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Applab
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$applab_reservation_title     = !empty( applab_opt( 'applab_reservation_title' ) ) ? applab_opt( 'applab_reservation_title' ) : '';
	$applab_reservation_sub_title = !empty( applab_opt( 'applab_reservation_sub_title' ) ) ? applab_opt( 'applab_reservation_sub_title' ) : '';
	$applab_reservation_btn_text  = !empty( applab_opt( 'applab_reservation_btn_text' ) ) ? applab_opt( 'applab_reservation_btn_text' ) : '';
	$applab_reservation_btn_url	  = !empty( applab_opt( 'applab_reservation_btn_url' ) ) ? applab_opt( 'applab_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $applab_reservation_title )?></h3>
			<p><?php echo esc_html( $applab_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $applab_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $applab_reservation_btn_text )?></a>
		</div>
	</div>