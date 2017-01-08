<?php

// Domain
$domain = "http://www.2dracer.com";

// Projekt-Verzeichnis ausgehend von Root
$root = "/website-2dracer-com/";


// Inkludieren der Sprachdatei
if ($language == "de") {
	include 'lang/de.php';
}
elseif ($language == "en") {
	include 'lang/en.php';
}


// Absolute Pfade für Inhalte unabhängig von der ausgewählten Sprache
$src = array(

		// structure-top
		'css'							=> $root . "css/main.css",
		'favicon'						=> $root . "favicon.ico",
		'nav-car-gruen'					=> $root . "img/nav-car-gruen.png",
		'nav-car-orange'				=> $root . "img/nav-car-orange.png",
		'nav-car-blau'					=> $root . "img/nav-car-blau.png",

		// structure-bottom
		'footer-car-grau'				=> $root . "img/footer-car-grau.png",
		'footer-car-rot'				=> $root . "img/footer-car-rot.png",
		'js'							=> $root . "js/main.js",

		// content-index
		'link_download'					=> $root . "download/2DRacerStart.jar",
		'teaser_reifenstapel'			=> $root . "img/teaser/teaser-grafik-reifenstapel.png",
		'teaser_bigcircle'				=> $root . "img/teaser/teaser-strecke-big-circle.png",
		'teaser_rocket'					=> $root . "img/teaser/teaser-item-rocket.png",
		'teaser_streckenelement'		=> $root . "img/teaser/teaser-grafik-editor-gerade.png",
		'teaser_twintway'				=> $root . "img/teaser/teaser-strecke-twin-tway.png",
		'teaser_shuriken'				=> $root . "img/teaser/teaser-item-shuriken.png",
		'teaser_reverse'				=> $root . "img/teaser/teaser-item-reverse.png",
		'teaser_freakyfreitea'			=> $root . "img/teaser/teaser-strecke-freaky-freitea.png",
		'teaser_wall'					=> $root . "img/teaser/teaser-item-wall.png",
		'teaser_stats'					=> $root . "img/teaser/teaser-stats.png",
		'teaser_action_bulk'			=> $root . "img/teaser/teaser-action-bulk-bots.png",
		'teaser_action_kreuzung'		=> $root . "img/teaser/teaser-action-kreuzung-walls.png",

		// content-impressionen
		'slider_curvey'					=> $root . "img/slider/min-curvey.png",
		'slider_danman'					=> $root . "img/slider/min-danman.png",
		'slider_dirtroad'				=> $root . "img/slider/min-dirtroad.png",
		'slider_duckway'				=> $root . "img/slider/min-duckway.png",
		'slider_endurancecurve'			=> $root . "img/slider/min-endurancecurve.png",
		'slider_freakyfreitea'			=> $root . "img/slider/min-freaky-freitea.png",
		'slider_hardlyfastly'			=> $root . "img/slider/min-hardlyfastly.png",
		'slider_bigcircle'				=> $root . "img/slider/min-big-circle.png",
		'slider_lukaskari'				=> $root . "img/slider/min-lukaskari.png",
		'slider_madline'				=> $root . "img/slider/min-madline.png",
		'slider_noway'					=> $root . "img/slider/min-no-way.png",
		'slider_raceonglasses'			=> $root . "img/slider/min-race-on-glasses.png",
		'slider_racingiron'				=> $root . "img/slider/min-racing-iron.png",
		'slider_rollercoaster'			=> $root . "img/slider/min-rollercoaster.png",
		'slider_shorttrack'				=> $root . "img/slider/min-shorttrack.png",
		'slider_softy'					=> $root . "img/slider/min-softy.png",
		'slider_traprise'				=> $root . "img/slider/min-traprise.png",
		'slider_trompeto'				=> $root . "img/slider/min-trompeto.png",
		'slider_twintway'				=> $root . "img/slider/min-twintway.png",
		'slider_pixelblock'				=> $root . "img/pixel-dot-schwarz.png",
		'slider_pixelblock_rot'			=> $root . "img/pixel-dot-rot.png",
		'slider_rocket'					=> $root . "img/slider/inv-rocket.png",
		'slider_wall'					=> $root . "img/slider/inv-wall.png",
		'slider_shield'					=> $root . "img/slider/inv-shield.png",
		'slider_reverse'				=> $root . "img/slider/inv-reverse.png",
		'slider_boost'					=> $root . "img/slider/inv-boost.png",
		'slider_shuriken'				=> $root . "img/slider/inv-shuriken.png",
		'slider_laser'					=> $root . "img/slider/inv-laser.png",
		'lobby_list'					=> $root . "img/imp-lobby-list.png",
		'lobby_einst'					=> $root . "img/imp-lobby-profile.png",
		'lobby_erstellen'				=> $root . "img/imp-lobby-create-room.png",
		'lobby_raum'					=> $root . "img/imp-lobby-room.png",
		'action_multi'					=> $root . "img/imp-multiplayer-laser.png",

		// content-impressum
		'img_contact'					=> $root . "img/impressum-ver.png",

		// content-rating
		'img_medal_gold'				=> $root . "img/medal-gold.png",
		'img_medal_silber'				=> $root . "img/medal-silber.png",
		'img_medal_bronze'				=> $root . "img/medal-bronze.png",
		
		//  pers-bestzeiten
		'link_persbestzeiten'			=> $root . "ajax/pers-bestzeiten.php",

	);

?>