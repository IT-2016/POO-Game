<?php
	class Archers extends Personnages
	{
		protected $class = '_ARC';


		function __construct($DB)
		{
			$this->DB = $DB;
			$this->setPerso();
		}
	}