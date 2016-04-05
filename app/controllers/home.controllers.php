<?php
	
	$_PERSO = array(
		$_ARC = new Archers(),
		$_GUR = new Guerriers(),
		$_CVL = new Cavaliers(),
		$_MAG = new Magiciens()
	);
	$_SESSION['PERSO'] = $_PERSO;

	if(isset($_POST['atk']) && $_POST['atk'] == 'attak'){

		if(isset($_POST['myperso']) && !empty($_POST['myperso']) && isset($_POST['perso']) && !empty($_POST['perso']) ){
			$bat_myperso = $$_POST['myperso'];
			$bat_perso = $$_POST['perso'];

			$_NOTIF = $bat_myperso->atk( $bat_perso, $_POST['myperso'], $_POST['perso'] );
		}
	}
