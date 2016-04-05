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
					$html .= '<strong class="key_stat">Vie</strong> <em class="val_stat">'. $perso->getInfo('vie') .'</em>';
					$html .= '<strong class="key_stat">Force</strong> <em class="val_stat">'. $perso->getInfo('force') .'</em>';
					$html .= '<strong class="key_stat">Défense</strong> <em class="val_stat">'. $perso->getInfo('defense') .'</em>';
					$html .= '<strong class="key_stat">Vitesse</strong> <em class="val_stat">'. $perso->getInfo('vitesse') .'</em>';
					$html .= '<strong class="key_stat">Precision</strong> <em class="val_stat">'. $perso->getInfo('precision') .'</em>';
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