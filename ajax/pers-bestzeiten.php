<?php
if (isset($_POST['name']) === true && empty($_POST['name']) === false) {

	function persBestzeiten ($itemStatus, $itemText) {
		require '../includes/db-connect.php';
		$queryPersRank = "SELECT COUNT(*) AS pers_rank FROM runde WHERE strecke='". mysql_real_escape_string(trim($_POST['piste'])) . "' AND items='$itemStatus' AND rundenzeit < (SELECT Min(rundenzeit) FROM runde WHERE strecke='". mysql_real_escape_string(trim($_POST['piste'])) . "' AND items='$itemStatus' AND name ='". mysql_real_escape_string(trim($_POST['name'])) . "')";
		$resultPersRank = mysql_query($queryPersRank);
		while ($row = mysql_fetch_object($resultPersRank)) {
			$persRank = $row->pers_rank +1;
		}
		$queryPersZeit = "SELECT name, Min(rundenzeit) AS pers_rundenzeit FROM runde WHERE items='$itemStatus' AND strecke='". mysql_real_escape_string(trim($_POST['piste'])) . "' and name='". mysql_real_escape_string(trim($_POST['name'])) . "'";
		$resultPersZeit = mysql_query($queryPersZeit) OR die("Error: $queryPersZeit<br>".mysql_error());
		while ($row = mysql_fetch_object($resultPersZeit)) {
							$rundenzeit_unformatiert = $row->pers_rundenzeit;
							if ($rundenzeit_unformatiert != "") {
							    $sekunden = ($rundenzeit_unformatiert / 1000) % 60;
							    $minuten = ($rundenzeit_unformatiert / (1000 * 60)) % 60;
							    $millisekunden = $rundenzeit_unformatiert % 1000;
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
							   		$persRundenzeit = $minuten.":".$sekunden.":".$millisekunden;
							  	}
							  	else {
							  		$persRundenzeit = $sekunden.":".$millisekunden;
								}
							}
							else {
								$persRundenzeit = $_POST['lang_norundenzeit'];
								$persRank = "No";
							}
							?>
							<tr>
								<td
								<?php 
								if ($persRank == 1) { ?>class="gold"<?php }
								elseif ($persRank == 2) { ?>class="silber"<?php } 
								elseif ($persRank == 3) { ?>class="bronze"<?php }
								elseif ($persRank >=4 AND $persRank <= 10) { ?>class="blau-highlight"<?php }  
								?>
								>
								<?php
								if ($persRank == 1) { echo "<img title=\"".$_POST['title_gold']."\" alt=\"".$_POST['alt_gold']."\" src=\"".$_POST['img_gold']."\">"; }
								elseif ($persRank == 2) { echo "<img title=\"".$_POST['title_silber']."\" alt=\"".$_POST['alt_silber']."\" src=\"".$_POST['img_silber']."\">"; } 
								elseif ($persRank == 3) { echo "<img title=\"".$_POST['title_bronze']."\" alt=\"".$_POST['alt_bronze']."\" src=\"".$_POST['img_bronze']."\">"; }
								?>
								<?php echo $persRank; ?>
								</td>
								<td>
								<?php echo $itemText;?>
								</td>
								<td>
								<?php echo $persRundenzeit; ?>
								</td>
							</tr>
<?php
							
		}
	}
?>
	<table class="persTops">
		<thead>
			<tr>
				<th colspan="3"><h1><?php echo $_POST['piste'] . " " . $_POST['th_bestzeit']. " <span>" . $_POST['th_von'] . " " . $_POST['name'] . "</span>" ?></h1></th>
			</tr>
			<tr>
				<th><?php echo $_POST['th_rang']; ?></th>
				<th>Items</th>
				<th><?php echo $_POST['th_rundenzeit']; ?></th>
			</tr>
		</thead>
		<tbody>
<?php
	persBestzeiten('n', $_POST['ohne_items']);
	persBestzeiten('j', $_POST['mit_items']);
?>
		</tbody>
	</table>
<?php
}
?>