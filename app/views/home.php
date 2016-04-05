	<div class="warp">
	<?php 
			if(isset($_NOTIF) && !empty($_NOTIF)){ echo '<div class="notif '. $_NOTIF['type'] .'">'. $_NOTIF['text'] .'</div>'; }else{echo '<div class="notif"></div>';}
			$i = 0;
			foreach ($_SESSION['PERSO'] as $key => $perso) {
				if($perso->getInfo( 'vie' ) > 0){
				$html = '<div id="perso" class="perso pName'. ucfirst( $perso->getInfo( 'name' ) ) .'">';
				$html .= '<div class="img_perso" style="background-image: url(\'/assets/img/'. $perso->getInfo('image') .'\');"></div>';
				$html .= '<h2>' . $perso->getInfo( 'name' ) . '</h2>';
				$html .= '<div class="stat">';

					$html .= '<strong class="key_stat" title="Vie"><i class="icon vie_icon fa fa-heart"></i><em class="val_stat" style="width:'. $perso->getInfo('vie') .'%;"></em></strong>';
					$html .= '<strong class="key_stat" title="Force"><i class="icon vie_icon fa fa-heart"></i><em class="val_stat" style="width:'. $perso->getInfo('force') .'%;"></em></strong>';
					$html .= '<strong class="key_stat" title="Défense"><i class="icon defense_icon fa fa-shield"></i><em class="val_stat" style="width:'. $perso->getInfo('defense') .'%;"></em></strong>';
					$html .= '<strong class="key_stat" title="Vitesse"><em class="val_stat" style="width:'. $perso->getInfo('vitesse') .'%;"></em></strong>';
					$html .= '<strong class="key_stat" title="Précision"><em class="val_stat" style="width:'. $perso->getInfo('precision') .'%;"></em></strong>';

					$html .= '<em class="spec_stat">'. $perso->getInfo('spec') .' amélioré !</em>';
				$html .= '</div>';


				$html .= '<form action="" method="POST">
						<input type="hidden" name="perso" value="'. ucfirst($perso->getInfo('class')) .'">
						<input type="hidden" name="myperso" class="myperso" value="">';


				$html .= '<button type="submit" value="choice" class="choix" bat-name="'. ucfirst( $perso->getInfo( 'class' ) ) .'" bat-class="pName'. ucfirst( $perso->getInfo( 'name' ) ) .'">Choisir</button>
						<button type="submit" value="attak" name="atk" class="attaque">Attaquer</button></form>';

				echo $html .'</div>';
				}else{

					$test = $i;

					unset($_SESSION['PERSO'][$i]);
				}
				$i++;
			}


		?>
	</div>