<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/shorttrack.php";
	$aktuelleSeiteEN = "statistics/shorttrack.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "shorttrack";
	$piste = "ShortTrack";
	$pisteQuery = "ShortTrack";
	$title = $lang['title_shorttrack'];
	$description = $lang['desc_shorttrack'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>