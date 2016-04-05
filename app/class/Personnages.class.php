<?php
	abstract class Personnages
	{

		protected $image;
		protected $name;
		protected $force;
		protected $defense;
		protected $vitesse;
		protected $vie;
		protected $precision;
		protected $spec;

		function __construct()
		{
			
		}

		public function atk(Personnages $perso)
		{
			// echo $this->name.' attaque '.$perso->name;
			$degat = $perso->vie - ( $this->force - $perso->defense );

			if($degat > 0 && $degat <= $perso->vie){
				$perso->vie = $perso->vie - $degat;
				$type = 'success';
				$text = '<strong>'. $this->name .'</strong> fait <strong>'. $degat .'</strong> dégats à <strong>'. $perso->name .'</strong>';				
			}else{
				$degat = $this->vie;
				$this->vie = 0;
				$type = 'unsuccess';
				$text = '<strong>'. $this->name .'</strong> reçois <strong>'. $degat .'</strong> dégats de <strong>'. $perso->name .'</strong>';
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