	<div class="warp">
	<?php 
			if(isset($_NOTIF) && !empty($_NOTIF)){ echo '<div class="notif '. $_NOTIF['type'] .'">'. $_NOTIF['text'] .'</div>'; }else{echo '<div class="notif"></div>';}
			foreach ($_PERSO as $key => $perso) {

				$spec = strtolower( $perso->getInfo('spec') );

				if($perso->getInfo( 'vie' ) > 0 && $perso->getInfo( 'energy' ) > 0 && count($_PERSO) > 1){
				$html = '<div id="perso" class="perso pName'. ucfirst( $perso->getInfo( 'name' ) ) .'">';
				$html .= '<div class="img_perso" style="background-image: url(\'/assets/img/'. $perso->getInfo('image') .'\');"></div>';
				$html .= '<h2>' . $perso->getInfo( 'name' ) . '</h2>';
				$html .= '<div class="stat">';

					$html .= '<strong class="key_stat" title="Vie : '. $perso->getInfo('vie') .'%"><i class="icon vie_icon fa fa-heart"></i><span class="val_stat" style="width:'. $perso->getInfo('vie') .'%;"></span></strong>';
					// Force
					$html .= '<strong class="key_stat" title="Force : '. $perso->getInfo('force') .'%"><i class="icon vie_icon fa fa-heart"></i><span class="val_stat" style="width:'. $perso->getInfo('force') .'%;">';
					if( $spec == 'force' ){
						$html .= '<span class="sup_stat" style="width:'. $perso->getInfo('sup') .'%;"></span>';
					}
					$html .= '</span></strong>';
					
					// Defense
					$html .= '<strong class="key_stat" title="Défense : '. $perso->getInfo('defense') .'%"><i class="icon defense_icon fa fa-shield"></i><span class="val_stat" style="width:'. $perso->getInfo('defense') .'%;">';
					if( $spec == 'defense' ){
						$html .= '<span class="sup_stat" style="width:'. $perso->getInfo('sup') .'%;"></span>';
					}
					$html .= '</span></strong>';

					// Vitesse
					$html .= '<strong class="key_stat" title="Vitesse : '. $perso->getInfo('vitesse') .'%"><i class="icon defense_icon fa fa-shield"></i><span class="val_stat" style="width:'. $perso->getInfo('vitesse') .'%;">';
					if( $spec == 'vitesse' ){
						$html .= '<span class="sup_stat" style="width:'. $perso->getInfo('sup') .'%;"></span>';
					}
					$html .= '</span></strong>';

					// Précision
					$html .= '<strong class="key_stat" title="Précision : '. $perso->getInfo('precision') .'%"><i class="icon defense_icon fa fa-shield"></i><span class="val_stat" style="width:'. $perso->getInfo('precision') .'%;">';
					if( $spec == 'precision' ){
						$html .= '<span class="sup_stat" style="width:'. $perso->getInfo('sup') .'%;"></span>';
					}
					$html .= '</span></strong>';

					$html .= '<div class="armorys">';
						if( $perso->getInfo('armory') ){
							$armorys = $perso->getInfo('armory');
							$i = 0;
							foreach ($armorys as $key => $value) {
								if( $i == 0 ){ $class = ' active'; }else{ $class = ''; }
								$armory = $armorys[$key];
								$html .= '<span class="armory'. $class .'" style="background-image:url(\'assets/img/armory/'. $armory['aimg'] .'\');" armory-type="'. $armory['atype'] .'" armory-id="'. $armory['aid'] .'" armory-perso="'. $perso->getInfo('class') .'" title="'. ucfirst($armory['aname']) .'"></span>';
								$i++;
							}
						}
					$html .= '</div>';

					// Texte
					if( strlen( $perso->getInfo('spec') ) > 0 ){

						$specialt = ucfirst($perso->getInfo('spec'));
						switch ($specialt) {
							case 'Defense':
								$specialt = 'Défense';
								break;
							case 'Precision':
								$specialt = 'Précision';
								break;
						}

						$html .= '<em class="spec_stat">'. $specialt .' amélioré !</em>';
					}else{
						$html .= '<em class="spec_stat">'. $perso->getInfo('spec') .' Aucune améioration !</em>';
					}
				$html .= '</div>';


				$html .= '<form action="" method="POST">
						<input type="hidden" name="perso" value="'. ucfirst($perso->getInfo('class')) .'">
						<input type="hidden" name="myperso" class="myperso" value="">

						<input type="hidden" name="armory" class="inarmory" value="">
						<input type="hidden" name="myarmory" class="inmyarmory" value="">';


				$html .= '<button type="submit" value="choice" class="choix" bat-name="'. ucfirst( $perso->getInfo( 'class' ) ) .'" bat-class="pName'. ucfirst( $perso->getInfo( 'name' ) ) .'">Choisir</button>
						<button type="submit" value="attak" name="atk" class="attaque">Attaquer</button></form>';

				echo $html .'</div>';
				}
			}


		?>
	</div>