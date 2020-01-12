<?php
/**
 * Interface
 *
 * Override public method to concrete class,
 * then the class itself should be also
 */
interface ElectronicInterface {

	/**
	* This method is
	* It has no body...
	*/
	public function maxExtras();
	public function setPrice( float $price );
	public function getPrice();
	public function getType();
}