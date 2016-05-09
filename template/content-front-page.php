<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if( has_post_thumbnail() ) {
			echo( '<div class="simplex-featured-image">' );
			the_post_thumbnail( 'pjs-header-image' );
			echo( '</div> <!-- .simplex-featured-image -->' . PHP_EOL );
		}
		the_title( '<header><h1>', '</h1></header>' . PHP_EOL );
		echo( '<div class="page-content">' . PHP_EOL );
		the_content();
		echo( '</div> <!-- .page-content -->' . PHP_EOL );
	}
}