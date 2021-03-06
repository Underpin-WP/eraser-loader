<?php

namespace Underpin\Erasers\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin\Erasers\Abstracts\Eraser;

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
		return $this->set_callable( $this->erase_item_callback, $item );
	}

	public function get_items( $email, $page ) {
		return $this->set_callable( $this->get_items_callback, $email, $page );
	}

}