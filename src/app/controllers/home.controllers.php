<?php
	
	$_PERSO = array(
		$_ARC = new Archers($_DB),
		$_GUR = new Guerriers($_DB),
		$_CVL = new Cavaliers($_DB),
		$_MAG = new Magiciens($_DB),
		$_SOL = new Soldats($_DB)
	);

	if(isset($_POST['atk']) && $_POST['atk'] == 'attak'){

		if(isset($_POST['myperso']) && !empty($_POST['myperso']) && isset($_POST['perso']) && !empty($_POST['perso']) ){
			$bat_myperso = $$_POST['myperso'];
			$bat_perso = $$_POST['perso'];

			$_NOTIF = $bat_myperso->atk( $bat_perso, $_POST['myperso'], $_POST['perso'] );
		}
	}
