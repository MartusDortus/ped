<?php

Class TicketCollection {

	protected $collection = array();

	public function __get($property) {
		if(property_exists($this, $property)) {
			return $this->$property;
		}
	}
	public function __set($property, $value) {
		if(property_exists($this, $property)) {
			$this->$property = $value;
		}
		return $this->$property;
	}
	public function __construct(?array $list = null) {
		$collection = $this->proceedList($list);
	}

	private function proceedList($list) {
		require_once "ticket.php";
		foreach($list as $l) {
			$this->collection[$l->id_t] = new Ticket($l);
		}
	}
}
