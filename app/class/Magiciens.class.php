<?php
	class Magiciens extends Personnages
	{
		protected $class = '_MAG';

		function __construct($DB)
		{
			$this->DB = $DB;
			$this->setPerso();			
		}
	}