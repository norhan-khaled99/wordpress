<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuki
 */

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	/**
	 * Hook - yuki_action_after_content.
	 */
	do_action( 'yuki_action_after_content' );

	/**
	 * Hook - yuki_action_before_footer.
	 */
	do_action( 'yuki_action_before_footer' );

	/**
	 * Hook - yuki_action_footer.
	 */
	do_action( 'yuki_action_footer' );

	/**
	 * Hook - yuki_action_after_footer.
	 */
	do_action( 'yuki_action_after_footer' );

	/**
	 * Hook - yuki_action_after.
	 */
	do_action( 'yuki_action_after' );
}

// document close
get_template_part( 'template-parts/document', 'close' );
