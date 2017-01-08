<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="<?php echo $description; ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo $src['css']; ?>">
		<link rel="shortcut icon" href="<?php echo $src['favicon']; ?>">
		<link rel="alternate" hreflang="de" href="<?php echo $domain."/".$aktuelleSeiteDE; ?>">
		<link rel="alternate" hreflang="en" href="<?php echo $domain."/".$aktuelleSeiteEN; ?>">
	</head>
	<body>
		<div id="hero">
			<div id="header">
				<div class="container">
					<a href="<?php echo $lang['link_index']; ?>"><strong class="logo"><span>2D</span>Racer</strong></a>
					<div class="navbar">
						<ul class="mainnav">
							<li>
								<a class="nav-start" href="<?php echo $src['link_download']; ?>"><?php echo $lang['a_spielstarten']; ?></a>
								<span>i</span>
								<p><?php echo $lang['p_startinfo']; ?></p>
								<div class="start-markierung">
									<img class="nav-start" title="<?php echo $lang['title_img_nav-car-gruen']; ?>" alt="<?php echo $lang['alt_img_nav-car-gruen']; ?>" src="<?php echo $src['nav-car-gruen']; ?>">
								</div>
							</li>
							<li>
								<a class="nav-imp <?php if ($currentPage == 'impressionen') { echo "nav-selected"; } ?>"  href="<?php echo $lang['link_impressionen']; ?>"><?php echo $lang['a_impressionen']; ?></a>
								<div class="start-markierung">
									<img class="nav-imp" title="<?php echo $lang['title_img_nav-car-orange']; ?>" alt="<?php echo $lang['alt_img_nav-car-orange']; ?>" src="<?php echo $src['nav-car-orange']; ?>">
								</div>
							</li>
							<li>
								<a class="nav-stats <?php if ($currentPage == 'statistiken') { echo "nav-selected"; } ?>" href="<?php echo $lang['link_rating']; ?>"><?php echo $lang['a_statistiken']; ?></a>
								<div class="start-markierung">
									<img class="nav-stats" title="<?php echo $lang['title_img_nav-car-blau']; ?>" alt="<?php echo $lang['alt_img_nav-car-blau']; ?>" src="<?php echo $src['nav-car-blau']; ?>">
								</div>
							</li>
						</ul>
						<div class="select-lang">
							<select onchange="location = this.options[this.selectedIndex].value;">
								<option <?php if ($language == "de") {echo "selected";} ?> value="<?php echo $root.$aktuelleSeiteDE;?>">DE</option>
								<option <?php if ($language == "en") {echo "selected";} ?> value="<?php echo $root.$aktuelleSeiteEN;?>">EN</option>		 
							</select>
						</div>
					</div>
				</div>
			</div>