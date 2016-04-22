<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_title( '<h1>', '</h1>' . PHP_EOL );
		the_date();
		the_content();
	}
}