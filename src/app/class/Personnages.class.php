<?php
	abstract class Personnages
	{
		protected $DB;

		protected $id;
		protected $image;
		protected $name;
		protected $force = 50;
		protected $defense = 50;
		protected $vitesse = 50;
		protected $vie = 100;
		protected $precision = 30;
		protected $energy = 3;
		protected $sup;
		protected $spec;
		
		protected $armory = false;
		
		const MIN_VAL = 0;
		const MAX_VAL = 100;
		const ENERGY  = 3;
		const PERTE_ENERGY  = 3;

		public function setPerso($key = false, $val = false)
		{
			if( $key ){
				if( $val ){ $this->$key = $val; }else{ $this->$key = parent::val; }
			}else{
				$req = $this->DB->query('SELECT * FROM perso WHERE ptype = ?', $this->class);
				if( $res = $req->fetchObject() ){
					$this->id        = (int) $res->pid;
					$this->class     = $res->ptype;
					$this->name      = $res->pname;
					$this->force     = (int) $res->pforce;
					$this->defense   = (int) $res->pdefense;
					$this->vitesse   = (int) $res->pvitesse;
					$this->vie       = (int) $res->pvie;
					$this->precision = (int) $res->pprecision;
					$this->energy    = (int) $res->penergy;
					$this->spec      = $res->pspec;
					$this->sup       = (int) $res->psup;
					$this->image     = $res->pimg;


					if( !$this->armory ){ $this->setArmory(); }
				}
			}
		}

		public function setArmory()
		{
			$req = $this->DB->query('SELECT * FROM armory WHERE aperso = ? AND aactif = 1', $this->id);
			if( $res = $req->fetchAll() ){
				$this->armory = $res;
			}
		}

		public function updatePerso($id, $array, $val = false)
		{	
			if( !is_array( $array ) ){
				$array = array($array => $val);
			}

			$text = '';
			$exec = array('id' => $id);
			foreach ($array as $key => $value) {
				$myClassVar = strstr($key, 'p');
				$this->myClassVar = $value;
				$text .= $key.'=:'.$key.', ';
				$exec[$key] = $value;
			}

			$text = mb_strrchr($text, ',', true);

			$this->DB->query('UPDATE perso SET '.$text.' WHERE pid=:id', $exec);
		}

		public function atk(Personnages $cible)
		{
			$degat = $this->force - $cible->defense;

			if( $degat >= 0 ){
				if($degat >= $cible->vie){ $degat = $cible->vie; }

				if($degat != 0){
					$cible->vie = $cible->vie - $degat;
					$type = 'success';
					$win = $this->id; 
				}else{
					$type = 'infonoif';
					$win = 0;
				}

				$text = '<strong>'. $this->name .'</strong> fait <strong>'. $degat .'</strong> dégats à <strong>'. $cible->name .'</strong>';

				$this->updatePerso($cible->id, ['pvie' => $cible->vie]);
				$this->updatePerso($this->id, ['penergy' => self::PERTE_ENERGY]);
			}else {
				$degat = $degat * -1;
				if($degat >= $this->vie){ $degat = $this->vie; }


				$this->vie = $this->vie - $degat;
				$type = 'unsuccess';
				$win = $cible->id;
				$text = '<strong>'. $this->name .'</strong> reçois <strong>'. $degat .'</strong> dégats de <strong>'. $cible->name .'</strong>';

				$this->updatePerso($this->id, ['pvie' => $this->vie, 'penergy' => self::PERTE_ENERGY]);
			}
			
			$this->DB->query('INSERT INTO battle (bperso_atk, bperso_dfs, bdegat, bwin, btime ) VALUES (:bperso_atk, :bperso_dfs, :bdegat, :bwin, :btime);', 
				array(
					'bperso_atk' => $this->id,
					'bperso_dfs' => $cible->id,
					'bdegat' => $degat,
					'bwin' => $win,
					'btime' => time()
					)
				);

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