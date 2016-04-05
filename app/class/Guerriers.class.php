<?php
	class Guerriers extends Personnages
	{
		protected $class = '_GUR';
		protected $image = 'guer.png';
		protected $name = 'Archonte';
		protected $force = 60;
		protected $defense = 35;
		protected $vitesse = 40;
		protected $vie = 100;
		protected $precision = 60;
		protected $spec = 'Force';


		function __construct()
		{
			
		}
	}