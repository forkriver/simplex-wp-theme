<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if( has_post_thumbnail() ) {
			echo( '<div class="simplex-featured-image">' . PHP_EOL );
			the_post_thumbnail();
			echo( '</div> <!-- .simplex-featured-image -->' . PHP_EOL );
		}
		the_title( '<h1>', '</h1>' . PHP_EOL );
		the_content();
	}
}