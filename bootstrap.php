<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'erasers', [
	'instance' => 'Underpin\Erasers\Abstracts\Eraser',
	'default'  => 'Underpin\Erasers\Factories\Eraser_Instance',
] ) );