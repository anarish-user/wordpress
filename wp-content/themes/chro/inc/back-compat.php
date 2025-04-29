<?php
/**
 * chro back compat functionality
 *
 * Prevents chro from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 */

/**
 * Prevent switching to chro on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since chro 1.0
 */
function chro_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'chro_upgrade_notice' );
}
add_action( 'after_switch_theme', 'chro_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * chro on WordPress versions prior to 4.7.
 *
 * @since chro 1.0
 *
 * @global string $wp_version WordPress version.
 */
function chro_upgrade_notice() {
	printf(
		'<div class="error"><p>%s</p></div>',
		sprintf(
			/* translators: %s: The current WordPress version. */
			__( 'chro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'chro' ),
			$GLOBALS['wp_version']
		)
	);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since chro 1.0
 *
 * @global string $wp_version WordPress version.
 */
function chro_customize() {
	wp_die(
		sprintf(
			/* translators: %s: The current WordPress version. */
			__( 'chro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'chro' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'chro_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since chro 1.0
 *
 * @global string $wp_version WordPress version.
 */
function chro_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die(
			sprintf(
				/* translators: %s: The current WordPress version. */
				__( 'chro requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'chro' ),
				$GLOBALS['wp_version']
			)
		);
	}
}
add_action( 'template_redirect', 'chro_preview' );
