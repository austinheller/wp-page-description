<?
/*
	Plugin Name: Page Description
	Description: Tired of "Visit the post for more" on your snappy, immaculate pages? This plugin does exactly one thing: add excerpt support to pages, and a few description meta tags (HTML, Open Graph, Twitter Cards) that read it. It won't make your content better — but it will make it more fun to link to.
	Author:      Austin Heller
	Author URI:  http://aheller.me
*/

add_post_type_support( 'page', 'excerpt' );

function pagedescript_render_page_og_description_meta() { ?>
	<? if( is_page() ): ?>
		<meta property="og:description" content="<? echo get_the_excerpt(); ?>">
		<meta property="twitter:description" content="<? echo get_the_excerpt(); ?>">
		<meta name="description" content="<? echo get_the_excerpt(); ?>">
	<? endif; ?>
<?php }

add_filter('wp_head', 'pagedescript_render_page_og_description_meta', 2);

?>
