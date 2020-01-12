<?php
/**
 * Microwave Electronics Items class.
 *
 * @var array $items // array.
 */
class MicrowaveClass implements ElectronicInterface {

	/**
	* @var float
	*/
	private $price;

	/**
	* @var string
	*/
	private $type = 'microwave';

	/**
	* @var int
	*/
	private $controller = 0;

	public function maxExtras() {
		return $this->controller;
	}

	/**
	 * Price
	 * @param float $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}

	/**
	 * Controller
	 * @param int $controller
	 */
	public function setController( $controller ) {
		$this->controller = $controller;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrice() {
		return $this->price;
	}

}