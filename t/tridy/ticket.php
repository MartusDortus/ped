<?php
/*
 *
 *	TODO
 *	- Pridat ke konstruktoru poslednich nekolik "notes" k zobrazeni v nahledu
 *
 */
Class ticket {

	protected $id;
	protected $name;
	protected $description;
	protected $created;
	protected $deadline;
	protected $closed;
	protected $parent;

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

}
