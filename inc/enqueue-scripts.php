<?php

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', null, null, false );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ), true );
	wp_register_script( 'Swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', null, null, false );	
	wp_enqueue_script('Swiper');	
	
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');


