<?php

add_action( 'init', function() {
	add_theme_support( 'post-thumbnails' );
} );

add_filter( 'post_thumbnail_html', function( $html, $id, $thumb_id, $size, $attr ) {
	$needle = array(
		'/ height=[\'"]\d+[\'"]/',
		'/ width=[\'"]\d+[\'"]/',
	);
	$html = preg_replace( $needle, '', $html );
	return $html;
} );