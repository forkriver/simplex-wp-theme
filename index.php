<?php

get_header();
get_template_part( 'template/content', get_post_type() );

get_sidebar();
get_footer();
