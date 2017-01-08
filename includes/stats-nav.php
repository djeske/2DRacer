				<div class="stats-nav links">
					<h2><?php echo $lang['nav_h2_weltrangliste']; ?></h2>
					<ul>
						<li <?php if ($currentStat == 'rating') { echo "class=\"stats-nav-selected\""; } ?> id="li-rating">
							<a href="rating.php"><?php echo $lang['a_weltrangliste']; ?></a>
						</li>
					</ul>
					<h2><?php echo $lang['nav_h2_rundenrekorde']; ?></h2>
					<ul>	
						<li <?php if ($currentStat == 'curvey') { echo "class=\"stats-nav-selected\""; } ?>><a href="curvey.php">Curvey</a></li>
						<li <?php if ($currentStat == 'danman') { echo "class=\"stats-nav-selected\""; } ?>><a href="danman.php">DanMan</a></li>
						<li <?php if ($currentStat == 'dirtroad') { echo "class=\"stats-nav-selected\""; } ?>><a href="dirtroad.php">DirtRoad</a></li>
						<li <?php if ($currentStat == 'duckway') { echo "class=\"stats-nav-selected\""; } ?>><a href="duckway.php">Duckway</a></li>
						<li <?php if ($currentStat == 'endurancecurve') { echo "class=\"stats-nav-selected\""; } ?>><a href="endurancecurve.php">EnduranceCurve</a></li>
						<li <?php if ($currentStat == 'freakyfreitea') { echo "class=\"stats-nav-selected\""; } ?>><a href="freakyfreitea.php">Freaky Freitea</a></li>
						<li <?php if ($currentStat == 'hardlyfastly') { echo "class=\"stats-nav-selected\""; } ?>><a href="hardlyfastly.php">HardlyFastly</a></li>
						<li <?php if ($currentStat == 'bigcircle') { echo "class=\"stats-nav-selected\""; } ?>><a href="bigcircle.php">Big Circle</a></li>
						<li <?php if ($currentStat == 'lukaskari') { echo "class=\"stats-nav-selected\""; } ?>><a href="lukaskari.php">Lukaskari</a></li>
						<li <?php if ($currentStat == 'madline') { echo "class=\"stats-nav-selected\""; } ?>><a href="madline.php">Madline</a></li>
						<li <?php if ($currentStat == 'noway') { echo "class=\"stats-nav-selected\""; } ?>><a href="noway.php">No Way</a></li>
						<li <?php if ($currentStat == 'raceonglasses') { echo "class=\"stats-nav-selected\""; } ?>><a href="raceonglasses.php">Race on Glasses</a></li>
						<li <?php if ($currentStat == 'racingiron') { echo "class=\"stats-nav-selected\""; } ?>><a href="racingiron.php">Racing Iron</a></li>
						<li <?php if ($currentStat == 'rollercoaster') { echo "class=\"stats-nav-selected\""; } ?>><a href="rollercoaster.php">Rollercoaster</a></li>
						<li <?php if ($currentStat == 'shorttrack') { echo "class=\"stats-nav-selected\""; } ?>><a href="shorttrack.php">ShortTrack</a></li>
						<li <?php if ($currentStat == 'softy') { echo "class=\"stats-nav-selected\""; } ?>><a href="softy.php">Softy</a></li>
						<li <?php if ($currentStat == 'traprise') { echo "class=\"stats-nav-selected\""; } ?>><a href="traprise.php">Traprise</a></li>
						<li <?php if ($currentStat == 'trompeto') { echo "class=\"stats-nav-selected\""; } ?>><a href="trompeto.php">Trompeto</a></li>
						<li <?php if ($currentStat == 'twintway') { echo "class=\"stats-nav-selected\""; } ?>><a href="twintway.php">TwinTway</a></li>
					</ul>
				</div>