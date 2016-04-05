<?php
	class Magiciens extends Personnages
	{
		protected $class = '_MAG';
		protected $image = 'mag.png';
		protected $name = 'Zerglin';
		protected $force = 45;
		protected $defense = 30;
		protected $vitesse = 90;
		protected $precision = 60;
		protected $spec = 'Vitesse';


		function __construct()
		{
		}
	}