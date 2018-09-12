<?php
/**
 * login form customisation
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

add_action('login_head', 'geek_unit_logo_head');
function geek_unit_logo_head(){
  echo '
  <link rel="shortcut icon" href="' . get_template_directory_uri(). '/images/favicon.ico" type="image/x-icon" />
  <style>
			.login h1 a {
				background-image: url("' . get_template_directory_uri().  '/images/logo_admin.png");
				background-size: contain;
				background-position: top center;
				background-repeat: no-repeat;
				width: auto;
				height: 100px;
				text-indent: -9999px;
				overflow: hidden;
				padding-bottom: 15px;
				display: block;
				}
				.login #nav a, .login #backtoblog a {
          color: #000;
        }
		</style>';
}
