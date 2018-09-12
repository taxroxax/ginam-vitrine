<?php
/**
 * register taxo mot clé
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

add_action('init', 'geek_unit_init_motcle_actus', 2);
function geek_unit_init_motcle_actus(){
  //taxonomies
  $labels = get_custom_taxonomy_labels( 'Mot clé', 'Mots clé', 1);
  $args = array(
    'hierarchical'      => false,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
  );
  register_taxonomy( TAXONOMY_MOT_CLE_ACTUS, POST_TYPE_ACTUALITE, $args );
	
}