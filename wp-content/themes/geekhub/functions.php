<?php
	add_theme_support( 'menus' ); // add menus to dashboard
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-fields' );
	
	add_action( 'init', 'create_post_type' );

	function create_post_type() {
	register_post_type( 'Team',
		array(
			'labels' => array(
				'name' => __( 'Our team' ),
				'singular_name' => __( 'Team' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'thumbnail', 'revisions', 'custom-fields' )
		)
	);
}

	register_sidebar (array(
		'name' => 'Виджеты',
		'id' => 'sidebar',
		'description' => 'поле',
	));
	

