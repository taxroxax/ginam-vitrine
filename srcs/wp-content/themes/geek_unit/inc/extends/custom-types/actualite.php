<?php
/**
 * register post type actualite
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

add_action('init', 'geek_unit_init_actus', 1);
function geek_unit_init_actus(){
  //post type
  $labels = get_custom_post_type_labels( 'actualité', 'actualités', 1 );
  $data = array(
    'capabilities'         => wp_get_custom_posts_capabilities('post'),
		'supports'             => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'         => false,
		'exclude_from_search'  => false,
		'public'               => true,
		'show_ui'              => true,
		'show_in_nav_menus'    => true,
		'menu_icon'            => get_template_directory_uri() . '/images/grey-icon/list_w__images.png',
		'menu_position'        => 6,
		'labels'               => $labels,
		'query_var'            => true,
	);
	register_post_type( POST_TYPE_ACTUALITE, $data);
	
}