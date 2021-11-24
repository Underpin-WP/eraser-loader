<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'erasers', [
	'abstraction_class' => 'Underpin\Erasers\Abstracts\Eraser',
	'default_factory'  => 'Underpin\Erasers\Factories\Eraser_Instance',
] ) );