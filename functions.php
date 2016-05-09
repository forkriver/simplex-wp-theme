<?php

add_action( 'after_setup_theme', function() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pjs-header-image', 2048, 400, true );
} );

add_action( 'init', function() {
	register_nav_menu( 'header-nav', __( 'Header Nav', 'pj-simplex' ) );	
} );

add_filter( 'post_thumbnail_html', function( $html, $id, $thumb_id, $size, $attr ) {
	$needle = array(
		'/ height=[\'"]\d+[\'"]/',
		'/ width=[\'"]\d+[\'"]/',
	);
	$html = preg_replace( $needle, '', $html );
	return $html;
}, 10, 5 );
