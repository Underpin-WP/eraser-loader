<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $class ) {
	if ( 'Underpin\Underpin' === $class ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Eraser.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Eraser_Instance.php' );
		Underpin\underpin()->loaders()->add( 'erasers', [
			'instance' => 'Underpin_Erasers\Abstracts\Eraser',
			'default'  => 'Underpin_Erasers\Factories\Eraser_Instance',
		] );
	}
} );