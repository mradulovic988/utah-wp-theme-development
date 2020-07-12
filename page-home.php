<?php
/*
Template Name: Home Page
*/
get_header(); 
get_template_part( 'template-parts/content', 'slider' );
get_template_part( 'template-parts/content', 'infobox' );
get_template_part( 'template-parts/content', 'interface' );
get_template_part( 'template-parts/content', 'video' );
get_template_part( 'template-parts/content', 'clients' );
get_template_part( 'template-parts/content', 'box' );
get_template_part( 'template-parts/content', 'counters' );
get_template_part( 'template-parts/content', 'pricing' );
get_template_part( 'template-parts/content', 'subscribe' );
get_footer();
?>