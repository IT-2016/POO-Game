<?php
	class Cavaliers extends Personnages
	{
		protected $class = '_CVL';

		function __construct($DB)
		{
			$this->DB = $DB;
			$this->setPerso();			
		}
	}