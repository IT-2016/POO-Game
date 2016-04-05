<?php
	abstract class Personnages
	{

		protected $image;
		protected $name;
		protected $force = 50;
		protected $defense = 50;
		protected $vitesse = 50;
		protected $vie = 100;
		protected $precision = 30;
		protected $energy = 3;
		protected $spec;
		
		const MIN_VAL = 0;
		const MAX_VAL = 100;
		const ENERGY  = 3;

		function __construct()
		{
			
		}

		public function setPerso($arr)
		{
			// var_dump($arr);
		}

		public function atk(Personnages $cible)
		{
			// echo $this->name.' attaque '.$cible->name;
			$degat = $cible->vie - ( $this->force - $cible->defense );

			if($degat > 0 && $degat <= $cible->vie){
				$cible->vie = $cible->vie - $degat;
				$type = 'success';
				$text = '<strong>'. $this->name .'</strong> fait <strong>'. $degat .'</strong> dégats à <strong>'. $cible->name .'</strong>';				
			}else{
				$degat = $this->vie;
				$this->vie = 0;
				$type = 'unsuccess';
				$text = '<strong>'. $this->name .'</strong> reçois <strong>'. $degat .'</strong> dégats de <strong>'. $cible->name .'</strong>';
			}

			return $_NOTIF = array(
					'type' => $type,
					'text' => $text
				);
		}

		public function getInfo($val)
		{
			return $this->$val;
		}
	}