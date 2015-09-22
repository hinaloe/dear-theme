<?php


/**
 * @package Dear
 */
add_filter( 'lightning_footerPoweredCustom', 'dear_powered', 11 );


function dear_powered() {
	if ( function_exists( 'vkExUnit_get_directory' ) ) {
		return __( 'Powered by <a href="https://wordpress.org/">WordPress</a> with <a href="https://dear.hinaloe.net/" target="_blank" title="Free WordPress Theme Dear">Dear Theme</a> &amp; <a href="http://ex-unit.bizvektor.com/" target="_blank">VK All in One Expansion Unit</a> by <a href="http://www.vektor-inc.co.jp" target="_blank">Vektor,Inc.</a> technology.' ,'dear' );
	}
	return __( 'Powered by <a href="https://wordpress.org/">WordPress</a> &amp; <a href="https://dear.hinaloe.net/" target="_blank" title="Free WordPress Theme Dear">Dear Theme</a>.', 'dear' );
}

