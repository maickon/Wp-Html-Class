<?php
/*
Plugin Name: WP Html Class
Plugin URI: https://github.com/maickon/HTMLClass
Description: Este plugin permite que o programador utilize código PHP no lugar de HTML.
Version: 0.0.1
Author: Maickon Rangel
Author URI: http://www.mrcurriculo.orgfree.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! class_exists('WpHtmlClass') ) {
	
	class WpHtmlClass{
		
		function __call( $tag, $propiedades ) {
			
			if( !isset( $propiedades[0] ) ):
				if( $tag == "meta" ):
					echo "<{$tag}>\n";
				elseif( $tag == "hr" || $tag == 'br' || $tag == 'img' || $tag == 'input' || $tag == 'link' ):
					echo "<$tag/>\n";
				else:
					echo "<{$tag}>\n";
				endif;
			else:
				if( $propiedades[0] == 'meta' ):
					echo "<{$tag} {$propiedades[0]}>\n";
				elseif( $propiedades[0] == 'hr' || $propiedades[0] == 'br' || $propiedades[0] == 'img' || $propiedades[0] == 'input' || $propiedades[0] == 'link' ):
					echo "<{$tag} {$propiedades[0]}/>\n";
				else:
					echo "<{$tag} {$propiedades[0]}>\n";
				endif;
			endif;
		}
		
		function __get($tag){
			echo "</{$tag}>\n";
		}
		
		function wp_print( $string, $modo=null ){
			$inverse_bar = "\n";
			$tab = "\t";
			if( $modo == 'decode' ):
				print $tab . utf8_decode( $string ) . $inverse_bar;
			elseif( $modo == 'encode' ):
				print $tab . utf8_encode( $string ) . $inverse_bar;
			else:
				print $tab . $string . $inverse_bar;
			endif;		
		}
	}
	
	$wp_tag = new WpHtmlClass();
} 
?>