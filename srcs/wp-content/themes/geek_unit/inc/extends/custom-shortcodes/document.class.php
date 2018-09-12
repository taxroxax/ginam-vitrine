<?php
/**
 * Exemple de shortcode
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */
add_shortcode('document', 'geek_unit_render_document_shortcode');
function geek_unit_render_document_shortcode($attr){
  $list_id = explode(',', $attr['id']);
  ob_start();
  ?>

     <!-- do html here -->

    <?php

  $content = ob_get_contents();
  ob_clean();

  return $content;
}

