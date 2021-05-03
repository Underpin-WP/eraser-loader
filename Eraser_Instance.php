<?php

namespace Underpin_Erasers\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin_Erasers\Abstracts\Eraser;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Eraser_Instance extends Eraser {

	use Instance_Setter;

	protected $get_items_callback;
	protected $erase_item_callback;

	public function __construct( $args ) {
		$this->set_values( $args );
	}

	public function erase_item( $item ) {
		$this->set_callable( $this->erase_item_callback, $item );
	}

	public function get_items( $email, $page ) {
		$this->set_callable( $this->get_items_callback, $email, $page );
	}

}