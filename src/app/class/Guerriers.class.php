<?php
	class Guerriers extends Personnages
	{
		protected $class = '_GUR';


		function __construct($DB)
		{
			$this->DB = $DB;
			$this->setPerso();			
		}
	}