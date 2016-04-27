<?php 

if ( have_posts() ) {
	echo( '<div class="page-content">' . PHP_EOL );
	while ( have_posts() ) {
		the_post();
		the_date( get_option( 'date_format' ), '<div class="simplex-date">', '</div> <!-- .simplex-date -->' . PHP_EOL );
		the_title( '<h1>', '</h1>' . PHP_EOL );
		the_content();
	}
	echo( '</div> <!-- .page-content -->' . PHP_EOL );
}