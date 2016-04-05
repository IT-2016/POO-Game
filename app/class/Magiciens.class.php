<?php
	class Magiciens extends Personnages
	{
		protected $class = '_MAG';
		protected $image = 'mag.png';
		protected $name = 'Zerglin';
		protected $force = 35;
		protected $defense = 20;
		protected $vitesse = 90;
		protected $vie = 65;
		protected $precision = 45;
		protected $spec = 'Vitesse';


		function __construct()
		{
			
		}
	}