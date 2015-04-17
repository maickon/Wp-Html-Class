<?php
/*
Plugin Name: WP Html Class
Plugin URI: https://github.com/maickon/Wp-Html-Class
Description: Este plugin permite que o programador utilize código PHP no lugar de HTML.
Version: 0.0.1
Author: Maickon Rangel
Author URI: http://www.mrcurriculo.orgfree.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! class_exists('WpHtmlClass') ) {
	
	/*
	 * @author Maickon Rangel
	 */
	
	class WpHtmlClass{
		
		/**
		 * Intercepts a method and uses your name and properties to set up an HTML tag.
		 * @param string $tag method name, used as tag name.
		 * @param string $properties, used as tag properties.
		 */
		function __call( $tag, $properties ) {
			
			if( !isset( $properties[0] ) ):
				if( $tag == "meta" ):
					echo "<{$tag}>\n";
				elseif( $tag == "hr" || $tag == 'br' || $tag == 'img' || $tag == 'input' || $tag == 'link' ):
					echo "<$tag/>\n";
				else:
					echo "<{$tag}>\n";
				endif;
			else:
				if( $properties[0] == 'meta' ):
					echo "<{$tag} {$properties[0]}>\n";
				elseif( $properties[0] == 'hr' || $properties[0] == 'br' || $properties[0] == 'img' || $properties[0] == 'input' || $properties[0] == 'link' ):
					echo "<{$tag} {$properties[0]}/>\n";
				else:
					echo "<{$tag} {$properties[0]}>\n";
				endif;
			endif;
		}
		
		/**
		 * Intercepts a class property and displays it as a closing tag
		 * @param string $tag property name.
		 */
		function __get($tag){
			echo "</{$tag}>\n";
		}
		
		
		/**
		 * Displays a string on the screen
		 * @param string $string string to be displayed.
		 * @param string $mode encoding type.
		 */
		function wp_print( $string, $mode=null ){
			$inverse_bar = "\n";
			$tab = "\t";
			if( $mode == 'decode' ):
				print $tab . utf8_decode( $string ) . $inverse_bar;
			elseif( $mode == 'encode' ):
				print $tab . utf8_encode( $string ) . $inverse_bar;
			else:
				print $tab . $string . $inverse_bar;
			endif;		
		}
	}
	
	$wp_tag = new WpHtmlClass();
} 
?>