<?php

class Page {
	protected $nameProject = 'GAME';
	protected $DB = false;

	public function __construct($DB){
		$this->DB = $DB;
	}

	public function getInfo($info){
		return $this->$info;
	}
}
	
