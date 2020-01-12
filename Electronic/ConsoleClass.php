<?php
/**
 * Console Electronics Items class.
 *
 * @var array $items // array.
 */
class ConsoleClass implements ElectronicInterface {

	/**
	* @var float
	*/
	private $price;

	/**
	* @var string
	*/
	private $type = 'console';

	/**
	* @var int
	*/
	private $controller = 4;

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

	public function getType() {
		return $this->type;
	}

	public function getPrice() {
		return $this->price;
	}

	/**
	 * Controller
	 * @param int $controller
	 */
	public function setController( $controller ) {
		$this->controller = $controller;
	}
}