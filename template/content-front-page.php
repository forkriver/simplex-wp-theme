<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if( has_post_thumbnail() ) {
			the_post_thumbnail( 'large' );
		}
		the_title( '<h1>', '</h1>' . PHP_EOL );
		the_content();
	}
}