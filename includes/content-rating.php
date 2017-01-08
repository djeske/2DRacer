		</div> <!-- Hero Div -->
<?php
	include 'db-connect.php';
?>
		<div class="content-abschnitt">
			<div class="container">
<?php
	include 'stats-nav.php';
?>
				<div class="stats-content rechts">
					<table class="tops">
					<thead>
						<tr>
							<th colspan="3"><h1><?php echo $lang['th_h1_weltrangliste']; ?></h1></th>
						</tr>
						<tr>
							<th><?php echo $lang['th_rang']; ?></th>
							<th><?php echo $lang['th_spieler']; ?></th>
							<th><?php echo $lang['th_rating']; ?></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$rank = 1;
					$query = "SELECT benutzername, rating FROM raceruser 
							WHERE (benutzername <> '2DRacer') 
							AND (benutzername <> 'troll1') 
							AND (benutzername <> 'troll2') 
							AND (benutzername <> 'troll3') 
							AND (benutzername <> 'troll4')
							AND (benutzername <> 'troll123456')
							ORDER BY rating DESC LIMIT 50";
					$result = mysql_query($query);
					while ($row = mysql_fetch_object($result)) {
					?>
						<tr>
							<td><?php
								if ($rank == 1) {
										echo "<img title=\"" . $lang['title_img_medal_gold'] ."\" alt=\"" . $lang['alt_img_medal_gold'] . "\" src=\"" . $src['img_medal_gold'] . "\">";
								}
								else if ($rank == 2) {
										echo "<img title=\"" . $lang['title_img_medal_silber'] ."\" alt=\"" . $lang['alt_img_medal_silber'] . "\" src=\"" . $src['img_medal_silber'] . "\">";
								}
								else if ($rank == 3) {
										echo "<img title=\"" . $lang['title_img_medal_bronze'] ."\" alt=\"" . $lang['alt_img_medal_bronze'] . "\" src=\"" . $src['img_medal_bronze'] . "\">";
								}
							 	echo $rank; ?>
							 </td>
							<td><?php echo $row->benutzername; ?></td>
							<td><?php echo $row->rating; ?></td>
						</tr>
					<?php
					$rank++;
						}
					mysql_close($verbindung);
					?>
					</tbody>
					</table>
					<h3><?php echo $lang['h3_wiegehtdas']; ?></h3>
					<p><?php echo $lang['p_sogehtdas']; ?></p>
				</div>
				<div style="clear: both"></div>
			</div>
		</div>