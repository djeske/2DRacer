				
				<div class="stats-content rechts">
					<?php
					function rundenrekorde ($piste, $pisteQuery, $itemQuery, $itemStatus, $titlegold, $titlesilber, $titlebronze, $altgold, $altsilber, $altbronze, $srcgold, $srcsilber, $srcbronze, $rundenrekord, $rang, $spieler, $rundenzeit) {
					?>
					<table class="tops">
					<thead>
						<tr>
							<th colspan="3"><h1><?php echo $piste . " " . $rundenrekord ?> <span><?php echo $itemStatus; ?></span></h1></th>
						</tr>
						<tr>
							<th><?php echo $rang; ?></th>
							<th><?php echo $spieler; ?></th>
							<th><?php echo $rundenzeit; ?></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$rank = 1;
					$query = "SELECT strecke, name, rundenzeit, items FROM runde 
							WHERE (strecke = '$pisteQuery')
							AND (items = '$itemQuery')
							ORDER BY rundenzeit ASC LIMIT 10";
					$result = mysql_query($query);
					while ($row = mysql_fetch_object($result)) {
					?>
						<tr>
							<td><?php
								if ($rank == 1) {
										echo "<img title=\"" . $titlegold ."\" alt=\"" . $altgold . "\" src=\"" . $srcgold . "\">";
								}
								else if ($rank == 2) {
										echo "<img title=\"" . $titlesilber ."\" alt=\"" . $altsilber . "\" src=\"" . $srcsilber . "\">";
								}
								else if ($rank == 3) {
										echo "<img title=\"" . $titlebronze ."\" alt=\"" . $altbronze . "\" src=\"" . $srcbronze . "\">";
								}
							 	echo $rank; ?>
							 </td>
							<td><?php echo $row->name; ?></td>
							<td>
							<?php
							$rundenzeit = $row->rundenzeit;
						    $sekunden = ($rundenzeit / 1000) % 60;
						    $minuten = ($rundenzeit / (1000 * 60)) % 60;
						    $millisekunden = $rundenzeit % 1000;
						    if (strlen($millisekunden) == 1) {
						    	$millisekunden = "00".$millisekunden;
						    }
						    elseif (strlen($millisekunden) == 2) {
						    	$millisekunden = "0".$millisekunden;
						    }
						    if (strlen($sekunden) == 1 && $minuten != 0) {
						    	$sekunden = "0".$sekunden;
						    }
						    if ($minuten != 0) {
						   		echo $minuten.":".$sekunden.":".$millisekunden;
						  	}
						  	else {
						  		echo $sekunden.":".$millisekunden;
						  	}
							?>
							</td>
						</tr>
					<?php
					$rank++;
						}
					?>
					</tbody>
					</table>
					<?php
					}
					rundenrekorde ($piste, $pisteQuery, 'n', $lang['ohne_items'], $lang['title_img_medal_gold'], $lang['title_img_medal_silber'], $lang['title_img_medal_bronze'], $lang['alt_img_medal_gold'], $lang['alt_img_medal_silber'], $lang['alt_img_medal_bronze'], $src['img_medal_gold'], $src['img_medal_silber'], $src['img_medal_bronze'], $lang['h1_rundenrekord'], $lang['th_rang'], $lang['th_spieler'], $lang['th_rundenzeit']);
					rundenrekorde ($piste, $pisteQuery, 'j', $lang['mit_items'], $lang['title_img_medal_gold'], $lang['title_img_medal_silber'], $lang['title_img_medal_bronze'], $lang['alt_img_medal_gold'], $lang['alt_img_medal_silber'], $lang['alt_img_medal_bronze'], $src['img_medal_gold'], $src['img_medal_silber'], $src['img_medal_bronze'], $lang['h1_rundenrekord'], $lang['th_rang'], $lang['th_spieler'], $lang['th_rundenzeit']);
					?>
					<div>
						<span id="php-jquery-variable-hack" class="<?php echo $pisteQuery; ?>"></span>
						<span id="php-jquery-variable-hack2" class="<?php echo $lang['no_rundenzeit']; ?>"></span>
						<span id="php-jquery-variable-hack3" class="<?php echo $lang['ohne_items']; ?>"></span>
						<span id="php-jquery-variable-hack4" class="<?php echo $lang['mit_items']; ?>"></span>
						<span id="php-jquery-variable-hack5" class="<?php echo $lang['th_bestzeit']; ?>"></span>
						<span id="php-jquery-variable-hack6" class="<?php echo $lang['th_von']; ?>"></span>
						<span id="php-jquery-variable-hack7" class="<?php echo $lang['th_rang']; ?>"></span>
						<span id="php-jquery-variable-hack8" class="<?php echo $lang['th_rundenzeit']; ?>"></span>
						<span id="php-jquery-variable-hack9" class="<?php echo $src['link_persbestzeiten']; ?>"></span>
						<span id="php-jquery-variable-hack10" class="<?php echo $src['img_medal_gold']; ?>"></span>
						<span id="php-jquery-variable-hack11" class="<?php echo $src['img_medal_silber']; ?>"></span>
						<span id="php-jquery-variable-hack12" class="<?php echo $src['img_medal_bronze']; ?>"></span>
						<span id="php-jquery-variable-hack13" class="<?php echo $lang['title_img_medal_gold']; ?>"></span>
						<span id="php-jquery-variable-hack14" class="<?php echo $lang['title_img_medal_silber']; ?>"></span>
						<span id="php-jquery-variable-hack15" class="<?php echo $lang['title_img_medal_bronze']; ?>"></span>
						<span id="php-jquery-variable-hack16" class="<?php echo $lang['alt_img_medal_gold']; ?>"></span>
						<span id="php-jquery-variable-hack17" class="<?php echo $lang['alt_img_medal_silber']; ?>"></span>
						<span id="php-jquery-variable-hack18" class="<?php echo $lang['alt_img_medal_bronze']; ?>"></span>
					</div>
					<h3><?php echo $lang['h3_persbest']; ?></h3>
					<p><?php echo $lang['p_persbest_frage']." ".$piste."? ".$lang['p_persbest_info']; ?></p>
					<div class="pers-rekorde">
						<input type="text" name="name" id="name" value="<?php echo $lang['input_name_value']; ?>">
						<input type="submit" name="name-submit" id="name-submit" class="do-button" value="<?php echo $lang['input_submit_value']; ?>">
					</div>
					<div id="name-data"></div>

					<?php
					mysql_close($verbindung);
					?>
				</div>