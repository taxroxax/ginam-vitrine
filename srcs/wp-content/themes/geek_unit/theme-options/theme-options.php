<?php
/**
 * Theme options
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */
global $geek_unit_options;
require_once get_template_directory() . '/theme-options/options.php';
$geek_unit_options = get_option( 'geek_unit_theme_options' );

add_action( 'admin_init', 'geek_unit_options_init' );
function geek_unit_options_init(){
 register_setting( 'geek_unit_options', 'geek_unit_theme_options','geek_unit_options_validate');
} 

function geek_unit_options_validate($input)
{
   $allfields_settings = geek_unit_get_all_settings();

   foreach ( $input as $i ){
     if ( isset($allfields_settings[$i]) ){
        switch ( $allfields_settings[$i]['type'] ){
          case 'text':
            $input[$i] = sanitize_text_field( $input[$i] );
            break;
          case 'select':
            break;
          case 'date':
            break;
          case 'url':
            $input[$i] = esc_url_raw( $input[$i] );
            break;
          case 'textarea':
            $input[$i] = sanitize_text_field( $input[$i] );
            break;
          case 'image':
            $input[$i] = geek_unit_image_validation(esc_url_raw( $input[$i]));
            break;
          default:
        }
     }
   }

	  return $input;
}
function geek_unit_image_validation($geek_unit_imge_url){
	$geek_unit_filetype = wp_check_filetype($geek_unit_imge_url);
	$geek_unit_supported_image = array('gif','jpg','jpeg','png','ico');
	if (in_array($geek_unit_filetype['ext'], $geek_unit_supported_image)) {
		return $geek_unit_imge_url;
	} else {
	return '';
	}
}
function geek_unit_get_all_settings(){
  global $geek_unit_options_settings;
  $allfields = array();
  foreach ( $geek_unit_options_settings as $tab) {
      $allfields = array_merge( $allfields, $tab );
  }
  return $allfields;
}

add_action( 'admin_enqueue_scripts', 'geek_unit_framework_load_scripts' );
function geek_unit_framework_load_scripts(){
	wp_enqueue_media();
	wp_enqueue_style( 'geek_unit_framework', get_template_directory_uri(). '/theme-options/css/theme-options.css' ,false, '1.0.0');
	// Enqueue custom option panel JS
	wp_enqueue_script( 'options-custom', get_template_directory_uri(). '/theme-options/js/theme-options.js', array( 'jquery' ) );
	wp_enqueue_script( 'media-uploader', get_template_directory_uri(). '/theme-options/js/media-uploader.js', array( 'jquery') );		
}

add_action( 'admin_menu', 'geek_unit_options_add_page' );
function geek_unit_options_add_page() {
	add_theme_page( 'geek_unit Options', 'Theme Options', 'edit_theme_options', 'geek_unit_framework', 'geek_unit_framework_page');
}

function geek_unit_framework_page(){
  include 'admin-page.php';
}

//compatibilité WPML, rendre les options translatables
if ( function_exists('icl_register_string')){
  add_action('wp_ajax_icl_tl_rescan', 'geek_unit_options_wpml_translate');
  function geek_unit_options_wpml_translate(){
    $theme_options = get_option( 'geek_unit_theme_options' );
    foreach ( $theme_options as $key => $option ){
      if ( intval($option)>0 ) continue;
      if ( !is_string($option) ) continue;
      icl_register_string( 'geek_unit_options', $key, apply_filters('widget_text', $option));
    }
  }
}