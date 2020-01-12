<?php
/**
 * Television Electronics Items class.
 *
 * @var array $items // array.
 */
class TelevisionClass implements ElectronicInterface {

	/**
	* @var float
	*/
	private $price;

	/**
	* @var string
	*/
	private $type = 'television';

	/**
	* @var int
	*/
	private $controller = -1;

	public function maxExtras() {
		return $this->controller;
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

}