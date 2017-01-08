<?php
	$language = "en";
	$aktuelleSeiteDE = "de/statistiken/duckway.php";
	$aktuelleSeiteEN = "statistics/duckway.php";
	include '../includes/config.php';
	$currentPage = "statistiken";
	$currentStat = "duckway";
	$piste = "Duckway";
	$pisteQuery = "Duckway";
	$title = $lang['title_duckway'];
	$description = $lang['desc_duckway'];
	include '../includes/structure-top.php';
	include '../includes/content-rundenrekorde.php';
	include '../includes/structure-bottom.php';
?>