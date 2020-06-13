<?php
/**
 * profisme Theme Customizer.
 *
 * @package profisme
 */


function profisme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
}
add_action( 'customize_register', 'profisme_customize_register' );
/**
 * Register panels for Customizer.
 *
 * @since profisme 
 */
function profisme_customizer_register( $wp_customize ) {
	
	$wp_customize->add_panel(
		'profisme_frontpage_sections', array(
			'priority' => 128,
			'title' => esc_html__( 'Homepage Section', 'profisme' ),
		)
	);	
}
add_action( 'customize_register', 'profisme_customizer_register' );