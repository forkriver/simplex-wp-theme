<?php 

if ( have_posts() ) {
	echo( '<div class="page-content">' . PHP_EOL );
	while ( have_posts() ) {
		the_post();
		the_date( get_option( 'date_format' ), '<div class="simplex-date">', '</div> <!-- .simplex-date -->' . PHP_EOL );
		the_title( '<h1>', '</h1>' . PHP_EOL );
		the_excerpt();
		echo( '<p class="more-link"><a href="' . get_permalink() . '">Read <em>' . get_the_title() . '</em>&raquo;</a></p>' . PHP_EOL );
	}
	echo( '</div> <!-- .page-content -->' . PHP_EOL );
		
}