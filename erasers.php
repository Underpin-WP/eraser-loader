<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'erasers', [
	'update' => function ( Underpin $plugin ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Eraser.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Eraser_Instance.php' );
		$plugin->loaders()->add( 'erasers', [
			'instance' => 'Underpin_Erasers\Abstracts\Eraser',
			'default'  => 'Underpin_Erasers\Factories\Eraser_Instance',
		] );
	},
] ) );