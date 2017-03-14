<?php

function theme_enqueue_styles()
{
	 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



function dwwp_alter_books_icon( $args){
	$args['menu_icon'] = 'dashicons-book-alt';
	return $args;
}

add_filter('dwwp_post_type_args', 'dwwp_alter_books_icon');

function dwwp_change_label($plural){
	$plural = 'Booookz';
	return $plural;
}

add_filter('dwwp_label_plural', 'dwwp_change_label');

?>