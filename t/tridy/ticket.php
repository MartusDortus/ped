<?php
/*
 *
 *	TODO
 *	- Pridat ke konstruktoru poslednich nekolik "notes" k zobrazeni v nahledu
 *
 */
Class ticket {

	/**
	 * TODO:	Rad bych pouzil protected, ale pak se pri generovani JSON stringu
	 * 			v t/detail.php pridavaji znaky "*" a dela to tam nepekny brajgl;
	 * RESENI:	Stavet JSON string metodou zde v classe
	 */
	public $id;
	public $name;
	public $description;
	public $created;
	public $deadline;
	public $closed;
	public $parent;
	public $notes;

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
	public function __construct(?object $ticket = null) {
		$this->id = $ticket->id_t;
		$this->name = $ticket->name;
		$this->description = $ticket->description;
		$this->created = $ticket->created;
		$this->deadline = $ticket->deadline;
		$this->closed = $ticket->closed;
		$this->parent = $ticket->parent;
	}
	/**
	 * Pokud je argument $notes == null => vypise poznamky
	 * Pokud je argument $notes == ?array => zapise poznamky do objektu
	 */

	public function notes(?array $notes = null) {
			$this->notes = $notes;
	}

}
