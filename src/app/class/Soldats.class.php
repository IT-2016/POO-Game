<?php
	class Soldats extends Personnages
	{
		protected $class = '_SOL';

		function __construct($DB)
		{
			$this->DB = $DB;
			$this->setPerso();			
		}
	}