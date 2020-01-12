<?php
require_once( 'Electronic/ElectronicInterface.php' );
require_once( 'Electronic/TelevisionClass.php' );
require_once( 'Electronic/MicrowaveClass.php' );
require_once( 'Electronic/ConsoleClass.php' );

class ElectronicItems {

	private $items = array();
	public $total;
	/**
	 * Constructor.
	 *
	 * @param string $type
	 * @param float $price
	 * @param int $controller
	 */
	public function setItem( $type, float $price, $controller = 0 ) {
		if ( 'television' === $type ) {
			$item = new TelevisionClass();
			if ( abs( $controller ) <= $item->maxExtras() ) {
				throw new Exception( 'Controller should not more than ' . $item->maxExtras() );
			} else {
				$item->setController( $controller );
			}
		}
		if ( 'console' === $type ) {
			$item = new ConsoleClass();
			if ( abs( $controller ) > $item->maxExtras() ) {
				throw new Exception( 'Controller should not more than ' . $item->maxExtras() );
			} else {
				$item->setController( $controller );
			}
		}
		if ( 'microwave' === $type ) {
			$item = new MicrowaveClass();
			if ( abs( $controller ) <= $item->maxExtras() ) {
				throw new Exception( 'Controller should not more than ' . $item->maxExtras() );
			}
		}
		$item->setPrice( $price );
		$this->items[] = $item;
	}
	/**
	 * getItems function.
	 *
	 * @return object
	 */
	public function getAllItems() {
		return $this->items;
	}

	/**
	 * getTotalPrice function
	 *
	 * @return float $total
	 */
	public function getTotalPrice() {
		$total = 0;
		if ( $this->filteredItems != null ) {
			$items = $this->filteredItems;
		}else{
			$items = $this->items;
		}
		foreach ( $items as $chunkItem ) {
			$total += $chunkItem->getPrice();
		}
		return $total;
	}

	/**
	 * filterItemByType
	 * Filter Item by Items
	 * @param string $type
	 * @return object $filterItems
	 */
	public function filterItemByType( $type ) {
		foreach ( $this->items as $filterItem ) {
			if ( $filterItem->getType() === $type ) {
				$this->filteredItems[] = $filterItem;
			}
		}
		return $this->filteredItems;
	}

	/**
	 * Returns the items depending on the sorting type requested.
	 * @param string $type
	 * @return array
	 */
	public function getSortedItems( $type = SORT_NUMERIC ) {
		$sorted = array();
		if ( $this->filteredItems != null ) {
			$items = $this->filteredItems;
		}else{
			$items = $this->items;
		}
		foreach ( $items as $item ) {
			$sorted[ ( $item->getPrice() * 100 ) ] = $item;
		}
		ksort( $sorted, $type );
		return $sorted;
	}
}

$item = new ElectronicItems();
$item->setItem( 'television', 505, -2 );
$item->setItem( 'television', 55, 1 );
$item->setItem( 'microwave', 150, 1 );
$item->setItem( 'console', 130.25 );

// Get All Items
var_dump( $item->getAllItems() );

// Get Total Price
echo $item->getTotalPrice();

// Get Filtered Item by Type
$item->filterItemByType( 'television' );

// Get Sorted Item by Price
var_dump( $item->getSortedItems() );