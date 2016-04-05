<?php
	class Archers extends Personnages
	{
		protected $class = '_ARC';
		protected $image = 'arc.png';
		protected $name = 'Foyz';
		protected $force = 25;
		protected $defense = 20;
		protected $vitesse = 65;
		protected $precision = 80;
		protected $spec = 'Précision';


		function __construct()
		{
			// $this->setPerso(array(
			// 		'type' => $this->class,
			// 		'image' => $this->image,
			// 		'name' => $this->name,
			// 		'force' => $this->force,
			// 		'defense' => $this->defense,
			// 		'vitesse' => $this->vitesse,
			// 		'precision' => $this->precision,
			// 		'spec' => $this->spec
			// 	));
		}
	}